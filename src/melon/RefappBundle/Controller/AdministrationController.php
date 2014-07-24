<?php
namespace melon\RefappBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\Response;

use melon\RefappBundle\Entity\Application;
use melon\RefappBundle\Form\ApplicationType;

use melon\RefappBundle\Entity\ResponsableDsi;
use melon\RefappBundle\Form\ResponsableDsiType;

use melon\RefappBundle\Entity\ServiceAppliDsi;
use melon\RefappBundle\Form\ServiceAppliDsiType;

use melon\RefappBundle\Entity\Domaine;
use melon\RefappBundle\Form\DomaineType;

use melon\RefappBundle\Entity\Direction;
use melon\RefappBundle\Form\DirectionType;

use melon\RefappBundle\Entity\Composant;
use melon\RefappBundle\Form\ComposantType;

use melon\RefappBundle\Entity\Technologie;
use melon\RefappBundle\Form\TechnologieType;

use melon\RefappBundle\Entity\Editeur;
use melon\RefappBundle\Form\EditeurType;

use melon\RefappBundle\Entity\Os;
use melon\RefappBundle\Form\OsType;

use melon\RefappBundle\Entity\ServeurWeb;
use melon\RefappBundle\Form\ServeurWebType;

use melon\RefappBundle\Entity\Sgbd;
use melon\RefappBundle\Form\SgbdType;

use melon\RefappBundle\Entity\Logiciel;
use melon\RefappBundle\Form\LogicielType;

use melon\RefappBundle\Entity\Langage;
use melon\RefappBundle\Form\LangageType;

use melon\RefappBundle\Entity\Competence;
use melon\RefappBundle\Form\CompetenceType;

use melon\RefappBundle\Entity\Obsolescence;
use melon\RefappBundle\Form\ObsolescenceType;
/**
 * @Route("/refapp/administration")
 */
class AdministrationController extends Controller
{
	/**
	 * @Route( name="_administration")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function administrationAction()
	{
		
		// On r�cup�re le repository
		$repositoryCompetence = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Competence');
		
		// On r�cup�re le repository
		$repositoryDirection = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Direction');
		
		// On r�cup�re le repository
		$repositoryDomaine = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Domaine');
		
		// On r�cup�re le repository
		$repositoryEditeur = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Editeur');
		
		// On r�cup�re le repository
		$repositoryResponsableDsi = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:ResponsableDsi');
		
		// On r�cup�re le repository
		$repositoryServiceAppliDsi = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:ServiceAppliDsi');
		
		// On r�cup�re le repository
		$repositoryTechnologie = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Technologie');
		
		// On r�cup�re le repository
		$repositoryOs = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Os');
		
		// On r�cup�re le repository
		$repositoryServeurWeb = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:ServeurWeb');
		
		// On r�cup�re le repository
		$repositorySgbd = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Sgbd');
		
		// On r�cup�re le repository
		$repositoryLogiciel = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Logiciel');
		
		// On r�cup�re le repository
		$repositoryLangage = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Langage');
	
		// On r�cup�re toutes les comp�tences		
		$competences =$repositoryCompetence->findAll();
		
		$directions = $repositoryDirection->findAll();
		
		$domaines = $repositoryDomaine->findAll();
		
		$editeurs = $repositoryEditeur->findAll();
		
		$responsablesDsi = $repositoryResponsableDsi->findAll();
		
		$servicesAppliDsi = $repositoryServiceAppliDsi->findAll();
		
		$technologies = $repositoryTechnologie->findAll();
		
		$os = $repositoryOs->findAll();
		
		$serveursWeb = $repositoryServeurWeb->findAll();
		
		$sgbd = $repositorySgbd->findAll();
		
		$logiciels = $repositoryLogiciel->findAll();
		
		$langages = $repositoryLangage->findAll();
		
		// On cr�e un objet Obsolescence
		$obsolescence= new Obsolescence();
		
		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new ObsolescenceType, $obsolescence);

		// On r�cup�re la requ�te
		$request = $this->get('request');
		
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $obsolescence contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);				
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $application dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$em->persist($obsolescence);
				$em->flush();
		
				// On redirige vers la page de visualisation de l'application nouvellement cr��
				return $this->redirect($this->generateUrl('_index'));
			}
		
		}
			return array('form' => $form->createView(),
					'list_Competence' => $competences,
						 'list_Direction' => $directions,
						 'list_Domaine' => $domaines,
						 'list_Editeur' => $editeurs,
					     'list_ResponsableDsi' => $responsablesDsi,
						 'list_ServiceAppliDsi' => $servicesAppliDsi,
						 'list_Technologie' => $technologies,					
						 'list_Os' => $os,
						 'list_ServeurWeb' => $serveursWeb,
						 'list_Sgbd' => $sgbd,
						 'list_Logiciel' => $logiciels,
						 'list_Langage' => $langages);
	}
	
	/**********************************************************************************************/
	/****  FICHE  *********************************************************************************/
	/**********************************************************************************************/
	
