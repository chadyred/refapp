<?php

namespace melon\RefappBundle\Controller;

use melon\RefappBundle\Entity\Environnement;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;

use melon\RefappBundle\Entity\Serveur;
use melon\RefappBundle\Form\ServeurType;

use melon\RefappBundle\Entity\RechercheServeur;
use melon\RefappBundle\Form\RechercheServeurType;
/**
 * @Route("/refapp")
 */
class ServeurController extends Controller
{
	
	/**
	 * @Route("/ficheServeur/{id}", name="_ficheServeur")
	 * @Template()
	 * @Secure(roles="ROLE_USER")
	 */
	public function ficheServeurAction($id)
	{
		// On r�cup�re le repository
		$repositoryServeur = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Serveur');
	
		// On r�cup�re le serveur correspondant a l'id donn�e en param�tre
		$Serveur = $repositoryServeur->findOneBy(array('id' => $id));

		$list_environnement = $Serveur->getEnvironnements();
		
		// On r�cup�re le repository obsolescence
		$em = $this->getDoctrine()->getManager()->getRepository('melonRefappBundle:Obsolescence');
		$obsolescence = $em->findAll();
		
		$list_appli_serveur = $this->getDoctrine()
                       				->getManager()
                        			->getRepository('melonRefappBundle:Application')
                        			->searchAppliServeur($Serveur);
	
		return array('serveur' => $Serveur,
					'list_appli_serveur' => $list_appli_serveur,
					'list_environnement' => $list_environnement,'obsolescence' => $obsolescence );
	}
	
	/**
	 * @Route("/listeServeur", name="_listeServeur")
	 * @Template()
	 * @Secure(roles="ROLE_USER")
	 */
	public function listeServeurAction()
	{
		// On r�cup�re le repository obsolescence
		$em = $this->getDoctrine()->getManager()->getRepository('melonRefappBundle:Obsolescence');
		$obsolescence = $em->findAll();
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Serveur');
		
		// On r�cup�re toutes les entit�es avec findAll()
		$listServeur = $repository->findAll();
				
		
		// on envoi� � la vu les r�sultats � la vue
		return array('list_Serveur' => $listServeur,'obsolescence' => $obsolescence);
		
	}

	/**
	 * @Route("/creerServeur", name="_creerServeur")
	 * @Template()
	 * @Secure(roles="ROLE_RESPONSABLE_EXPLOITATION")
	 */
	public function creerServeurAction()
	{
		// On cr�e un objet Application
		$serveur = new Serveur();

		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new ServeurType, $serveur);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
		
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $serveur contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
		
