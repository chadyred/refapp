<?php

namespace melon\RefappBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * EnvironnementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EnvironnementRepository extends EntityRepository
{
	public function getDistinctEnvironnements()
	{
		return $this->getEntityManager()->createQuery('SELECT DISTINCT u.nom FROM melonRefappBundle:Environnement u ORDER BY u.nom ASC')->getResult();
	}
}