	/**
	 * @Route("/ficheCompetence/{id}", name="_ficheCompetence")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ficheCompetenceAction($id)
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Competence');
	
		// On r�cup�re l'appli correspondant au nom donn�e en param�tre
		$Competence = $repository->findOneBy(array('id' => $id));
	
		return array('competence' => $Competence);
	}
	
	/**
	 * @Route("/ficheDirection/{id}", name="_ficheDirection")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ficheDirectionAction($id)
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Direction');
	
		// On r�cup�re l'appli correspondant au nom donn�e en param�tre
		$direction = $repository->findOneBy(array('id' => $id));
	
		return array('direction' => $direction);
	}
	
	/**
	 * @Route("/ficheDomaine/{id}", name="_ficheDomaine")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ficheDomaineAction($id)
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Domaine');
	
		// On r�cup�re l'appli correspondant au nom donn�e en param�tre
		$domaine = $repository->findOneBy(array('id' => $id));
	
		return array('domaine' => $domaine);
	}
	
	/**
	 * @Route("/ficheEditeur/{id}", name="_ficheEditeur")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ficheEditeurAction($id)
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Editeur');
	
		// On r�cup�re l'appli correspondant au nom donn�e en param�tre
		$editeur = $repository->findOneBy(array('id' => $id));
	
		return array('editeur' => $editeur);
	}
	
	/**
	 * @Route("/ficheLangage/{id}", name="_ficheLangage")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ficheLangageAction($id)
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Langage');
	
		// On r�cup�re l'appli correspondant au nom donn�e en param�tre
		$langage = $repository->findOneBy(array('id' => $id));
	
		return array('langage' => $langage);
	}
	
	/**
	 * @Route("/ficheLogiciel/{id}", name="_ficheLogiciel")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ficheLogicielAction($id)
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Logiciel');
	
		// On r�cup�re l'appli correspondant au nom donn�e en param�tre
		$logiciel = $repository->findOneBy(array('id' => $id));
	
		return array('logiciel' => $logiciel);
	}
	
	/**
	 * @Route("/ficheOs/{id}", name="_ficheOs")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ficheOsAction($id)
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Os');
	
		// On r�cup�re l'appli correspondant au nom donn�e en param�tre
		$os = $repository->findOneBy(array('id' => $id));
	
		return array('os' => $os);
	}
	
	/**
	 * @Route("/ficheResponsableDsi/{id}", name="_ficheResponsableDsi")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ficheResponsableDsiAction($id)
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:ResponsableDsi');
	
		// On r�cup�re l'appli correspondant au nom donn�e en param�tre
		$responsableDsi = $repository->findOneBy(array('id' => $id));
	
		return array('responsableDsi' => $responsableDsi);
	}
	
	/**
	 * @Route("/ficheServeurWeb/{id}", name="_ficheServeurWeb")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ficheServeurWebAction($id)
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:ServeurWeb');
	
		// On r�cup�re l'appli correspondant au nom donn�e en param�tre
		$serveurWeb = $repository->findOneBy(array('id' => $id));
	
		return array('serveurWeb' => $serveurWeb);
	}
	
	/**
	 * @Route("/ficheServiceAppliDsi/{id}", name="_ficheServiceAppliDsi")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ficheServiceAppliDsiAction($id)
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:ServiceAppliDsi');
	
		// On r�cup�re l'appli correspondant au nom donn�e en param�tre
		$serviceAppliDsi= $repository->findOneBy(array('id' => $id));
	
		return array('serviceAppliDsi' => $serviceAppliDsi);
	}
	
	/**
	 * @Route("/ficheSgbd/{id}", name="_ficheSgbd")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ficheSgbdAction($id)
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Sgbd');
	
		// On r�cup�re l'appli correspondant au nom donn�e en param�tre
		$Sgbd= $repository->findOneBy(array('id' => $id));
	
		return array('sgbd' => $Sgbd);
	}
	
	/**
	 * @Route("/ficheTechnologie/{id}", name="_ficheTechnologie")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ficheTechnologieAction($id)
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Technologie');
	
		// On r�cup�re l'appli correspondant au nom donn�e en param�tre
		$technologie= $repository->findOneBy(array('id' => $id));
	
		return array('technologie' => $technologie);
	}
	

	/**********************************************************************************************/ 
	/****  AJOUT  *********************************************************************************/
	/**********************************************************************************************/
	
