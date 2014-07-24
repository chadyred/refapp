<?php

namespace melon\RefappBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;
use melon\RefappBundle\Entity\Application;


/**
 * @Route("/refapp")
 */
class IndexController extends Controller
{
	/**
	 * @Route("/index", name="_index")
	 * @Template()
	 * @Secure(roles="ROLE_USER")
	 */
	public function indexAction()
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()->getManager()
		->getRepository('melonRefappBundle:Application');

		$listApplication = $repository->findAll();
		
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Serveur');
		
		// On r�cup�re toutes les entit�es avec findAll()
		$listServeur = $repository->findAll();
		$listAlpha=array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P","Q","R","S","T","U","V","W","X","Y","Z");
					return $this->render('melonRefappBundle:Index:index.html.twig', array(
				'listeApplication' => $listApplication,
				'listeServeur'    => $listServeur, 'listeAlpha' => $listAlpha));
	}
	

}
