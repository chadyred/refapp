<?php

namespace melon\RefappBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;
use melon\RefappBundle\Entity\ResponsableDsi;
use melon\RefappBundle\Form\ResponsableDsiType;
use melon\RefappBundle\Entity\Favoris;

/**
 * @Route("/refapp")
 */
class FavorisController extends Controller
{
	/**
	 * @Route("/favoris", name="_favoris")
	 * @Template()
	 * @Secure(roles="ROLE_USER")
	 */
	public function favorisAction()
	{
		// on récupère le user courant, c'est � dire le responsable appli logué
		$user = $this->getUser();
		// On récupère le repository
	
		// On récupère les favoris correspondant au nom donnée en paramètre
		$ResponsableDsi = $user->getUsername();
		
		$list_favoris_order_by_date = $this->getDoctrine()->getManager()
		->getRepository('melonRefappBundle:Favoris')->search_list_favoris_order_by_date($ResponsableDsi);
		
		
		return $this->render('melonRefappBundle:Favoris:favoris.html.twig', array('list_favoris_order_by_date'=>$list_favoris_order_by_date));
	}


}
