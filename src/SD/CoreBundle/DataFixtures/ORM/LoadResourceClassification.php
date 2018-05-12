<?php
// src/CoreBundle/DataFixtures/ORM/LoadResourceClassification.php

namespace UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use SD\CoreBundle\Entity\ResourceClassification;

class LoadResourceClassification extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-612')); $resourceClassification->setType('PLACE'); $resourceClassification->setInternal(1); $resourceClassification->setCode('ROOM'); $resourceClassification->setName('ROOM'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-7827', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-612')); $resourceClassification->setType('PLACE'); $resourceClassification->setInternal(1); $resourceClassification->setCode('HOUSE'); $resourceClassification->setName('HOUSE'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-7829', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-612')); $resourceClassification->setType('VEHICLE'); $resourceClassification->setInternal(1); $resourceClassification->setCode('CAR'); $resourceClassification->setName('CAR'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-7832', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-612')); $resourceClassification->setType('TOOL'); $resourceClassification->setInternal(1); $resourceClassification->setCode('COMPUTER'); $resourceClassification->setName('COMPUTER'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-7840', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-612')); $resourceClassification->setType('SPORT'); $resourceClassification->setInternal(1); $resourceClassification->setCode('GYMNASIUM'); $resourceClassification->setName('GYMNASIUM'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-7845', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-612')); $resourceClassification->setType('USER'); $resourceClassification->setInternal(1); $resourceClassification->setCode('TEACHER'); $resourceClassification->setName('TEACHER'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-7847', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-614')); $resourceClassification->setType('PLACE'); $resourceClassification->setInternal(1); $resourceClassification->setCode('HOUSE'); $resourceClassification->setName('HOUSE'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-7877', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-614')); $resourceClassification->setType('VEHICLE'); $resourceClassification->setInternal(1); $resourceClassification->setCode('CAR'); $resourceClassification->setName('CAR'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-7880', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-614')); $resourceClassification->setType('SPORT'); $resourceClassification->setInternal(1); $resourceClassification->setCode('COURT'); $resourceClassification->setName('COURT'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-7891', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-614')); $resourceClassification->setType('SPORT'); $resourceClassification->setInternal(1); $resourceClassification->setCode('GYMNASIUM'); $resourceClassification->setName('GYMNASIUM'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-7893', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-707')); $resourceClassification->setType('PLACE'); $resourceClassification->setInternal(1); $resourceClassification->setCode('ROOM'); $resourceClassification->setName('ROOM'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-10053', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-707')); $resourceClassification->setType('PLACE'); $resourceClassification->setInternal(1); $resourceClassification->setCode('HOUSE'); $resourceClassification->setName('HOUSE'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-10055', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-707')); $resourceClassification->setType('VEHICLE'); $resourceClassification->setInternal(1); $resourceClassification->setCode('CAR'); $resourceClassification->setName('CAR'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-10058', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-707')); $resourceClassification->setType('TOOL'); $resourceClassification->setInternal(1); $resourceClassification->setCode('COMPUTER'); $resourceClassification->setName('COMPUTER'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-10066', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-707')); $resourceClassification->setType('SPORT'); $resourceClassification->setInternal(1); $resourceClassification->setCode('GYMNASIUM'); $resourceClassification->setName('GYMNASIUM'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-10071', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-707')); $resourceClassification->setType('USER'); $resourceClassification->setInternal(1); $resourceClassification->setCode('TEACHER'); $resourceClassification->setName('TEACHER'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-10073', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-757')); $resourceClassification->setType('PLACE'); $resourceClassification->setInternal(1); $resourceClassification->setCode('HOUSE'); $resourceClassification->setName('HOUSE'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-11204', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-757')); $resourceClassification->setType('VEHICLE'); $resourceClassification->setInternal(1); $resourceClassification->setCode('CAR'); $resourceClassification->setName('CAR'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-11207', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-757')); $resourceClassification->setType('TOOL'); $resourceClassification->setInternal(1); $resourceClassification->setCode('COMPUTER'); $resourceClassification->setName('COMPUTER'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-11215', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-757')); $resourceClassification->setType('SPORT'); $resourceClassification->setInternal(1); $resourceClassification->setCode('COURT'); $resourceClassification->setName('COURT'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-11218', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-757')); $resourceClassification->setType('SPORT'); $resourceClassification->setInternal(1); $resourceClassification->setCode('GYMNASIUM'); $resourceClassification->setName('GYMNASIUM'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-11220', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-757')); $resourceClassification->setType('USER'); $resourceClassification->setInternal(1); $resourceClassification->setCode('TEACHER'); $resourceClassification->setName('TEACHER'); $resourceClassification->setActive(0); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-11222', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-321')); $resourceClassification->setType('VEHICLE'); $resourceClassification->setInternal(1); $resourceClassification->setCode('TRUCK'); $resourceClassification->setName('TRUCK'); $resourceClassification->setActive(1); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-2479', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-321')); $resourceClassification->setType('USER'); $resourceClassification->setInternal(1); $resourceClassification->setCode('CONTRACTOR'); $resourceClassification->setName('CONTRACTOR'); $resourceClassification->setActive(1); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-2494', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-538')); $resourceClassification->setType('VEHICLE'); $resourceClassification->setInternal(1); $resourceClassification->setCode('PLANE'); $resourceClassification->setName('PLANE'); $resourceClassification->setActive(1); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-6372', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-555')); $resourceClassification->setType('VEHICLE'); $resourceClassification->setInternal(1); $resourceClassification->setCode('PLANE'); $resourceClassification->setName('PLANE'); $resourceClassification->setActive(1); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-6708', $resourceClassification);
$resourceClassification = new ResourceClassification($this->getReference('user-1'), $this->getReference('file-614')); $resourceClassification->setType('TOOL'); $resourceClassification->setInternal(1); $resourceClassification->setCode('PROJECTOR'); $resourceClassification->setName('PROJECTOR'); $resourceClassification->setActive(1); $manager->persist($resourceClassification); $manager->flush(); $this->addReference('resourceClassification-7890', $resourceClassification);
    }

    public function getOrder()
    {
    return 7;
    }
}