	/**
	 * @Route("/ajoutCompetence", name="_ajoutCompetence")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ajoutCompetenceAction()
	{
	
		// On cr�e un objet Competence
		$competence= new Competence();
	
		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new CompetenceType, $competence);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
	
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $competence contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $application dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$em->persist($competence);
				$em->flush();
	
				// On d�finit un message flash
				$this->get('session')->getFlashBag()->add('info', 'Compétence bien ajouté');
	
				// On redirige
				return $this->redirect($this->generateUrl('_ficheCompetence', array('id' => $competence->getId())));
			}
	
		}
	
		return array('form' => $form->createView());
	}
	
	/**
	 * @Route("/ajoutResponsableDsi", name="_ajoutResponsableDsi")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ajoutResponsableDsiAction()
	{
	
		// On cr�e un objet responsableDsi
		$responsableDsi = new ResponsableDsi();
		
		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new ResponsableDsiType, $responsableDsi);
		
		// On r�cup�re la requ�te
		$request = $this->get('request');

		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {

			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $responsableDsi contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
		
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $application dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$em->persist($responsableDsi);
				$em->flush();
				
				// On d�finit un message flash
				$this->get('session')->getFlashBag()->add('info', 'Responsable Dsi bien ajouté');
		
				// On redirige
				return $this->redirect($this->generateUrl('_ficheResponsableDsi', array('id' => $responsableDsi->getId())));
			}
		
		}

		return array('form' => $form->createView());
	}
	
	/**
	 * @Route("/ajoutServiceAppliDsi", name="_ajoutServiceAppliDsi")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ajoutServiceAppliDsiAction()
	{
	
		// On cr�e un objet service
		$serviceAppliDsi = new ServiceAppliDsi();
		
		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new ServiceAppliDsiType, $serviceAppliDsi);
		
		// On r�cup�re la requ�te
		$request = $this->get('request');
		
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $serviceAppliDsi contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
		
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $application dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$em->persist($serviceAppliDsi);
				$em->flush();
				
				// On d�finit un message flash
				$this->get('session')->getFlashBag()->add('info', 'Service Dsi bien ajouté');
		
				// On redirige
				return $this->redirect($this->generateUrl('_ficheServiceAppliDsi', array('id' => $serviceAppliDsi->getId())));
			}
		
		}
		return array('form' => $form->createView());
	}
	
	/**
	 * @Route("/ajoutEditeur", name="_ajoutEditeur")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ajoutEditeurAction()
	{
		// On cr�e un objet editeur
		$editeur = new Editeur();
		
		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new EditeurType, $editeur);
		
		// On r�cup�re la requ�te
		$request = $this->get('request');
		
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $editeur contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
		
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $editeur dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$em->persist($editeur);
				$em->flush();
		
				// On d�finit un message flash
				$this->get('session')->getFlashBag()->add('info', 'Editeur bien ajouté');
		
				// On redirige
				return $this->redirect($this->generateUrl('_ficheEditeur', array('id' => $editeur->getId())));
			}
		
		}
		return array('form' => $form->createView());
	}
	
	/**
	 * @Route("/ajoutTechnologie", name="_ajoutTechnologie")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ajoutTechnologieAction()
	{
		// On cr�e un objet technologie
		$technologie = new Technologie();
		
		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new TechnologieType, $technologie);
		
		// On r�cup�re la requ�te
		$request = $this->get('request');
		
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $technologie contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
		
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $editeur dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$em->persist($technologie);
				$em->flush();
		
				// On d�finit un message flash
				$this->get('session')->getFlashBag()->add('info', 'Technologie bien ajouté');
		
				// On redirige
				return $this->redirect($this->generateUrl('_ficheTechnologie', array('id' => $technologie->getId())));
			}
		
		}
		return array('form' => $form->createView());
	}
	
		/**
	 * @Route("/ajoutDomaine", name="_ajoutDomaine")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ajoutDomaineAction()
	{
		// On cr�e un objet domaine
		$domaine = new Domaine();
		
		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new DomaineType, $domaine);
		
		// On r�cup�re la requ�te
		$request = $this->get('request');
		
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $domaine contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
		
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $editeur dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$em->persist($domaine);
				$em->flush();
		
				// On d�finit un message flash
				$this->get('session')->getFlashBag()->add('info', 'Domaine bien ajouté');
		
				// On redirige
				return $this->redirect($this->generateUrl('_ficheDomaine', array('id' => $domaine->getId())));
			}
		
		}
		return array('form' => $form->createView());
	}
	
	/**
	 * @Route("/ajoutDirection", name="_ajoutDirection")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ajoutDirectionAction()
	{
		
		// On cr�e un objet direction
		$direction = new Direction();
		
		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new DirectionType, $direction);
		
		// On r�cup�re la requ�te
		$request = $this->get('request');
		
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $direction contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
		
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $editeur dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$em->persist($direction);
				$em->flush();
		
				// On d�finit un message flash
				$this->get('session')->getFlashBag()->add('info', 'Direction bien ajouté');
		
				// On redirige
				return $this->redirect($this->generateUrl('_ficheDirection', array('id' => $direction->getId())));
			}
		
		}
		return array('form' => $form->createView());
	}
	
	
	/**
	 * @Route("/ajoutOs", name="_ajoutOs")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ajoutOsAction()
	{
	
		// On cr�e un objet direction
		$os = new Os();
	
		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new OsType, $os);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $direction contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $os dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$nomComplet=$os->getNom();
				$nomComplet.=" ";
				$nomComplet.=$os->getVersion();
				$os->setNomComplet($nomComplet);
				$em->persist($os);
				$em->flush();
	
				// On d�finit un message flash
				$this->get('session')->getFlashBag()->add('info', 'Os bien ajouté');
	
				// On redirige
				return $this->redirect($this->generateUrl('_ficheOs', array('id' => $os->getId())));
			}
	
		}

		return array('form' => $form->createView());
	}
	
	/**
	 * @Route("/ajoutServeurWeb", name="_ajoutServeurWeb")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ajoutServeurWebAction()
	{
	
		// On cr�e un objet direction
		$serveurWeb = new ServeurWeb();
	
		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new ServeurWebType, $serveurWeb);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $serveurWeb contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $os dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$nomComplet=$serveurWeb->getNom();
				$nomComplet.=" ";
				$nomComplet.=$serveurWeb->getVersion();
				$serveurWeb->setNomComplet($nomComplet);
				$em->persist($serveurWeb);
				$em->flush();
	
				// On d�finit un message flash
				$this->get('session')->getFlashBag()->add('info', 'ServeurWeb bien ajouté');
	
				// On redirige
				return $this->redirect($this->generateUrl('_ficheServeurWeb', array('id' => $serveurWeb->getId())));
			}
	
		}
		
		return array('form' => $form->createView());
	}
	
	/**
	 * @Route("/ajoutSgbd", name="_ajoutSgbd")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ajoutSgbdAction()
	{
	
		// On cr�e un objet direction
		$sgbd = new Sgbd();
	
		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new SgbdType, $sgbd);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $sgbd contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $os dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$nomComplet=$sgbd->getNom();
				$nomComplet.=" ";
				$nomComplet.=$sgbd->getVersion();
				$sgbd->setNomComplet($nomComplet);
				$em->persist($sgbd);
				$em->flush();
	
				// On d�finit un message flash
				$this->get('session')->getFlashBag()->add('info', 'Sgbd bien ajouté');
	
				// On redirige
				return $this->redirect($this->generateUrl('_ficheSgbd', array('id' => $sgbd->getId())));
			}
	
		}
		return array('form' => $form->createView());
	}
	
	/**
	 * @Route("/ajoutLogiciel", name="_ajoutLogiciel")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ajoutLogicielAction()
	{
	
		// On cr�e un objet direction
		$logiciel = new Logiciel();
	
		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new LogicielType, $logiciel);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $logiciel contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $os dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$nomComplet=$logiciel->getNom();
				$nomComplet.=" ";
				$nomComplet.=$logiciel->getVersion();
				$logiciel->setNomComplet($nomComplet);
				$em->persist($logiciel);
				$em->flush();
	
				// On d�finit un message flash
				$this->get('session')->getFlashBag()->add('info', 'Logiciel bien ajouté');
	
				// On redirige
				return $this->redirect($this->generateUrl('_ficheLogiciel', array('id' => $logiciel->getId())));
			}
	
		}
		return array('form' => $form->createView());
	}
	
	/**
	 * @Route("/ajoutLangage", name="_ajoutLangage")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function ajoutLangageAction()
	{
	
		// On cr�e un objet direction
		$langage = new Langage();
	
		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new LangageType, $langage);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $langage contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $os dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$nomComplet=$langage->getNom();
				$nomComplet.=" ";
				$nomComplet.=$langage->getVersion();
				$langage->setNomComplet($nomComplet);
				$em->persist($langage);
				$em->flush();
	
				// On d�finit un message flash
				$this->get('session')->getFlashBag()->add('info', 'Langage bien ajouté');
	
				// On redirige
				return $this->redirect($this->generateUrl('_ficheLangage', array('id' => $langage->getId())));
			}
	
		}
		return array('form' => $form->createView());
	}
	
	/**********************************************************************************************/ 
	/****  LIST  **********************************************************************************/
	/**********************************************************************************************/
	
