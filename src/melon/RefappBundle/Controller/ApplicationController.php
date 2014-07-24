<?php

namespace melon\RefappBundle\Controller;

use melon\RefappBundle\Entity\Favoris;

use Doctrine\DBAL\Driver\SQLSrv\LastInsertId;

use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Ps\PdfBundle\Annotation\Pdf;
use melon\RefappBundle\Entity\Application;
use melon\RefappBundle\Form\ApplicationType;

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

use melon\RefappBundle\Entity\RechercheAppli;
use melon\RefappBundle\Form\RechercheAppliType;

use melon\RefappBundle\Entity\Composant;
use melon\RefappBundle\Form\ComposantType;

use melon\RefappBundle\Entity\Obsolescence;
use melon\RefappBundle\Form\ObsolescenceType;

use melon\RefappBundle\Entity\ResponsableDsi;
use melon\RefappBundle\Form\ResponsableDsiType;

use melon\RefappBundle\Entity\EnvoyerMail;
use melon\RefappBundle\Form\EnvoyerMailType;

use melon\RefappBundle\Entity\Editeur;
use melon\RefappBundle\Form\EditeurType;

use PHPPdf\Autoloader;
use PHPPdf\Core\FacadeBuilder;
use PHPPdf\DataSource\DataSource;
/**
 * @Route("/refapp")
 */
class ApplicationController extends Controller {

	/**
	 * @Route("/ficheAppli/{id}", name="_ficheAppli")
	 * @Template()
	 * @Secure(roles="ROLE_USER")
	 */
	public function ficheAppliAction($id) {
		// On r�cup�re le repository
		$repository = $this->getDoctrine()->getManager()
				->getRepository('melonRefappBundle:Application');

		// On r�cup�re l'appli correspondant au nom donn�e en param�tre
		$Appli = $repository->findOneBy(array('id' => $id));

		$list_langage_associe = $this->getDoctrine()->getManager()
				->getRepository('melonRefappBundle:Langage')
				->searchLangageAppli($Appli);

		$list_sgbd_associe = $this->getDoctrine()->getManager()
				->getRepository('melonRefappBundle:Sgbd')
				->searchSgbdAppli($Appli);

		$list_logiciel_associe = $this->getDoctrine()->getManager()
				->getRepository('melonRefappBundle:Logiciel')
				->searchLogicielAppli($Appli);

		$list_serveurWeb_associe = $this->getDoctrine()->getManager()
				->getRepository('melonRefappBundle:serveurWeb')
				->searchServeurWebAppli($Appli);

		$list_os_associe = $this->getDoctrine()->getManager()
				->getRepository('melonRefappBundle:Os')->searchOsAppli($Appli);
		
		$em = $this->getDoctrine()->getManager()->getRepository('melonRefappBundle:Obsolescence');
		$obsolescence = $em->findAll();
		
		$list_application_appli = $this->getDoctrine()->getManager()
		->getRepository('melonRefappBundle:Application')->searchApplicationAppli($Appli);
		
		
		return array('appli' => $Appli,
				'list_langage_appli' => $list_langage_associe,
				'list_sgbd_appli' => $list_sgbd_associe,
				'list_logiciel_appli' => $list_logiciel_associe,
				'list_serveurWeb_appli' => $list_serveurWeb_associe,
				'list_os_appli' => $list_os_associe, 
				'obsolescence'=> $obsolescence, 
				'list_application_appli' => $list_application_appli);
	}