			// On v�rifie que les valeurs entr�es sont correctes
			// (Nous verrons la validation des objets en détail dans le prochain chapitre)
			if ($form->isValid()) {
				
				// On l'enregistre notre objet $serveur dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$em->persist($serveur);
				$em->flush();
				
				// On d�finit un message flash
				$this->get('session')->getFlashBag()->add('info', 'Serveur bien ajouté');
		
				// On redirige vers la page de visualisation de l'article nouvellement cr��
				return $this->redirect($this->generateUrl('_ficheServeur', array('id' => $serveur->getId())));
			}
		}
		
		// � ce stade :
		// - Soit la requ�te est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
		// - Soit la requ�te est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
	
			return array('form' => $form->createView());
	}
	
	/**
	 * @Route("/rechercheServeur", name="_rechercheServeur")
	 * @Template()
	 * @Secure(roles="ROLE_USER")
	 */
	public function rechercheServeurAction()
	{
		// On r�cup�re le repository obsolescence
		$em = $this->getDoctrine()->getManager()->getRepository('melonRefappBundle:Obsolescence');
		$obsolescence = $em->findAll();
		// On r�cup�re le repository
		$repository = $this->getDoctrine()->getManager()
		->getRepository('melonRefappBundle:Serveur');
		
		// On r�cup�re toutes les appli
		$serveurs = $repository->findAll();
		
		// On cr�e un objet de recherche
		$rechercheServeur = new RechercheServeur();
		
		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new RechercheServeurType(), $rechercheServeur);
		
		$request = $this->getRequest();
		
		if ($request->isMethod('POST')) {
			$form->bind($request);
		
			if ($form->isValid()) {
		
				$repositoryServeur = $this->getDoctrine()->getManager()
				->getRepository('melonRefappBundle:Serveur');
		
				$list_serveur = $repositoryServeur->findAll();
					
				//on r�cup�re tout les entit� (objet) soumise au fomulaire
				$dataNom = $form->get('nom')->getData();
				$dataIp = $form->get('ip')->getData();
				$dataHostName = $form->get('hostname')->getData();
				$dataTypeServeur = $form->get('typeServeur')->getData();
				$dataEnvironnement = $form->get('environnement')->getData();
				$dataLangage = $form->get('langage')->getData();
				$dataOs = $form->get('os')->getData();
				$dataServeurWeb = $form->get('serveurWeb')->getData();
				
				if ($dataNom != NULL OR $dataIp != NULL OR $dataHostName != NULL
						OR $dataTypeServeur != NULL 
						OR $dataEnvironnement != NULL
						OR $dataServeurWeb != NULL 
						OR $dataOs != NULL
						OR $dataLangage != NULL) {
				
					//on crée un arrayCollection vide
					$list_serveur = new \Doctrine\Common\Collections\ArrayCollection();
				
					$list_serveur = $this->getDoctrine()->getManager()
					->getRepository('melonRefappBundle:Serveur')
					->search($dataNom, $dataIp, $dataHostName,$dataTypeServeur, $dataEnvironnement,
			$dataLangage, $dataOs,$dataServeurWeb);
				}
				return array('list_Serveur' => $list_serveur,
						'form' => $form->createView(),'obsolescence' => $obsolescence);
				
				}
				}
				
				return array('list_Serveur' => $serveurs,
						'form' => $form->createView(),'obsolescence' => $obsolescence);
	}
	
	/**
	 * @Route("/modifierServeur/{id}", name="_modifierServeur")
	 * @Template()
	 * @Secure(roles="ROLE_RESPONSABLE_EXPLOITATION")
	 */
	public function modifierServeurAction($id)
	{
		$serveur = $this->getDoctrine()
		->getRepository('melon\RefappBundle\Entity\Serveur')
		->find($id);
		
		//r�cup�ration du formulaire
		$form = $this->createForm(new ServeurType, $serveur);
		
		// On r�cup�re la requ�te
		$request = $this->get('request');
		
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $serveur contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
		
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $serveur dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$em->persist($serveur);
				$em->flush();
		
				// On redirige vers la page de visualisation de l'application nouvellement cr��
				return $this->redirect($this->generateUrl('_ficheServeur', array('id' => $serveur->getId())));
			}
		}
		
		return array('form' => $form->createView(),
					'serveur' => $serveur);
	}
	/**
	 * @Route("/supprimerServeur/{id}", name="_supprimerServeur")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function supprimerServeurAction($id)
	{
		$serveur = $this->getDoctrine()
		->getRepository('melon\RefappBundle\Entity\Serveur')
		->find($id);
		// On cr�e un formulaire vide, qui ne contiendra que le champ CSRF
		// Cela permet de prot�ger la suppression d'article contre cette faille
		$form = $this->createFormBuilder()->getForm();
		
		$request = $this->getRequest();
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
		
			if ($form->isValid()) {
				// On supprime l'application
				$em = $this->getDoctrine()->getManager();
				$em->remove($serveur);
				$em->flush();
		
				// On d�finit un message flash
				$this->get('session')->getFlashBag()->add('info', 'Serveur bien supprim�');
		
				// Puis on redirige vers l'accueil
				return $this->redirect($this->generateUrl('_listeServeur'));
			}
		}
		
		// Si la requ�te est en GET, on affiche une page de confirmation avant de supprimer
		return $this->render('melonRefappBundle:Serveur:supprimerServeur.html.twig', array(
				'serveur' => $serveur,
				'form'    => $form->createView()
		));
	}
}
