<?php

namespace melon\RefappBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * LogicielRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LogicielRepository extends EntityRepository
{
	public function searchLogicielAppli($appli){
		$qb = $this->createQueryBuilder('c')
		->innerJoin('c.applications', 'app', 'WITH', 'app=:app')
		->addSelect('app')->setParameter('app', $appli);	
		return $qb->getQuery()->getResult();
	
	}
}