	/**
	 * @Route("/listCompetence", name="_listCompetence")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function listCompetenceAction()
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Competence');
	
		$listCompetence = $repository->findAll();
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
	
			// On redirige
			return $this->redirect($this->generateUrl('_ajoutCompetence'));
	
		}
	
		// on envoi� � la vu les r�sultats � la vue
		return array('list_Competence' => $Competence);
	}
	
	/**
	 * @Route("/listResponsableDsi", name="_listResponsableDsi")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function listResponsableDsiAction()
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:ResponsableDsi');
	
		$listResponsableDsi = $repository->findAll();
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {

			// On redirige
			return $this->redirect($this->generateUrl('_ajoutResponsableDsi'));
	
		}
	
		// on envoi� � la vu les r�sultats � la vue
		return array('list_ResponsableDsi' => $listResponsableDsi);
	}
	
	/**
	 * @Route("/listServiceAppliDsi", name="_listServiceAppliDsi")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function listServiceAppliDsiAction()
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:ServiceAppliDsi');
	
		$listServiceAppliDsi = $repository->findAll();
	
		// On r�cup�re la requ�te
		 $request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
	
			// On redirige vers la page de creation d'une application
			return $this->redirect($this->generateUrl('_ajoutServiceAppliDsi'));
	
		}
	
		// on envoi� � la vu les r�sultats � la vue
		return array('list_ServiceAppliDsi' => $listServiceAppliDsi);
	}
	
	/**
	 * @Route("/listEditeur", name="_listEditeur")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function listEditeurAction()
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Editeur');
	
		$listEditeur = $repository->findAll();
	
		// On r�cup�re la requ�te
		 $request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
	
			// On redirige vers la page de creation d'une application
			return $this->redirect($this->generateUrl('_ajoutEditeur'));
	
		}
	
		// on envoi� � la vu les r�sultats � la vue
		return array('list_Editeur' => $listEditeur);
	}
	
	/**
	 * @Route("/listTechnologie", name="_listTechnologie")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function listTechnologieAction()
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Technologie');
	
		$listTechnologie = $repository->findAll();
	
		// On r�cup�re la requ�te
		 $request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
	
		// On redirige vers la page de creation d'une application
		return $this->redirect($this->generateUrl('_ajoutTechnologie'));
	
		}
	
			// on envoi� � la vu les r�sultats � la vue
			return array('list_Technologie' => $listTechnologie);
	}
	
	
	/**
	 * @Route("/listDomaine", name="_listDomaine")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function listDomaineAction()
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Domaine');
	
		$listDomaine = $repository->findAll();
	
		// On r�cup�re la requ�te
		 $request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
	
			// On redirige vers la page de creation d'une application
			return $this->redirect($this->generateUrl('_ajoutDomaine'));
	
		}
	
		// on envoi� � la vu les r�sultats � la vue
		return array('list_Domaine' => $listDomaine);
	}
	
	/**
	 * @Route("/listDirection", name="_listDirection")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function listDirectionAction()
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Direction');
	
		$listDirection = $repository->findAll();
	
		// On r�cup�re la requ�te
		 $request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
	
			// On redirige vers la page de creation d'une application
			return $this->redirect($this->generateUrl('_ajoutDirection'));
	
		}
	
		// on envoi� � la vu les r�sultats � la vue
		return array('list_Direction' => $listDirection);
	}
	
	/**
	 * @Route("/listOS", name="_listOs")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function listOsAction()
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Os');
		
		$listOs = $repository->findAll();
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
	
			// On redirige vers la page de creation d'une application
			return $this->redirect($this->generateUrl('_ajoutOs'));
	
		}
	
		// on envoi� � la vu les r�sultats � la vue
		return array('list_Os' => $listOs);
	}
	
	/**
	 * @Route("/listServeurWeb", name="_listServeurWeb")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function listServeurWebAction()
	{
		// On r�cup�re le repository
		
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:ServeurWeb');
	
		$listServeurWeb = $repository->findAll();
		
	
		// On r�cup�re la requ�te
			$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
	
			// On redirige vers la page de creation d'une application
			return $this->redirect($this->generateUrl('_ajoutServeurWeb'));
	
		}
	
		// on envoi� � la vu les r�sultats � la vue
		return array('list_ServeurWeb' => $listServeurWeb);
	}
	
	/**
	 * @Route("/listSgbd", name="_listSgbd")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function listSgbdAction()
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Sgbd');
	
		$listSgbd = $repository->findAll();
	
		// On r�cup�re la requ�te
		 $request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
	
			// On redirige vers la page de creation d'une application
			return $this->redirect($this->generateUrl('_ajoutSgbd'));
	
		}
	
		// on envoi� � la vu les r�sultats � la vue
		return array('list_Sgbd' => $listSgbd);
	}
	
	/**
	 * @Route("/listLogiciel", name="_listLogiciel")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function listLogicielAction()
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Logiciel');
	
		$listLogiciel = $repository->findAll();
	
		// On r�cup�re la requ�te
		 $request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
	
			// On redirige vers la page de creation d'une application
			return $this->redirect($this->generateUrl('_ajoutLogiciel'));
	
		}
	
		// on envoi� � la vu les r�sultats � la vue
		return array('list_Logiciel' => $listLogiciel);
	}
	
	/**
	 * @Route("/listLangage", name="_listLangage")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function listLangageAction()
	{
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getManager()
		->getRepository('melonRefappBundle:Langage');
	
		$listLangage = $repository->findAll();
	
		// On r�cup�re la requ�te
		 $request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
	
			// On redirige vers la page de creation d'une application
			return $this->redirect($this->generateUrl('_ajoutLangage'));
	
		}
	
		// on envoi� � la vu les r�sultats � la vue
		return array('list_Langage' => $listLangage);
	}
	
	
	/**********************************************************************************************/
	/****  MODIFICATION  **************************************************************************/
	/**********************************************************************************************/
	
	
	/**
	 * @Route("/modifierCompetence/{id}", name="_modifierCompetence")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function modifierCompetenceAction($id)
	{
		$competence = $this->getDoctrine()
		->getRepository('melon\RefappBundle\Entity\Competence')
		->find($id);
	
		//r�cup�ration du formulaire
		$form = $this->createForm(new CompetenceType, $competence);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $competence contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $application dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$em->persist($competence);
				$em->flush();
	
				// On redirige vers la page de visualisation de l'application nouvellement cr��
				return $this->redirect($this->generateUrl('_ficheCompetence', array('id' => $competence->getId())));
			}
		}
	
		return $this->render('melonRefappBundle:Administration:ajoutCompetence.html.twig', array('form' => $form->createView()));
	}

	/**
	 * @Route("/modifierDirection/{id}", name="_modifierDirection")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function modifierDirectionAction($id)
	{
		$direction = $this->getDoctrine()
		->getRepository('melon\RefappBundle\Entity\Direction')
		->find($id);
	
		//r�cup�ration du formulaire
		$form = $this->createForm(new DirectionType, $direction);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $direction contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $application dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$em->persist($direction);
				$em->flush();
	
				// On redirige vers la page de visualisation de l'application nouvellement cr��
				return $this->redirect($this->generateUrl('_ficheDirection', array('id' => $direction->getId())));
			}
		}
	
		return $this->render('melonRefappBundle:Administration:ajoutDirection.html.twig', array('form' => $form->createView()));
	}
	
	/**
	 * @Route("/modifierDomaine/{id}", name="_modifierDomaine")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function modifierDomaineAction($id)
	{
		$domaine = $this->getDoctrine()
		->getRepository('melon\RefappBundle\Entity\Domaine')
		->find($id);
	
		//r�cup�ration du formulaire
		$form = $this->createForm(new DomaineType, $domaine);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $domaine contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $application dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$em->persist($domaine);
				$em->flush();
	
				// On redirige vers la page de visualisation de l'application nouvellement cr��
				return $this->redirect($this->generateUrl('_ficheDomaine', array('id' => $domaine->getId())));
			}
		}
	
		return $this->render('melonRefappBundle:Administration:ajoutDomaine.html.twig', array('form' => $form->createView()));
			}
	
	/**
	 * @Route("/modifierEditeur/{id}", name="_modifierEditeur")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function modifierEditeurAction($id)
	{
		$editeur = $this->getDoctrine()
		->getRepository('melon\RefappBundle\Entity\Editeur')
		->find($id);
	
		//r�cup�ration du formulaire
		$form = $this->createForm(new EditeurType, $editeur);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $editeur contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $application dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$em->persist($editeur);
				$em->flush();
	
				// On redirige vers la page de visualisation de l'application nouvellement cr��
				return $this->redirect($this->generateUrl('_ficheEditeur', array('id' => $editeur->getId())));
			}
		}
	
		return $this->render('melonRefappBundle:Administration:ajoutEditeur.html.twig', array('form' => $form->createView()));
			}
	
	/**
	 * @Route("/modifierLangage/{id}", name="_modifierLangage")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function modifierLangageAction($id)
	{
		$langage = $this->getDoctrine()
		->getRepository('melon\RefappBundle\Entity\Langage')
		->find($id);
	
		//r�cup�ration du formulaire
		$form = $this->createForm(new LangageType, $langage);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $langage contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $application dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$nomComplet=$langage->getNom();
				$nomComplet.=" ";
				$nomComplet.=$langage->getVersion();
				$langage->setNomComplet($nomComplet);
				$em->persist($langage);
				$em->flush();
	
				// On redirige vers la page de visualisation de l'application nouvellement cr��
				return $this->redirect($this->generateUrl('_ficheLangage', array('id' => $langage->getId())));
			}
		}
	
		return $this->render('melonRefappBundle:Administration:ajoutLangage.html.twig', array('form' => $form->createView()));
			}
	
	/**
	 * @Route("/modifierLogiciel/{id}", name="_modifierLogiciel")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function modifierLogicielAction($id)
	{
		$logiciel = $this->getDoctrine()
		->getRepository('melon\RefappBundle\Entity\Logiciel')
		->find($id);
	
		//r�cup�ration du formulaire
		$form = $this->createForm(new LogicielType, $logiciel);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $logiciel contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $application dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$nomComplet=$logiciel->getNom();
				$nomComplet.=" ";
				$nomComplet.=$logiciel->getVersion();
				$logiciel->setNomComplet($nomComplet);
				$em->persist($logiciel);
				$em->flush();
	
				// On redirige vers la page de visualisation de l'application nouvellement cr��
				return $this->redirect($this->generateUrl('_ficheLogiciel', array('id' => $logiciel->getId())));
			}
		}
	
		return $this->render('melonRefappBundle:Administration:ajoutLogiciel.html.twig', array('form' => $form->createView()));
			}
	
	/**
	 * @Route("/modifierOs/{id}", name="_modifierOs")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function modifierOsAction($id)
	{
		$os = $this->getDoctrine()
		->getRepository('melon\RefappBundle\Entity\Os')
		->find($id);
	
		//r�cup�ration du formulaire
		$form = $this->createForm(new OsType, $os);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $os contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $application dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$nomComplet=$os->getNom();
				$nomComplet.=" ";
				$nomComplet.=$os->getVersion();
				$os->setNomComplet($nomComplet);
				$em->persist($os);
				$em->flush();
	
				// On redirige vers la page de visualisation de l'application nouvellement cr��
				return $this->redirect($this->generateUrl('_ficheOs', array('id' => $os->getId())));
			}
		}
	
		return $this->render('melonRefappBundle:Administration:ajoutOs.html.twig', array('form' => $form->createView()));
			}
	
	
	/**
	 * @Route("/modifierResponsableDsi/{id}", name="_modifierResponsableDsi")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function modifierResponsableDsiAction($id)
	{
		$responsableDsi = $this->getDoctrine()
		->getRepository('melon\RefappBundle\Entity\ResponsableDsi')
		->find($id);
		$responsableDsi->setRoleDefault("ROLE_RESPONSABLE_APPLICATION");
	
		//r�cup�ration du formulaire
		$form = $this->createForm(new ResponsableDsiType, $responsableDsi);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $responsableDsi contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $application dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$em->persist($responsableDsi);
				$em->flush();
	
				// On redirige vers la page de visualisation de l'application nouvellement cr��
				return $this->redirect($this->generateUrl('_ficheResponsableDsi', array('id' => $responsableDsi->getId())));
			}
		}
	
		return $this->render('melonRefappBundle:Administration:ajoutResponsableDsi.html.twig', array('form' => $form->createView()));
			}
	
	
	/**
	 * @Route("/modifierServeurWeb/{id}", name="_modifierServeurWeb")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function modifierServeurWebAction($id)
	{
		$serveurWeb = $this->getDoctrine()
		->getRepository('melon\RefappBundle\Entity\ServeurWeb')
		->find($id);
	
		//r�cup�ration du formulaire
		$form = $this->createForm(new ServeurWebType(), $serveurWeb);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $serveurWeb contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $application dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$nomComplet=$serveurWeb->getNom();
				$nomComplet.=" ";
				$nomComplet.=$serveurWeb->getVersion();
				$serveurWeb->setNomComplet($nomComplet);
				$em->persist($serveurWeb);
				$em->flush();
	
				// On redirige vers la page de visualisation de l'application nouvellement cr��
				return $this->redirect($this->generateUrl('_ficheServeurWeb', array('id' => $serveurWeb->getId())));
			}
		}
	
		return $this->render('melonRefappBundle:Administration:ajoutServeurWeb.html.twig', array('form' => $form->createView()));
			}
	
	
	/**
	 * @Route("/modifierServiceAppliDsi/{id}", name="_modifierServiceAppliDsi")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function modifierServiceAppliDsiWebAction($id)
	{
		$serviceAppliDsi = $this->getDoctrine()
		->getRepository('melon\RefappBundle\Entity\ServiceAppliDsi')
		->find($id);
	
		//r�cup�ration du formulaire
		$form = $this->createForm(new ServiceAppliDsiType, $serviceAppliDsi);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $ServiceAppliDsi contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $application dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$em->persist($serviceAppliDsi);
				$em->flush();
	
				// On redirige vers la page de visualisation de l'application nouvellement cr��
				return $this->redirect($this->generateUrl('_ficheServiceAppliDsi', array('id' => $serviceAppliDsi->getId())));
			}
		}
	
		return $this->render('melonRefappBundle:Administration:ajoutServiceAppliDsi.html.twig', array('form' => $form->createView()));
			}
	
	/**
	 * @Route("/modifierSgbd/{id}", name="_modifierSgbd")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function modifierSgbdAction($id)
	{
		$sgbd = $this->getDoctrine()
		->getRepository('melon\RefappBundle\Entity\Sgbd')
		->find($id);
	
		//r�cup�ration du formulaire
		$form = $this->createForm(new SgbdType(), $sgbd);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $sgbd contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $os dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$nomComplet=$sgbd->getNom();
				$nomComplet.=" ";
				$nomComplet.=$sgbd->getVersion();
				$sgbd->setNomComplet($nomComplet);
				$em->persist($sgbd);
				$em->flush();
	
				// On redirige vers la page de visualisation de l'application nouvellement cr��
				return $this->redirect($this->generateUrl('_ficheSgbd', array('id' => $sgbd->getId())));
			}
		}
	
		return $this->render('melonRefappBundle:Administration:ajoutSgbd.html.twig', array('form' => $form->createView()));
			}
	
	/**
	 * @Route("/modifierTechnologie/{id}", name="_modifierTechnologie")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function modifierTechnologieAction($id)
	{
		$technologie = $this->getDoctrine()
		->getRepository('melon\RefappBundle\Entity\Technologie')
		->find($id);
	
		//r�cup�ration du formulaire
		$form = $this->createForm(new TechnologieType(), $technologie);
	
		// On r�cup�re la requ�te
		$request = $this->get('request');
	
		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $technologie contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);
	
			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $application dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$em->persist($technologie);
				$em->flush();
	
				// On redirige vers la page de visualisation de l'application nouvellement cr��
				return $this->redirect($this->generateUrl('_ficheTechnologie', array('id' => $technologie->getId())));
			}
		}
	
		return $this->render('melonRefappBundle:Administration:ajoutTechnologie.html.twig', array('form' => $form->createView()));
			}
	
	
	/**********************************************************************************************/
	/****  SUPRESSION  ****************************************************************************/
	/**********************************************************************************************/