	/**
	 * @Route("/listeAppli", name="_listeAppli")
	 * @Template()
	 * @Secure(roles="ROLE_USER")
	 */
	public function listeAppliAction() {
		// On r�cup�re le repository
		$repository = $this->getDoctrine()->getManager()->getRepository('melonRefappBundle:Application');
		// On r�cup�re toutes les entit�es avec findAll()
		$listApplication = $repository->findAll();
		// On r�cup�re toutes les appli
		$application = $repository->findAll();
		// On cr�e un objet de recherche
		// On r�cup�re le repository obsolescence
		$em = $this->getDoctrine()->getManager()->getRepository('melonRefappBundle:Obsolescence');
		$obsolescence = $em->findAll();
		// On r�cup�re la requ�te
		$request = $this->get('request');
		// On cr�e un objet de recherche
		$rechercheAppli = new RechercheAppli();
		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new RechercheAppliType, $rechercheAppli);
		if ($request->isMethod('POST')) {
			$form->bind($request);
			if ($form->isValid()) {
				$repositoryAppli = $this->getDoctrine()->getManager()->getRepository('melonRefappBundle:Application');
				$list_appli = $repositoryAppli->findAll();
				//objet rechercher appli
				//$data = $form->getData();
				//on r�cup�re tout les entit� (objet) soumise au fomulaire
				$dataNom = $form->get('nom')->getData();
				$dataCode = $form->get('code')->getData();
				$dataDomaine = $form->get('domaine')->getData();
				$dataDirection = $form->get('direction')->getData();
				$dataResponsableDsi = $form->get('responsableDsi')->getData();
				$dataServiceAppliDsi = $form->get('serviceAppliDsi')->getData();
				$dataEditeur = $form->get('editeur')->getData();
				$dataTechnologie = $form->get('technologie')->getData();
				$dataCompetence = $form->get('competence')->getData();
				$dataLangage = $form->get('langage')->getData();
				$dataLogiciel = $form->get('logiciel')->getData();
				$dataSgbd = $form->get('sgbd')->getData();
				$dataServeurWeb = $form->get('serveurWeb')->getData();
				$dataOs = $form->get('os')->getData();
				if ($dataNom != NULL OR $dataCode != NULL
						OR $dataDomaine != NULL OR $dataDirection != NULL
						OR $dataResponsableDsi != NULL OR $dataOs != NULL
						OR $dataServiceAppliDsi != NULL
						OR $dataServeurWeb != NULL OR $dataSgbd != NULL
						OR $dataLogiciel != NULL OR $dataLangage != NULL
						OR $dataTechnologie != NULL OR $dataEditeur != NULL
						OR $dataCompetence != NULL) {
					//on crée un arrayCollection vide
					$list_appli = new \Doctrine\Common\Collections\ArrayCollection();
					$list_appli = $this->getDoctrine()->getManager()->getRepository('melonRefappBundle:Application')
					->search($dataNom, $dataCode, $dataDomaine,
							$dataDirection, $dataResponsableDsi,
							$dataServiceAppliDsi, $dataEditeur,
							$dataTechnologie, $dataCompetence,
							$dataLangage, $dataLogiciel, $dataSgbd,
							$dataServeurWeb, $dataOs);
					/*//////////////////////////////////////////////////////
					//Enregistrement dans mes Favoris de la requete
					//Recherche de l'utilisateur courant.
					$user = $this->getUser();
					$repository = $this->getDoctrine()->getManager()->getRepository('melonRefappBundle:ResponsableDsi');
					$ResponsableDsi= new ResponsableDsi();
					$ResponsableDsi = $repository->findOneBy(array('username' => $user->getUsername()));
					//Liste des parametres :
					$dateCreation=date("j/m/Y");
					$chemin="_listeAppli";
					$parametre=new \Doctrine\Common\Collections\ArrayCollection();
					$parametre=array($dataNom, $dataCode, $dataDomaine,
							$dataDirection, $dataResponsableDsi,
							$dataServiceAppliDsi, $dataEditeur,
							$dataTechnologie, $dataCompetence,
							$dataLangage, $dataLogiciel, $dataSgbd,
							$dataServeurWeb, $dataOs);
					$resultat=null;
					$utilisateur=$ResponsableDsi;
					$favoris=new Favoris();
					$favoris = $this->getDoctrine()->getRepository('melon\RefappBundle\Entity\Favoris')
					->searchMemeRequete($utilisateur,$chemin,$parametre);
					if ($favoris == NULL ){//si la requete n'existe pas
						//on définit chaque parametre avant d'etre enregistré
						$proprietaire=$ResponsableDsi;
						$nbConsultation=1;
						$nomFavoris="Recherche d'application n°".$nbConsultation."";
						$favoris->addUtilisateur($ResponsableDsi);
						$em->persist($favoris);
						$em->flush();
					}else{//si elle existe
						$nbConsultation=$nbConsultation+$favoris->getNbConsultation();
						$favoris->setDateCreation(date('d/m/Y'));
						$favoris->addUtilisateur($ResponsableDsi);
						$em->persist($favoris);
						$em->flush();
					}
					//////////////////////////////////////////////////////*/
				}
				return array('list_Application' => $list_appli,'form' => $form->createView(),'obsolescence' => $obsolescence);
			}
		}
		//on recupere la liste des composants
		return array('list_Application' => $listApplication,'form' => $form->createView(),'obsolescence' => $obsolescence);
		}


	/**
	 * @Route("/rapportObsolescence", name="_rapportObsolescence")
	 * @Template()
	 * @Secure(roles="ROLE_RESPONSABLE_APPLICATION")
	 */
	public function rapportObsolescenceAction() {
		// On r�cup�re le repository
		$repository = $this->getDoctrine()->getManager()
		->getRepository('melonRefappBundle:Application');
		// On r�cup�re toutes les entit�es avec findAll()
		$listApplication = $repository->findAll();
		//On recupere toutes les entites avec findall()
		$em = $this->getDoctrine()->getManager()->getRepository('melonRefappBundle:Obsolescence');
		$obsolescence = $em->findAll();
		// on cree une variable du champ email
		$resp=new EnvoyerMail();
		//on cr�e et r�cup�re le formulaire email
		$form = $this->createForm(new EnvoyerMailType(), $resp);
			// On r�cup�re la requ�te
		$request = $this->get('request');
		//si la methode est de type post (click bouton envoyer email)
		if($request->getMethod() == 'POST'){
			$form->bindRequest($request);
			//si le formulaire est valide
			if($form->isValid()){
				//creation du pdf pour etre mis en piece jointe
				$facade = $this->get('ps_pdf.facade');
				$response = new Response();
				$this->render('melonRefappBundle:Application:rapportObsolescence.pdf.twig',array(
       			'list_Application' => $listApplication,'obsolescence' => $obsolescence ), $response);
				$xml = $response->getContent();
				$pdf = $facade->render($xml);
				//envoie du message de type swift mail
				$message = \Swift_Message::newInstance()
				->setSubject('Rapport d\'Obsolescence Refapp')
				->setFrom('no-reply@refapp.cg38.local')				
				->setTo($resp->getEmail())
				->setBody('Rapport d\'obsolecence Refapp : ')
				->attach( \Swift_Attachment::newInstance( $pdf, 'RapportObsolescence.pdf', 'application/pdf') );
				//->setBody($this->render( 'melonRefappBundle:Application:rapportObsolescence.html.twig',array('list_Application' => $listApplication,'obsolescence' => $obsolescence,'form' => $form->createView())), 'text/html');
		
				$this->get('mailer')->send($message);
				$this->get('session')->setFlash('Notification', 'Votre message a été envoyé');
				//redirection sur l'index
				return  $this->redirect($this->generateUrl('_index'));
			}else {
				return array('list_Application' => $listApplication,'obsolescence' => $obsolescence,'form' => $form->createView());
			}
		}
		
		return array('list_Application' => $listApplication,'obsolescence' => $obsolescence,'form' => $form->createView());
	}

	
	/**
	 * @Route("/pdf", name="_pdf")
	 * @Template()
	 * @Secure(roles="ROLE_RESPONSABLE_APPLICATION")
	 */
	public function pdfAction() {
		// On r�cup�re le repository
		$repository = $this->getDoctrine()->getManager()
		->getRepository('melonRefappBundle:Application');
		// On r�cup�re toutes les entit�es avec findAll()
		$listApplication = $repository->findAll();
		///////////////////////Transformation en pdf ///////////////////////////
		$em = $this->getDoctrine()->getManager()->getRepository('melonRefappBundle:Obsolescence');
		$obsolescence = $em->findAll();
		
		$facade = $this->get('ps_pdf.facade');
        $response = new Response();
    	$this->render(('melonRefappBundle:Application:rapportObsolescence.pdf.twig'), array(
        'list_Application' => $listApplication,'obsolescence' => $obsolescence ), $response);
    	$xml = $response->getContent();
        $content = $facade->render($xml);
        return new Response($content, 200, array('content-type' => 'application/pdf'));
	}	
	
	/**
	 * @Route("/creerAppli", name="_creerAppli")
	 * @Template()
	 * @Secure(roles="ROLE_RESPONSABLE_APPLICATION")
	 */
	public function creerAppliAction() {
		// On cr�e un objet Application
		$application = new Application();
		
		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new ApplicationType, $application);
			// On r�cup�re la requ�te
		$request = $this->get('request');

		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $application contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);

			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {

				// On l'enregistre notre objet $application dans la base de données
				$em = $this->getDoctrine()->getManager();
				$applications =$application->getApplications();
				foreach ( $applications as $appli ){
					$rep = $this->getDoctrine()
					->getRepository('melon\RefappBundle\Entity\Application')
					->find($appli->getId());
					$rep->addApplication($application);
					$em->persist($rep);
				}
				$em->persist($application);
				$em->flush();
				
				// On d�finit un message flash
				$this->get('session')->getFlashBag()
						->add('info', 'Application ajoutée');
				
				//On redirige soit sur la fiche soit sur la modification si on fait simplement une sauvegarde
				$request  = $this->getRequest();
				$postData = $request->request->get('sauvegarder');
				if ($postData == 'Sauvegarder'){
					return $this->redirect($this->generateUrl('_modifierAppli',array('id' => $application->getId())));
				}else{
				// On redirige vers la page de visualisation de l'article nouvellement cr��
				return $this->redirect($this->generateUrl('_ficheAppli',array('id' => $application->getId())));
				}
			}
		}

		// � ce stade :
		// - Soit la requ�te est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
		// - Soit la requ�te est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau

		return array('form' => $form->createView());
	}

	/**
	 * @Route("/mesAppli", name="_mesAppli")
	 * @Template()
	 * @Secure(roles="ROLE_RESPONSABLE_APPLICATION")
	 */
	public function mesAppliAction() {
		// on r�cup�re le user courant, c'est � dire le responsable appli logu�
		$user = $this->getUser();
		// On r�cup�re le repository
		$repository = $this->getDoctrine()->getManager()->getRepository('melonRefappBundle:ResponsableDsi');
		$ResponsableDsi= new ResponsableDsi();
		// On r�cup�re l'appli correspondant au nom donn�e en param�tre
		$ResponsableDsi = $repository->findOneBy(array('username' => $user->getUsername()));
		//on recupere la liste d'appli de l'utilisateur
		$listApplication = $ResponsableDsi->getApplications();
		// On r�cup�re toutes les entit�es avec findAll()
		$application = $ResponsableDsi->getApplications();
		// On cr�e un objet de recherche
		// On r�cup�re le repository obsolescence
		$em = $this->getDoctrine()->getManager()->getRepository('melonRefappBundle:Obsolescence');
		$obsolescence = $em->findAll();
		// On r�cup�re la requ�te
		$request = $this->get('request');
		// On cr�e un objet de recherche
		$rechercheAppli = new RechercheAppli();
		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new RechercheAppliType, $rechercheAppli);
		if ($request->isMethod('POST')) {
			$form->bind($request);
			if ($form->isValid()) {
				// on r�cup�re le user courant, c'est � dire le responsable appli logu�
				$user = $this->getUser();
				// On r�cup�re le repository
				$repository = $this->getDoctrine()->getManager()
				->getRepository('melonRefappBundle:ResponsableDsi');
				// On r�cup�re l'appli correspondant au nom donn�e en param�tre
				$ResponsableDsi = $repository
				->findOneBy(array('username' => $user->getUsername()));
				//on recupere la liste d'appli de l'utilisateur
				$list_appli = $ResponsableDsi->getApplications();
				//objet rechercher appli
				//$data = $form->getData();
				//on r�cup�re tout les entit� (objet) soumise au fomulaire
				$dataNom = $form->get('nom')->getData();
				$dataCode = $form->get('code')->getData();
				$dataDomaine = $form->get('domaine')->getData();
				$dataDirection = $form->get('direction')->getData();
				$dataResponsableDsi = $form->get('responsableDsi')->getData();
				$dataServiceAppliDsi = $form->get('serviceAppliDsi')->getData();
				$dataEditeur = $form->get('editeur')->getData();
				$dataTechnologie = $form->get('technologie')->getData();
				$dataCompetence = $form->get('competence')->getData();
				$dataLangage = $form->get('langage')->getData();
				$dataLogiciel = $form->get('logiciel')->getData();
				$dataSgbd = $form->get('sgbd')->getData();
				$dataServeurWeb = $form->get('serveurWeb')->getData();
				$dataOs = $form->get('os')->getData();
				if ($dataNom != NULL OR $dataCode != NULL
						OR $dataDomaine != NULL OR $dataDirection != NULL
						OR $dataResponsableDsi != NULL OR $dataOs != NULL
						OR $dataServiceAppliDsi != NULL
						OR $dataServeurWeb != NULL OR $dataSgbd != NULL
						OR $dataLogiciel != NULL OR $dataLangage != NULL
						OR $dataTechnologie != NULL OR $dataEditeur != NULL
						OR $dataCompetence != NULL) {
					//on cr�e un arrayCollection vide
					$list_appli = new \Doctrine\Common\Collections\ArrayCollection();
					$list_appli = $this->getDoctrine()->getManager()->getRepository('melonRefappBundle:Application')
					->search($dataNom, $dataCode, $dataDomaine,
							$dataDirection, $dataResponsableDsi,
							$dataServiceAppliDsi, $dataEditeur,
							$dataTechnologie, $dataCompetence,
							$dataLangage, $dataLogiciel, $dataSgbd,
							$dataServeurWeb, $dataOs);
				}
				return array('list_Application' => $list_appli,'form' => $form->createView(),'obsolescence' => $obsolescence);
			}
		}
		//on recupere la liste des composants
		return array('list_Application' => $listApplication,'form' => $form->createView(),'obsolescence' => $obsolescence);
		
		
		
		
	}

	/**
	 * @Route("/rechercheAppli", name="_rechercheAppli")
	 * @Template()
	 * @Secure(roles="ROLE_USER")
	 */
	public function rechercheAppliAction() {
		// On r�cup�re le repository
		$repository = $this->getDoctrine()->getManager()
				->getRepository('melonRefappBundle:Application');

		// On r�cup�re toutes les appli
		$application = $repository->findAll();

		// On cr�e un objet de recherche
		$rechercheAppli = new RechercheAppli();

		//on cr�e et r�cup�re le formulaire
		$form = $this->createForm(new RechercheAppliType, $rechercheAppli);

		$request = $this->getRequest();

		if ($request->isMethod('POST')) {
			$form->bind($request);

			if ($form->isValid()) {

				$repositoryAppli = $this->getDoctrine()->getManager()
						->getRepository('melonRefappBundle:Application');

				$list_appli = $repositoryAppli->findAll();

				//objet rechercher appli
				//$data = $form->getData();

				//on r�cup�re tout les entit� (objet) soumise au fomulaire 
				$dataNom = $form->get('nom')->getData();
				$dataCode = $form->get('code')->getData();
				$dataDomaine = $form->get('domaine')->getData();
				$dataDirection = $form->get('direction')->getData();
				$dataResponsableDsi = $form->get('responsableDsi')->getData();
				$dataServiceAppliDsi = $form->get('serviceAppliDsi')->getData();
				$dataEditeur = $form->get('editeur')->getData();
				$dataTechnologie = $form->get('technologie')->getData();
				$dataCompetence = $form->get('competence')->getData();
				$dataLangage = $form->get('langage')->getData();
				$dataLogiciel = $form->get('logiciel')->getData();
				$dataSgbd = $form->get('sgbd')->getData();
				$dataServeurWeb = $form->get('serveurWeb')->getData();
				$dataOs = $form->get('os')->getData();

				if ($dataNom != NULL OR $dataCode != NULL
						OR $dataDomaine != NULL OR $dataDirection != NULL
						OR $dataResponsableDsi != NULL OR $dataOs != NULL
						OR $dataServiceAppliDsi != NULL
						OR $dataServeurWeb != NULL OR $dataSgbd != NULL
						OR $dataLogiciel != NULL OR $dataLangage != NULL
						OR $dataTechnologie != NULL OR $dataEditeur != NULL
						OR $dataCompetence != NULL) {

					//on cr�e un arrayCollection vide
					$list_appli = new \Doctrine\Common\Collections\ArrayCollection();

					$list_appli = $this->getDoctrine()->getManager()
							->getRepository('melonRefappBundle:Application')
							->search($dataNom, $dataCode, $dataDomaine,
									$dataDirection, $dataResponsableDsi,
									$dataServiceAppliDsi, $dataEditeur,
									$dataTechnologie, $dataCompetence,
									$dataLangage, $dataLogiciel, $dataSgbd,
									$dataServeurWeb, $dataOs);
				}

				return array('list_Application' => $list_appli,
						'form' => $form->createView());

			}
		}

		return array('list_Application' => $application,
				'form' => $form->createView());
	}
	
	/**
	 * @Route("/nouvelEditeur/{id}", name="_nouvelEditeur")
	 * @Template()
	 * @Secure(roles="ROLE_RESPONSABLE_APPLICATION")
	 */
	public function nouvelEditeurAction($id) {
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
				$this->get('session')->getFlashBag()->add('info', 'Editeur ajouté');
		
				// On redirige
				if ($id>0 ){//si on a deja sauvegardé l'application
					return $this->redirect($this->generateUrl('_modifierAppli',array('id' => $id)));
				}
				else{//si l'application est inexistante redirection vers une appli vierge
					return $this->redirect($this->generateUrl('_creerAppli'));
				}		
							}
		
		}
		return array('form' => $form->createView(),'id'=>$id);
		
	}
	
	/**
	 * @Route("/modifierAppli/{id}", name="_modifierAppli")
	 * @Template()
	 * @Secure(roles="ROLE_RESPONSABLE_APPLICATION")
	 */
	public function modifierAppliAction($id) {
		$application = $this->getDoctrine()
				->getRepository('melon\RefappBundle\Entity\Application')
				->find($id);

		//r�cup�ration du formulaire
		$form = $this->createForm(new ApplicationType, $application);

		// On r�cup�re la requ�te
		$request = $this->get('request');

		// On v�rifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// On fait le lien Requ�te <-> Formulaire
			// � partir de maintenant, la variable $application contient les valeurs entr�es dans le formulaire par le visiteur
			$form->bind($request);

			// On v�rifie que les valeurs entr�es sont correctes
			if ($form->isValid()) {
				// On l'enregistre notre objet $application dans la base de donn�es
				$em = $this->getDoctrine()->getManager();
				$applications =$application->getApplications();
				foreach ( $applications as $appli ){
					$rep = $this->getDoctrine()
					->getRepository('melon\RefappBundle\Entity\Application')
					->find($appli->getId());
					$rep->removeApplication($application);
					$rep->addApplication($application);
					
					$em->persist($rep);
				}
				$em->persist($application);
				$em->flush();
				//On redirige soit sur la fiche soit sur la modification si on fait simplement une sauvegarde
				$request  = $this->getRequest();
				$postData = $request->request->get('sauvegarder');
				if ($postData == 'Sauvegarder'){
					return $this->redirect($this->generateUrl('_modifierAppli',array('id' => $application->getId())));
				}else{
					// On redirige vers la page de visualisation de l'article nouvellement crée
					return $this->redirect($this->generateUrl('_ficheAppli',array('id' => $application->getId())));
				}
			}
		}

		return array('form' => $form->createView(), 'appli' => $application,'id'=>$id);
	}

	/**
	 * @Route("/supprimerAppli/{id}", name="_supprimerAppli")
	 * @Template()
	 * @Secure(roles="ROLE_ADMIN")
	 */
	public function supprimerAppliAction($id) {
		$application = $this->getDoctrine()
				->getRepository('melon\RefappBundle\Entity\Application')
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
				$applications =$application->getApplications();
				foreach ( $applications as $appli ){
					$rep = $this->getDoctrine()
					->getRepository('melon\RefappBundle\Entity\Application')
					->find($appli->getId());
					$rep->removeApplication($application);
					$em->persist($rep);
				}
				$em->remove($application);
				$em->flush();

				// On d�finit un message flash
				$this->get('session')->getFlashBag()
						->add('info', 'Application bien supprimé');

				// Puis on redirige vers l'accueil
				return $this->redirect($this->generateUrl('_listeAppli'));
			}
		}

		// Si la requête est en GET, on affiche une page de confirmation avant de supprimer
		return $this
				->render(
						'melonRefappBundle:Application:supprimerAppli.html.twig',
						array('application' => $application,
								'form' => $form->createView()));

	}

}
