<?php

namespace SD\CoreBundle\Repository;

/**
 * ResourceClassificationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ResourceClassificationRepository extends \Doctrine\ORM\EntityRepository
{
    public function getInternalResourceClassificationCodes($file, $resourceType, $active)
    {
    $queryBuilder = $this->createQueryBuilder('rc');
    $queryBuilder->where('rc.file = :file')->setParameter('file', $file);
    $queryBuilder->andWhere('rc.type = :type')->setParameter('type', $resourceType);
    $queryBuilder->andWhere('rc.internal = :internal')->setParameter('internal', 1);
    $queryBuilder->andWhere('rc.active = :active')->setParameter('active', $active);
   
    $query = $queryBuilder->getQuery();
    $results = $query->getResult();

	// On retourne un tableau des codes classifications sélectionnés
	$resourceClassificationCodes = array();

    foreach ($results as $resourceClassification) {
		array_push($resourceClassificationCodes, $resourceClassification->getCode());
	}

    return $resourceClassificationCodes;
    }

    public function getExternalResourceClassifications($file, $resourceType)
    {
    $queryBuilder = $this->createQueryBuilder('rc');
    $queryBuilder->where('rc.file = :file')->setParameter('file', $file);
    $queryBuilder->andWhere('rc.type = :type')->setParameter('type', $resourceType);
    $queryBuilder->andWhere('rc.internal = :internal')->setParameter('internal', 0);
    $queryBuilder->orderBy('rc.name', 'ASC');

    $query = $queryBuilder->getQuery();
    $results = $query->getResult();
    return $results;
    }

    public function getActiveExternalResourceClassifications($file, $resourceType)
    {
    $queryBuilder = $this->createQueryBuilder('rc');
    $queryBuilder->where('rc.file = :file')->setParameter('file', $file);
    $queryBuilder->andWhere('rc.type = :type')->setParameter('type', $resourceType);
    $queryBuilder->andWhere('rc.internal = :internal')->setParameter('internal', 0);
    $queryBuilder->andWhere('rc.active = :active')->setParameter('active', 1);
    $queryBuilder->orderBy('rc.name', 'ASC');

    $query = $queryBuilder->getQuery();
    $results = $query->getResult();
    return $results;
    }
}