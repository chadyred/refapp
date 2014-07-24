<?php

namespace melon\RefappBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ObsolescenceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ObsolescenceRepository extends EntityRepository
{
	public function findOneOrderByDescLimit1 (){
		/*return $this->getManager()
		
		
		
		
		->createQuery('SELECT nbMois1,nbMois2,nbMois3 FROM melonRefappBundle:Obsolescence ORDER BY id DESC')
		->getResult();*/
		$qb = $this->createQueryBuilder('o');
		 $qb->add('select', 'o')
  				 ->add('from', 'melonRefappBundle:Obsolescence o')
  				 ->add('orderBy', 'o.id DESC')->setMaxResults(1);
		 return $qb->getQuery()->getResult();
		/* return $this->findBy(array('id','nbMois1','nbMois2','nbMois3'), array('id' => 'desc'),1, null);*/
	}
	
}