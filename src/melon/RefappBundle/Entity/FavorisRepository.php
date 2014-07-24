<?php

namespace melon\RefappBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * FavorisRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FavorisRepository extends EntityRepository
{

	public function search_list_favoris_order_by_date($dataResponsableDsi)
	{
		$qb = $this->createQueryBuilder('a');
		$qb->leftJoin('a.utilisateur', 'responsablesDsi')->andWhere("responsablesDsi.username LIKE :motcle")
		->orderBy('a.dateCreation', 'DESC')->setParameter('motcle', '%'.$dataResponsableDsi.'%');	
		return $qb->getQuery()->getResult();
	}
	public function search_list_favoris_plus_consultees()
	{
		$qb = $this->createQueryBuilder('a');
		$qb->orderBy('a.nbConsultation', 'DESC');
		return $qb->getQuery()->getResult();
	}
	
	public function searchMemeRequete($utilisateur,$chemin,$parametre){
		$qb = $this->createQueryBuilder('a');
		$qb->andWhere("a.chemin LIKE :motcle1")->setParameter('motcle1', '%'.$chemin.'%');
		for ($i=0;$i<sizeof($parametre);$i++){
		$qb->andWhere("a.parametre LIKE :motcle.$i")->setParameter('motcle'.$i, '%'.$parametre[$i].'%');
		}
		return $qb->getQuery()->getResult();
	}


}
