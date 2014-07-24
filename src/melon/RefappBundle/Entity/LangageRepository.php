<?php

namespace melon\RefappBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * LangageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LangageRepository extends EntityRepository
{
	public function searchLangageAppli($appli){
		$qb = $this->createQueryBuilder('c')
		->innerJoin('c.applications', 'app', 'WITH', 'app=:app')
		->addSelect('app')
		->setParameter('app', $appli);
		return $qb->getQuery()->getResult();
	
	}
}