			/**
			 * @Route("/supprimerCompetence/{id}", name="_supprimerCompetence")
			 * @Template()
			 * @Secure(roles="ROLE_ADMIN")
			 */
			public function supprimerCompetenceAction($id)
			{
				$competence = $this->getDoctrine()
				->getRepository('melon\RefappBundle\Entity\Competence')
				->find($id);
				// On cr�e un formulaire vide, qui ne contiendra que le champ CSRF
				// Cela permet de prot�ger la suppression d'article contre cette faille
				$form = $this->createFormBuilder()->getForm();
			
				$request = $this->getRequest();
				if ($request->getMethod() == 'POST') {
					$form->bind($request);
						
					if ($form->isValid()) {
						// On supprime la direction
						$em = $this->getDoctrine()->getManager();
						$em->remove($competence);
						$em->flush();
							
						// On d�finit un message flash
						$this->get('session')->getFlashBag()->add('info', 'Compétence bien supprimée');
							
						// Puis on redirige vers l'accueil
						return $this->redirect($this->generateUrl('_administration'));
					}
				}
					
				// Si la requ�te est en GET, on affiche une page de confirmation avant de supprimer
				return array(
						'competence' => $competence,
						'form'    => $form->createView());		
			}
			
		 /**
		 * @Route("/supprimerDirection/{id}", name="_supprimerDirection")
		 * @Template()
		 * @Secure(roles="ROLE_ADMIN")
		 */
		public function supprimerDirectionAction($id)
		{
			$direction = $this->getDoctrine()
			->getRepository('melon\RefappBundle\Entity\Direction')
			->find($id);
			// On cr�e un formulaire vide, qui ne contiendra que le champ CSRF
			// Cela permet de prot�ger la suppression d'article contre cette faille
			$form = $this->createFormBuilder()->getForm();
		
			$request = $this->getRequest();
			if ($request->getMethod() == 'POST') {
				$form->bind($request);
			
				if ($form->isValid()) {
					// On supprime la direction
					$em = $this->getDoctrine()->getManager();
					$em->remove($direction);
					$em->flush();
			
					// On d�finit un message flash
					$this->get('session')->getFlashBag()->add('info', 'Direction bien supprimée');
			
					// Puis on redirige vers l'accueil
					return $this->redirect($this->generateUrl('_administration'));
				}
			}
			
			// Si la requ�te est en GET, on affiche une page de confirmation avant de supprimer
			return array(
					'direction' => $direction,
					'form'    => $form->createView());
		
		}
		
