<?php
// src/SD/CoreBundle/Controller/TimetableController.php

namespace SD\CoreBundle\Controller;

use SD\CoreBundle\Entity\UserParameter;
use SD\CoreBundle\Entity\UserContext;
use SD\CoreBundle\Entity\ListContext;
use SD\CoreBundle\Entity\Trace;

use SD\CoreBundle\Entity\Timetable;
use SD\CoreBundle\Entity\TimetableLine;
use SD\CoreBundle\Entity\Constants;

use SD\CoreBundle\Form\TimetableType;
use SD\CoreBundle\Form\TimetableLineType;
use SD\CoreBundle\Form\TimetableLineAddType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\ORM\Events;
use Doctrine\Common\EventManager;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class TimetableController extends Controller
{
    // Affichage des grilles horaires du dossier en cours
    public function indexAction($pageNumber)
    {
    $connectedUser = $this->getUser();
    $em = $this->getDoctrine()->getManager();
    $userContext = new UserContext($em, $connectedUser); // contexte utilisateur

    $timetableRepository = $em->getRepository('SDCoreBundle:Timetable');

    $numberRecords = $timetableRepository->getTimetablesCount($userContext->getCurrentFile());

    $listContext = new ListContext($em, $connectedUser, 'core', 'timetable', $pageNumber, $numberRecords, 'sd_core_timetable_display', 'sd_core_timetable_add');

    $listTimetables = $timetableRepository->getDisplayedTimetables($userContext->getCurrentFile(), $listContext->getFirstRecordIndex(), $listContext->getMaxRecords());
                
    return $this->render('SDCoreBundle:Timetable:index.html.twig', array(
                'userContext' => $userContext,
                'listContext' => $listContext,
		'listTimetables' => $listTimetables));
    }

    // Ajout d'une grille horaire
    public function addAction(Request $request)
    {
	$connectedUser = $this->getUser();
	$em = $this->getDoctrine()->getManager();
	$userContext = new UserContext($em, $connectedUser); // contexte utilisateur

	$timetable = new Timetable($connectedUser, $userContext->getCurrentFile());

	$form = $this->createForm(TimetableType::class, $timetable);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		$em->persist($timetable);
		$em->flush();
		$request->getSession()->getFlashBag()->add('notice', 'timetable.created.ok');

		return $this->redirectToRoute('sd_core_timetable_addline', array('timetableID' => $timetable->getID()));
		// return $this->redirectToRoute('sd_core_timetable_list', array('pageNumber' => 1));
    }
    
	return $this->render('SDCoreBundle:Timetable:add.html.twig', array('userContext' => $userContext, 'form' => $form->createView()));
    }
	
    // Edition du detail d'une grille horaire
    /**
    * @ParamConverter("timetable", options={"mapping": {"timetableID": "id"}})
    */
    public function editAction(Timetable $timetable)
    {
    $connectedUser = $this->getUser();
    $em = $this->getDoctrine()->getManager();
    $userContext = new UserContext($em, $connectedUser); // contexte utilisateur

    $timetableLineRepository = $em->getRepository('SDCoreBundle:TimetableLine');
    $listTimetableLines = $timetableLineRepository->getTimetableLines($timetable);

    return $this->render('SDCoreBundle:Timetable:edit.html.twig', 
        array('userContext' => $userContext, 'timetable' => $timetable, 'listTimetableLines' => $listTimetableLines));
    }

	
// Modification d'une grille horaire
/**
* @ParamConverter("timetable", options={"mapping": {"timetableID": "id"}})
*/
public function modifyAction(Timetable $timetable, Request $request)
{
    $connectedUser = $this->getUser();
    $em = $this->getDoctrine()->getManager();
    $userContext = new UserContext($em, $connectedUser); // contexte utilisateur

    $form = $this->createForm(TimetableType::class, $timetable);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
        // Inutile de persister ici, Doctrine connait déjà la grille horaire
        $em->flush();
        $request->getSession()->getFlashBag()->add('notice', 'timetable.updated.ok');

        return $this->redirectToRoute('sd_core_timetable_edit', array('timetableID' => $timetable->getId()));
    }
    return $this->render('SDCoreBundle:Timetable:modify.html.twig', array('userContext' => $userContext, 'timetable' => $timetable, 'form' => $form->createView()));
}


    // Suppression d'une grille horaire
    /**
    * @ParamConverter("timetable", options={"mapping": {"timetableID": "id"}})
    */
    public function deleteAction(Timetable $timetable, Request $request)
    {
    $connectedUser = $this->getUser();
    $em = $this->getDoctrine()->getManager();
    $userContext = new UserContext($em, $connectedUser); // contexte utilisateur

    $form = $this->get('form.factory')->create();

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
        // Inutile de persister ici, Doctrine connait déjà la grille horaire
        $em->remove($timetable);
        $em->flush();
        $request->getSession()->getFlashBag()->add('notice', 'timetable.deleted.ok');

        return $this->redirectToRoute('sd_core_timetable_list', array('pageNumber' => 1));
    }
    return $this->render('SDCoreBundle:Timetable:delete.html.twig', array('userContext' => $userContext, 'timetable' => $timetable, 'form' => $form->createView()));
    }
    
    
