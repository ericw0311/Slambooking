<?php
// src/CoreBundle/DataFixtures/ORM/LoadPlanification.php

namespace UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use SD\CoreBundle\Entity\Planification;

class LoadPlanification extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Plateforme AMTI...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-340', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-321')); $planification->setType('PLACE'); $planification->setName('SALLE DE REUNION N° 25 1ER ETAGE...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-99', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-321')); $planification->setType('VEHICLE'); $planification->setName('SCENIC...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-100', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-321')); $planification->setType('VEHICLE'); $planification->setName('FOURGON FIAT DUCATO...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-101', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-321')); $planification->setType('TOOL'); $planification->setName('ZODIAC...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-102', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-321')); $planification->setType('PLACE'); $planification->setName('ALVEOLE G - K3...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-103', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-321')); $planification->setType('TOOL'); $planification->setName('Didier BOUCHETON...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-111', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-321')); $planification->setType('TOOL'); $planification->setName('PORTABLE BE...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-112', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('PLACE'); $planification->setName('LPE132 Chartreuse...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-339', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-321')); $planification->setType('PLACE'); $planification->setName('SALLE DE REUNION N° 85...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-177', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('PLACE'); $planification->setName('LPE ENTREMONT...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-247', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('PLACE'); $planification->setName('LPE 27 CHARTREUSE'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-245', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('PLACE'); $planification->setName('LPE 15 CHARTREUSE'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-244', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Accéléromètres HIKOB'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-248', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Analyseur lactate'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-249', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Anémomètre'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-250', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Appareil photo reflex SONY'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-251', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Balance  précision SOEHNLE'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-252', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('BIOPAC MP150'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-253', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('BIOPAC MP36-1 ...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-310', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Caméra BLACKEYE'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-256', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Caméra HD SONY'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-257', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Ordinatuer pro book 640 G2 Windows 10 Pro'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-258', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Caméra Thermique'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-260', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Cardio POLAR (16 dispo - preciser le nombre)'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-261', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Cardio POLAR TEAM'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-262', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Chronomètre TAG CP-540'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-263', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('EMG BIOMETRICS MWX8'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-264', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Hémo Control EKF'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-265', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('INNOVISION'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-266', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('K4'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-268', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Lactate SCOUT'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-269', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('MONARK 818E ARSAC ...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-312', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('MYOTEST ...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-313', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Data logger thermo couple'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-276', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('PEDAR+ Ordi DELL 820 N°8'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-284', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('PINCH GRIP'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-288', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Radar STALKER'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-291', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Sonde thermo HANNA'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-292', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Sono + micro BST'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-293', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('SPORIDENT'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-294', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Tapis BOSCO'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-295', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Tapis de course PRECOR'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-296', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('THERMOCHRONS'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-297', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Webcam (12 dispo -'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-319', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('XSENS'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-306', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Petits latériels divers (à préciser en note)'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-308', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('IPAD-1 ...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-316', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Montre GPS GARMIN-1 ...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-317', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Ordinateur DELL Latitude D810 ...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-314', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('PLACE'); $planification->setName('LPE BIO 131 Chartreuse...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-338', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Pèse personne numérique TERAILLON ...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-311', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Plateforme SATEL ...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-315', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('VIDEOPROJECTEUR-0 ...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-309', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Caméra GOPRO...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-361', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-507')); $planification->setType('SPORT'); $planification->setName('Terrains Intérieurs'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-377', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-516')); $planification->setType('PLACE'); $planification->setName('Salle de conférences...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-390', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-516')); $planification->setType('PLACE'); $planification->setName('Salle informatique 1...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-391', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-516')); $planification->setType('PLACE'); $planification->setName('Salle informatique 19...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-392', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-492')); $planification->setType('SPORT'); $planification->setName('Les courts du TCVV'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-396', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-492')); $planification->setType('SPORT'); $planification->setName('Court n°2 ancien'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-398', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-523')); $planification->setType('PLACE'); $planification->setName('Multimédia'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-401', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-523')); $planification->setType('PLACE'); $planification->setName('Salle Vidéo...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-408', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-507')); $planification->setType('SPORT'); $planification->setName('Terrains Extérieurs'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-409', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-535')); $planification->setType('SPORT'); $planification->setName('RESERVATION'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-421', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-538')); $planification->setType('VEHICLE'); $planification->setName('Avions'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-424', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-550')); $planification->setType('PLACE'); $planification->setName('Réserver un Bureau'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-477', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-550')); $planification->setType('PLACE'); $planification->setName('Réserver la Salle de Réunion'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-478', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-555')); $planification->setType('VEHICLE'); $planification->setName('31SA ...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-437', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-555')); $planification->setType('VEHICLE'); $planification->setName('F-GDLY'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-440', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-598')); $planification->setType('PLACE'); $planification->setName('Salle 10...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-469', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-612')); $planification->setType('SPORT'); $planification->setName('Squash'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-482', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-614')); $planification->setType('PLACE'); $planification->setName('Larzac'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-492', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-614')); $planification->setType('PLACE'); $planification->setName('Lévezou'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-488', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-614')); $planification->setType('TOOL'); $planification->setName('Rétro projecteur'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-493', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Compex SP 4.0 N°1 ...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-508', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-646')); $planification->setType('PLACE'); $planification->setName('SALLE POLYVALENTE'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-513', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-646')); $planification->setType('PLACE'); $planification->setName('SALLE DU FOYER'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-514', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-648')); $planification->setType('PLACE'); $planification->setName('LOCATIONS'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-516', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Compex SP6.0 N°1 ...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-525', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Tablette HP windows 8 N°1 ...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-532', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-691')); $planification->setType('PLACE'); $planification->setName('Conf Call KPC'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-545', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-690')); $planification->setType('PLACE'); $planification->setName('Opera Salle réunion ...'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-543', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-707')); $planification->setType('SPORT'); $planification->setName('Court Intérieur'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-550', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-707')); $planification->setType('SPORT'); $planification->setName('Court Exterieur'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-551', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-440')); $planification->setType('TOOL'); $planification->setName('Optojump N°1 9m de kit supplémentaire'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-561', $planification);
$planification = new Planification($this->getReference('user-1'), $this->getReference('file-523')); $planification->setType('PLACE'); $planification->setName('C12- Chariot 16 ordinateurs portables'); $manager->persist($planification); $manager->flush(); $this->addReference('planification-569', $planification);
    }


    public function getOrder()
    {
    return 10;
    }
}