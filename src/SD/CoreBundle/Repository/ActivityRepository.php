<?php

namespace SD\CoreBundle\Repository;

/**
 * ActivityRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ActivityRepository extends \Doctrine\ORM\EntityRepository
{
    public function getActivitiesCount($file)
    {
    $queryBuilder = $this->createQueryBuilder('a');
    $queryBuilder->select($queryBuilder->expr()->count('a'));
    $queryBuilder->where('a.file = :file')->setParameter('file', $file);

    $query = $queryBuilder->getQuery();
    $singleScalar = $query->getSingleScalarResult();
    return $singleScalar;
    }
	
    public function getDisplayedActivities($file, $firstRecordIndex, $maxRecord)
    {
    $queryBuilder = $this->createQueryBuilder('a');
    $queryBuilder->where('a.file = :file')->setParameter('file', $file);
    $queryBuilder->orderBy('a.name', 'ASC');
    $queryBuilder->setFirstResult($firstRecordIndex);
    $queryBuilder->setMaxResults($maxRecord);
   
    $query = $queryBuilder->getQuery();
    $results = $query->getResult();
    return $results;
    }
}