// Ajout d'un creneau horaire
/**
* @ParamConverter("timetable", options={"mapping": {"timetableID": "id"}})
*/
public function addlineAction(Timetable $timetable, Request $request)
{
    $connectedUser = $this->getUser();
    $em = $this->getDoctrine()->getManager();
    $userContext = new UserContext($em, $connectedUser); // contexte utilisateur

    $timetableLineRepository = $em->getRepository('SDCoreBundle:TimetableLine');
    $listLastTimetableLines = $timetableLineRepository->getLastTimetableLines($timetable, Constants::NUMBER_LINES_BEFORE_AFTER_UPDATE);

    $timetableLine = new TimetableLine($connectedUser, $timetable);

    if (count($listLastTimetableLines) > 0) { // On initialise la date de début avec la date de fin du dernier créneau
		$timetableLine->setBeginningTime(current($listLastTimetableLines)->getEndTime());
	}

    $form = $this->createForm(TimetableLineAddType::class, $timetableLine);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
        $em->persist($timetableLine);
        $em->flush();
        $request->getSession()->getFlashBag()->add('08notice', 'timetableLine.created.ok');
		
		if ($form->get('validateAndCreate')->isClicked()) {
			return $this->redirectToRoute('sd_core_timetable_addline', array('timetableID' => $timetable->getID()));
		} else {
			return $this->redirectToRoute('sd_core_timetable_edit', array('timetableID' => $timetable->getID()));
		}
	}

    return $this->render('SDCoreBundle:Timetable:addline.html.twig',
        array('userContext' => $userContext, 'timetable' => $timetable, 'listLastTimetableLines' => $listLastTimetableLines, 'form' => $form->createView()));
}


    // Modification d'un creneau horaire
    /**
    * @ParamConverter("timetable", options={"mapping": {"timetableID": "id"}})
    * @ParamConverter("timetableLine", options={"mapping": {"timetableLineID": "id"}})
    */
    public function modifylineAction(Timetable $timetable, TimetableLine $timetableLine, Request $request)
    {
    $connectedUser = $this->getUser();
    $em = $this->getDoctrine()->getManager();
    $userContext = new UserContext($em, $connectedUser); // contexte utilisateur

    $timetableLineRepository = $em->getRepository('SDCoreBundle:TimetableLine');
    $listPreviousTimetableLines = $timetableLineRepository->getSomeTimetableLines($timetable, $timetableLine->getId(), Constants::NUMBER_LINES_BEFORE_AFTER_UPDATE, true);
    $listNextTimetableLines = $timetableLineRepository->getSomeTimetableLines($timetable, $timetableLine->getId(), Constants::NUMBER_LINES_BEFORE_AFTER_UPDATE, false);
    
    $form = $this->createForm(TimetableLineType::class, $timetableLine);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
        // Inutile de persister ici, Doctrine connait déjà le creneau horaire
        $em->flush();
        $request->getSession()->getFlashBag()->add('notice', 'timetableLine.updated.ok');

        return $this->redirectToRoute('sd_core_timetable_edit', array('timetableID' => $timetable->getId()));
    }

    return $this->render('SDCoreBundle:Timetable:modifyline.html.twig',
        array('userContext' => $userContext, 'timetable' => $timetable,
            'timetableLine' => $timetableLine,
            'listPreviousTimetableLines' => $listPreviousTimetableLines,
            'listNextTimetableLines' => $listNextTimetableLines,
            'form' => $form->createView()));
    }


    // Suppression d'un creneau horaire
    /**
    * @ParamConverter("timetableLine", options={"mapping": {"timetableLineID": "id"}})
    */
    public function deletelineAction($timetableID, TimetableLine $timetableLine, Request $request)
    {
    $connectedUser = $this->getUser();
    $em = $this->getDoctrine()->getManager();
    $userContext = new UserContext($em, $connectedUser); // contexte utilisateur

    // Inutile de persister ici, Doctrine connait déjà la grille horaire
    $em->remove($timetableLine);
    $em->flush();
    $request->getSession()->getFlashBag()->add('notice', 'timetableLine.deleted.ok');

    return $this->redirectToRoute('sd_core_timetable_edit', array('timetableID' => $timetableID));
    }
}