		/**
		 * @Route("/supprimerDomaine/{id}", name="_supprimerDomaine")
		 * @Template()
		 * @Secure(roles="ROLE_ADMIN")
		 */
		public function supprimerDomaineAction($id)
		{
			$domaine = $this->getDoctrine()
			->getRepository('melon\RefappBundle\Entity\Domaine')
			->find($id);
			// On cr�e un formulaire vide, qui ne contiendra que le champ CSRF
			// Cela permet de prot�ger la suppression d'article contre cette faille
			$form = $this->createFormBuilder()->getForm();
		
			$request = $this->getRequest();
			if ($request->getMethod() == 'POST') {
				$form->bind($request);
					
				if ($form->isValid()) {
					// On supprime le Domaine
					$em = $this->getDoctrine()->getManager();
					$em->remove($domaine);
					$em->flush();
						
					// On d�finit un message flash
					$this->get('session')->getFlashBag()->add('info', 'Domaine bien supprimé');
						
					// Puis on redirige vers l'accueil
					return $this->redirect($this->generateUrl('_administration'));
				}
			}
				
			// Si la requ�te est en GET, on affiche une page de confirmation avant de supprimer
			return array(
					'domaine' => $domaine,
					'form'    => $form->createView());
		
		}
		
		/**
		 * @Route("/supprimerEditeur/{id}", name="_supprimerEditeur")
		 * @Template()
		 * @Secure(roles="ROLE_ADMIN")
		 */
		public function supprimerEditeurAction($id)
		{
			$editeur = $this->getDoctrine()
			->getRepository('melon\RefappBundle\Entity\Editeur')
			->find($id);
			// On cr�e un formulaire vide, qui ne contiendra que le champ CSRF
			// Cela permet de prot�ger la suppression d'article contre cette faille
			$form = $this->createFormBuilder()->getForm();
		
			$request = $this->getRequest();
			if ($request->getMethod() == 'POST') {
				$form->bind($request);
					
				if ($form->isValid()) {
					// On supprime le editeur
					$em = $this->getDoctrine()->getManager();
					$em->remove($editeur);
					$em->flush();
		
					// On d�finit un message flash
					$this->get('session')->getFlashBag()->add('info', 'Editeur bien supprimé');
		
					// Puis on redirige vers l'accueil
					return $this->redirect($this->generateUrl('_administration'));
				}
			}
		
			// Si la requ�te est en GET, on affiche une page de confirmation avant de supprimer
			return array(
					'editeur' => $editeur,
					'form'    => $form->createView());
		
		}
		
		/**
		 * @Route("/supprimerLangage/{id}", name="_supprimerLangage")
		 * @Template()
		 * @Secure(roles="ROLE_ADMIN")
		 */
		public function supprimerLangageAction($id)
		{
			$langage = $this->getDoctrine()
			->getRepository('melon\RefappBundle\Entity\Langage')
			->find($id);
			// On cr�e un formulaire vide, qui ne contiendra que le champ CSRF
			// Cela permet de prot�ger la suppression d'article contre cette faille
			$form = $this->createFormBuilder()->getForm();
		
			$request = $this->getRequest();
			if ($request->getMethod() == 'POST') {
				$form->bind($request);
					
				if ($form->isValid()) {
					// On supprime le langage
					$em = $this->getDoctrine()->getManager();
					$em->remove($langage);
					$em->flush();
		
					// On d�finit un message flash
					$this->get('session')->getFlashBag()->add('info', 'Langage bien supprimé');
		
					// Puis on redirige vers l'accueil
					return $this->redirect($this->generateUrl('_administration'));
				}
			}
		
			// Si la requ�te est en GET, on affiche une page de confirmation avant de supprimer
			return array(
					'langage' => $langage,
					'form'    => $form->createView());
		
		}

		/**
		 * @Route("/supprimerLogiciel/{id}", name="_supprimerLogiciel")
		 * @Template()
		 * @Secure(roles="ROLE_ADMIN")
		 */
		public function supprimerLogicielAction($id)
		{
			$logiciel = $this->getDoctrine()
			->getRepository('melon\RefappBundle\Entity\Logiciel')
			->find($id);
			// On cr�e un formulaire vide, qui ne contiendra que le champ CSRF
			// Cela permet de prot�ger la suppression d'article contre cette faille
			$form = $this->createFormBuilder()->getForm();
		
			$request = $this->getRequest();
			if ($request->getMethod() == 'POST') {
				$form->bind($request);
					
				if ($form->isValid()) {
					// On supprime le logiciel
					$em = $this->getDoctrine()->getManager();
					$em->remove($logiciel);
					$em->flush();
		
					// On d�finit un message flash
					$this->get('session')->getFlashBag()->add('info', 'Logiciel bien supprimé');
		
					// Puis on redirige vers l'accueil
					return $this->redirect($this->generateUrl('_administration'));
				}
			}
		
			// Si la requ�te est en GET, on affiche une page de confirmation avant de supprimer
			return array(
					'logiciel' => $logiciel,
					'form'    => $form->createView());
		
		}
		
		/**
		 * @Route("/supprimerOs/{id}", name="_supprimerOs")
		 * @Template()
		 * @Secure(roles="ROLE_ADMIN")
		 */
		public function supprimerOsAction($id)
		{
			$os = $this->getDoctrine()
			->getRepository('melon\RefappBundle\Entity\Os')
			->find($id);
			// On cr�e un formulaire vide, qui ne contiendra que le champ CSRF
			// Cela permet de prot�ger la suppression d'article contre cette faille
			$form = $this->createFormBuilder()->getForm();
		
			$request = $this->getRequest();
			if ($request->getMethod() == 'POST') {
				$form->bind($request);
					
				if ($form->isValid()) {
					// On supprime le Os
					$em = $this->getDoctrine()->getManager();
					$em->remove($os);
					$em->flush();
		
					// On d�finit un message flash
					$this->get('session')->getFlashBag()->add('info', 'Os bien supprimé');
		
					// Puis on redirige
					return $this->redirect($this->generateUrl('_administration'));
				}
			}
		
			// Si la requ�te est en GET, on affiche une page de confirmation avant de supprimer
			return array(
					'os' => $os,
					'form'    => $form->createView());
		
		}
		
		/**
		 * @Route("/supprimerResponsableDsi/{id}", name="_supprimerResponsableDsi")
		 * @Template()
		 * @Secure(roles="ROLE_ADMIN")
		 */
		public function supprimerResponsableDsiAction($id)
		{
			$responsableDsi = $this->getDoctrine()
			->getRepository('melon\RefappBundle\Entity\ResponsableDsi')
			->find($id);
			// On cr�e un formulaire vide, qui ne contiendra que le champ CSRF
			// Cela permet de prot�ger la suppression d'article contre cette faille
			$form = $this->createFormBuilder()->getForm();
		
			$request = $this->getRequest();
			if ($request->getMethod() == 'POST') {
				$form->bind($request);
					
				if ($form->isValid()) {
					// On supprime le ResponsableDsi
					$em = $this->getDoctrine()->getManager();
					$em->remove($responsableDsi);
					$em->flush();
		
					// On d�finit un message flash
					$this->get('session')->getFlashBag()->add('info', 'Responsable Dsi bien supprimé');
		 
					// Puis on redirige
					return $this->redirect($this->generateUrl('_administration'));
				}
			}
		
			// Si la requ�te est en GET, on affiche une page de confirmation avant de supprimer
			return array(
					'responsableDsi' => $responsableDsi,
					'form'    => $form->createView());
		
		}
		
		/**
		 * @Route("/supprimerServeurWeb/{id}", name="_supprimerServeurWeb")
		 * @Template()
		 * @Secure(roles="ROLE_ADMIN")
		 */
		public function supprimerServeurWebAction($id)
		{
			$ServeurWeb = $this->getDoctrine()
			->getRepository('melon\RefappBundle\Entity\ServeurWeb')
			->find($id);
			// On cr�e un formulaire vide, qui ne contiendra que le champ CSRF
			// Cela permet de prot�ger la suppression d'article contre cette faille
			$form = $this->createFormBuilder()->getForm();
		
			$request = $this->getRequest();
			if ($request->getMethod() == 'POST') {
				$form->bind($request);
					
				if ($form->isValid()) {
					// On supprime le ServeurWeb
					$em = $this->getDoctrine()->getManager();
					$em->remove($ServeurWeb);
					$em->flush();
		
					// On d�finit un message flash
					$this->get('session')->getFlashBag()->add('info', 'ServeurWeb Dsi bien supprimé');
						
					// Puis on redirige
					return $this->redirect($this->generateUrl('_administration'));
				}
			}
		
			// Si la requ�te est en GET, on affiche une page de confirmation avant de supprimer
			return array(
					'serveurWeb' => $ServeurWeb,
					'form'    => $form->createView());
		
		}
		
		/**
		 * @Route("/supprimerServiceAppliDsi/{id}", name="_supprimerServiceAppliDsi")
		 * @Template()
		 * @Secure(roles="ROLE_ADMIN")
		 */
		public function supprimerServiceAppliDsiAction($id)
		{
			$serviceAppliDsi = $this->getDoctrine()
			->getRepository('melon\RefappBundle\Entity\ServiceAppliDsi')
			->find($id);
			// On cr�e un formulaire vide, qui ne contiendra que le champ CSRF
			// Cela permet de prot�ger la suppression d'article contre cette faille
			$form = $this->createFormBuilder()->getForm();
		
			$request = $this->getRequest();
			if ($request->getMethod() == 'POST') {
				$form->bind($request);
					
				if ($form->isValid()) {
					// On supprime le ServiceAppliDsi
					$em = $this->getDoctrine()->getManager();
					$em->remove($serviceAppliDsi);
					$em->flush();
		
					// On d�finit un message flash
					$this->get('session')->getFlashBag()->add('info', 'ServiceAppliDsi Dsi bien supprimé');
		
					// Puis on redirige
					return $this->redirect($this->generateUrl('_administration'));
				}
			}
		
			// Si la requ�te est en GET, on affiche une page de confirmation avant de supprimer
			return array(
					'serviceAppliDsi' => $serviceAppliDsi,
					'form'    => $form->createView());
		
		}
		
		/**
		 * @Route("/supprimerSgbd/{id}", name="_supprimerSgbd")
		 * @Template()
		 * @Secure(roles="ROLE_ADMIN")
		 */
		public function supprimerSgbdAction($id)
		{
			$sgbd = $this->getDoctrine()
			->getRepository('melon\RefappBundle\Entity\Sgbd')
			->find($id);
			// On cr�e un formulaire vide, qui ne contiendra que le champ CSRF
			// Cela permet de prot�ger la suppression d'article contre cette faille
			$form = $this->createFormBuilder()->getForm();
		
			$request = $this->getRequest();
			if ($request->getMethod() == 'POST') {
				$form->bind($request);
					
				if ($form->isValid()) {
					// On supprime le sgbd
					$em = $this->getDoctrine()->getManager();
					$em->remove($sgbd);
					$em->flush();
		
					// On d�finit un message flash
					$this->get('session')->getFlashBag()->add('info', 'Sgbd Dsi bien supprimé');
		
					// Puis on redirige
					return $this->redirect($this->generateUrl('_administration'));
				}
			}
		
			// Si la requ�te est en GET, on affiche une page de confirmation avant de supprimer
			return array(
					'sgbd' => $sgbd,
					'form'    => $form->createView());
		
		}
		
		/**
		 * @Route("/supprimerTechnologie/{id}", name="_supprimerTechnologie")
		 * @Template()
		 * @Secure(roles="ROLE_ADMIN")
		 */
		public function supprimerTechnologieAction($id)
		{
			$technologie = $this->getDoctrine()
			->getRepository('melon\RefappBundle\Entity\Technologie')
			->find($id);
			// On cr�e un formulaire vide, qui ne contiendra que le champ CSRF
			// Cela permet de prot�ger la suppression d'article contre cette faille
			$form = $this->createFormBuilder()->getForm();
		
			$request = $this->getRequest();
			if ($request->getMethod() == 'POST') {
				$form->bind($request);
					
				if ($form->isValid()) {
					// On supprime le sgbd
					$em = $this->getDoctrine()->getManager();
					$em->remove($technologie);
					$em->flush();
		
					// On d�finit un message flash
					$this->get('session')->getFlashBag()->add('info', 'Technologie Dsi bien supprimé');
		
					// Puis on redirige
					return $this->redirect($this->generateUrl('_administration'));
				}
			}
		
			// Si la requ�te est en GET, on affiche une page de confirmation avant de supprimer
			return array(
					'technologie' => $technologie,
					'form'    => $form->createView());
		
		}
		
		
		public function registerBundles()
		{
			$bundles = array(
					new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
			);
		}
	
		
		
		/*
		/**
		 * @Route("/envoyerMail", name="_envoyerMail")
		 * @Template()
		 * @Secure(roles="ROLE_ADMIN")
		 *//*
		public function envoyerMail(){
			// Récupération du service
			$mailer = $this->get('mailer');
		
			// Création de l'e-mail : le service mailer utilise SwiftMailer, donc nous créons une instance de Swift_Message
			$message = \Swift_Message::newInstance()
			->setSubject('Application non à jour')
			->setFrom('romain.marecat@gmail.com')
			->setTo('romain.marecat@gmail.com')
			->setBody('Bonjour, Votre application n\'est pas à jour');
		
			// Retour au service mailer, nous utilisons sa méthode « send() » pour envoyer notre $message
			$mailer->send($message);
		
			// N'oublions pas de retourner une réponse, par exemple une page qui afficherait « L'e-mail a bien été envoyé »
			return new Response('Email bien envoyé');
			
			//création d'un objet transport
			$transport = \Swift_SmtpTransport::newInstance('smtp.ligams.com', 25, 'ssl' )
			->setUsername('username')
			->setPassword('password');
			//création d'un objet mailer
			$mailer = \Swift_Mailer::newInstance($transport);

			// une seconde de pause tous les 1 mails
			$antiflood = new \Swift_Plugins_AntiFloodPlugin(1,1510);
			
			foreach($users as $user)
			{
				$decoratorReplacement[$user->email] = array(
						'#email#' => $user->email,
						'#nom#'   => $user->nom,
						'#prenom#'=> $user->prenom,
				);
			
			}
			
			$decorator = new \Swift_Plugins_DecoratorPlugin($decoratorReplacement);
			//on enregistre les plugins
			$mailer->registerPlugin($antiflood);
			$mailer->registerPlugin($throttle);
			$mailer->registerPlugin($throttle2);
			$mailer->registerPlugin($decorator);
			
			$message = \Swift_Message::newInstance();
			$message->setSubject("Objet : #nom# #prenom#");
			$message->setFrom('ligamsATligams.com');
			$message->setBody('<p>Hello #nom# #prenom# #email#</p>','text/html');
			foreach($users as $user){
				$message->setTo($user->email);
				if(!$mailer->send($message)){
					//erreur d'envoi
				}
			}
			}
		
			public function indexAction($name){
				$message = \Swift_Message::newInstance()
				->setSubject('Hello Email')
				->setFrom('send@example.com')
				->setTo('recipient@example.com')
				->setBody(
						$this->renderView(
								'HelloBundle:Hello:email.txt.twig',
								array('name' => $name)
						)
				);
				$this->get('mailer')->send($message);
			
				return $this->render('envoyerMail', 'envoyerMail', 'melonRefapp:Administration:envoyerMail.thml.twig');
			}*/

}