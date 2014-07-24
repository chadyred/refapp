<?php

namespace melon\RefappBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Application
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="melon\RefappBundle\Entity\ApplicationRepository")
 */
class Application {

	// attributs //
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */

	private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="nom", type="string", length=255, nullable=false)
	 * @Assert\NotBlank(message="Le champ nom doit contenir un nom valide.")
	 */
	private $nom;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="code", type="string", length=255, nullable=false)
	 * @Assert\NotBlank(message="Le champ code doit contenir un code valide.")
	 */
	private $code;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="version", type="string", length=255, nullable=true)
	 * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas un type {{ type }} valide.")
	 */
	private $version;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="periodeCritique", type="string", length=255, nullable=true)
	 */
	private $periodeCritique;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="dossierCnil", type="boolean", nullable=true)
	 */
	private $dossierCnil;

	/**
	 * @var \datetime $dateCreationDossierCnil
	 *
	 * @ORM\Column(name="dateCreationDossierCnil", type="datetime", nullable=true)
	 * @Assert\DateTime(message="Le champ doit être un champ de type datetime.")
	 */
	private $dateCreationDossierCnil;

	/**
	 * @var datetime $dateMiseEnOeuvre
	 
	 * @ORM\Column(name="dateMiseEnOeuvre", type="datetime", nullable=true)
	 * @Assert\DateTime(message="Le champ doit être un champ de type datetime.")
	 */
	private $dateMiseEnOeuvre;

	/**
	 * @var dateTime $dateDerniereMiseAJour
	 *
	 * @ORM\Column(name="dateDerniereMiseAJour", type="datetime", nullable=true)
	 * @Assert\DateTime(message="Le champ doit être un champ de type datetime.")
	 */
	private $dateDerniereMiseAJour;
	
	/**
	 * @var datetime $dateFinDeVie
	 *
	 * @ORM\Column(name="dateFinDeVie", type="datetime", nullable=true)
	 * @Assert\DateTime(message="Le champ doit être un champ de type datetime.")
	 */
	private $dateFinDeVie;

	/**
	 * @ORM\Column(type="string", columnDefinition="ENUM('N/A', '32bits', '64bits', '32/64bits')", nullable=false)
	 */
	private $compatibilite;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="objet", type="string", length=255, nullable=true)
	 */
	private $objet;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="fonctionPrincipal", type="string", length=255, nullable=true)
	 */
	private $fonctionPrincipal;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="famille", type="string", columnDefinition="ENUM('N/A', '1-PIV', '2-ASP', '3-ACE','4-ACW','5-ATI','6-ADI','7-SIG')", nullable=true)
	 * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas un type {{ type }} valide.")
	 */
	private $famille;

	/**
	 * @ORM\Column(type="string", columnDefinition="ENUM('N/A', 'batch', 'tempsReel', 'batch/tempReel')", nullable=false)
	 */
	private $traitementDonnee;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="donneeFederale", type="boolean", nullable=true)
	 */
	private $donneeFederale;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="exterieurCg", type="boolean", nullable=true)
	 */
	private $exterieurCg;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="nbUtilisateur", type="string", length=255, nullable=true)
	 */
	private $nbUtilisateur;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="administrateurFonctionnel", type="string", length=255, nullable=true)
	 * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas un type {{ type }} valide.")
	 */
	private $administrateurFonctionnel;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="commentaire", type="text", nullable=true)
	 */
	private $commentaire;

	// OneToOne //
	/**
	 * @ORM\OneToOne(targetEntity="melon\RefappBundle\Entity\Marche", cascade={"persist", "remove"})
	 */ 
	private $marche;

	// ManyToOne //
	/**
         *  @ORM\ManyToOne(targetEntity="melon\RefappBundle\Entity\Domaine", inversedBy="applications", cascade={"persist"})
	 */
	private $domaine;

	/** @ORM\ManyToOne(targetEntity="melon\RefappBundle\Entity\Editeur", inversedBy="applications", cascade={"persist"})
	 */ 
	private $editeur;

	// ManyToMany //
	/**
	 * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\Direction", inversedBy="applications", cascade={"persist"})
	 */
	private $directions;

	/**
	 * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\ResponsableDsi", inversedBy="applications", cascade={"persist"})
	 */
	private $responsablesDsi;

	/**
	 * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\ServiceAppliDsi", inversedBy="applications", cascade={"persist"})
	 */
	private $servicesAppliDsi;

	/**
	 * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\Technologie", inversedBy="applications", cascade={"persist"})
	 */
	private $technologies;

	/**
	 * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\Composant", inversedBy="applications", cascade={"persist"})
	 */
	private $composants;

	/**
	 * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\Environnement",inversedBy="applications", cascade={"persist"})
	 */
	private $environnements;

	/**
	 * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\Competence", inversedBy="applications", cascade={"persist"})
	 */
	private $competences;

	/** @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\Documentation", cascade={"persist", "remove"})
	 */
	private $documentations;
	
	/**
	 * @ORM\ManyToMany(targetEntity="Application", inversedBy="applications",cascade={"persist"})
	 * @ORM\JoinTable(name="application_application",
	 *      joinColumns={@ORM\JoinColumn(name="application_leftSide_id", referencedColumnName="id")},
	 *      inverseJoinColumns={@ORM\JoinColumn(name="application_rightSide_id", referencedColumnName="id")}
	 *      )
	 */
	private $applications;

	// Getter et setter //
	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set nom
	 *
	 * @param string $nom
	 * @return Application
	 */
	public function setNom($nom) {
		$this->nom = $nom;

		return $this;
	}

	/**
	 * Get nom
	 *
	 * @return string 
	 */
	public function getNom() {
		return $this->nom;
	}

	/**
	 * Set code
	 *
	 * @param string $code
	 * @return Application
	 */
	public function setCode($code) {
		$this->code = $code;

		return $this;
	}

	/**
	 * Get code
	 *
	 * @return string 
	 */
	public function getCode() {
		return $this->code;
	}

	/**
	 * Set version
	 *
	 * @param string $version
	 * @return Application
	 */
	public function setVersion($version) {
		$this->version = $version;

		return $this;
	}

	/**
	 * Get version
	 *
	 * @return string 
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * Set periodeCritique
	 *
	 * @param string $periodeCritique
	 * @return Application
	 */
	public function setPeriodeCritique($periodeCritique) {
		$this->periodeCritique = $periodeCritique;

		return $this;
	}

	/**
	 * Get periodeCritique
	 *
	 * @return string 
	 */
	public function getPeriodeCritique() {
		return $this->periodeCritique;
	}

	/**
	 * Set dossierCnil
	 *
	 * @param boolean $dossierCnil
	 * @return Application
	 */
	public function setDossierCnil($dossierCnil) {
		$this->dossierCnil = $dossierCnil;

		return $this;
	}

	/**
	 * Get dossierCnil
	 *
	 * @return boolean 
	 */
	public function getDossierCnil() {
		return $this->dossierCnil;
	}

	/**
	 * Set dateCreationDossierCnil
	 *
	 * @param \DateTime $dateCreationDossierCnil
	 * @return Application
	 */
	public function setDateCreationDossierCnil($dateCreationDossierCnil) {
		$this->dateCreationDossierCnil = $dateCreationDossierCnil;

		return $this;
	}

	/**
	 * Get dateCreationDossierCnil
	 *
	 * @return \DateTime 
	 */
	public function getDateCreationDossierCnil() {
		return $this->dateCreationDossierCnil;
	}

	/**
	 * Set dateMiseEnOeuvre
	 *
	 * @param \DateTime $dateMiseEnOeuvre
	 * @return Application
	 */
	public function setDateMiseEnOeuvre($dateMiseEnOeuvre) {
		$this->dateMiseEnOeuvre = $dateMiseEnOeuvre;

		return $this;
	}

	/**
	 * Get dateMiseEnOeuvre
	 *
	 * @return \DateTime 
	 */
	public function getDateMiseEnOeuvre() {
		return $this->dateMiseEnOeuvre;
	}

	/**
	 * Set dateDerniereMiseAJour
	 *
	 * @param \DateTime $dateDerniereMiseAJour
	 * @return Application
	 */
	public function setDateDerniereMiseAJour($dateDerniereMiseAJour) {
		$this->dateDerniereMiseAJour = $dateDerniereMiseAJour;

		return $this;
	}

	/**
	 * Get dateDerniereMiseAJour
	 *
	 * @return \DateTime 
	 */
	public function getDateDerniereMiseAJour() {
		return $this->dateDerniereMiseAJour;
	}
	
	/**
	 * Set dateFinDeVie
	 *
	 * @param \DateTime $dateFinDeVie
	 * @return Application
	 */
	public function setDateFinDeVie($dateFinDeVie) {
		$this->dateFinDeVie = $dateFinDeVie;
	
		return $this;
	}
	
	/**
	 * Get dateFinDeVie
	 *
	 * @return \DateTime
	 */
	public function getDateFinDeVie() {
		return $this->dateFinDeVie;
	}
	
	/**
	 * Get EnFinDeVie
	 *
	 * @return \int
	 */
	public function EnFinDeVie(){
	
		$today ="now"|date("Y-m-d");
		$year=$today|date('Y');
		$month=$today|date('m');
		$day=$today|date('d');
		//On créer plusieurs dates (en timestamp) pour pouvoir les comparées après
		list($year, $month, $day) = explode('-', date("Y-m-d"));
		$now = mktime(0, 0, 0, $month, $day, $year); //Maintenant
		if($this->getDateFinDeVie()!=""){//Si la date est renseignée
			//Transformation de la date en timestamp
			list($year, $month, $day) = explode('-', $this->getDateFinDeVie()->format("Y-m-d"));
			$dateComp = mktime(0, 0, 0, $month, $day, $year);
			if($dateComp < $now){ //Si composant déjà obsolete
				return 1;
			}else{
				return 0;
			}
		}else{ //Si la date est pas renseignée, on dit que c'est pas obsolete
			return 0;
		}
	}
	
	/**
	 * Set compatibilite
	 *
	 * @param array $compatibilite
	 * @return Application
	 */
	public function setCompatibilite($compatibilite) {
		$this->compatibilite = $compatibilite;

		return $this;
	}

	/**
	 * Get compatibilite
	 *
	 * @return array 
	 */
	public function getCompatibilite() {
		return $this->compatibilite;
	}

	/**
	 * Set objet
	 *
	 * @param string $objet
	 * @return Application
	 */
	public function setObjet($objet) {
		$this->objet = $objet;

		return $this;
	}

	/**
	 * Get objet
	 *
	 * @return string 
	 */
	public function getObjet() {
		return $this->objet;
	}

	/**
	 * Set fonctionPrincipal
	 *
	 * @param string $fonctionPrincipal
	 * @return Application
	 */
	public function setFonctionPrincipal($fonctionPrincipal) {
		$this->fonctionPrincipal = $fonctionPrincipal;

		return $this;
	}

	/**
	 * Get fonctionPrincipal
	 *
	 * @return string 
	 */
	public function getFonctionPrincipal() {
		return $this->fonctionPrincipal;
	}

	/**
	 * Set famille
	 *
	 * @param string $famille
	 * @return Application
	 */
	public function setFamille($famille) {
		$this->famille = $famille;

		return $this;
	}

	/**
	 * Get famille
	 *
	 * @return string
	 */
	public function getFamille() {
		return $this->famille;
	}

	/**
	 * Set traitementDonnee
	 *
	 * @param array $traitementDonnee
	 * @return Application
	 */
	public function setTraitementDonnee($traitementDonnee) {
		$this->traitementDonnee = $traitementDonnee;

		return $this;
	}

	/**
	 * Get traitementDonnee
	 *
	 * @return array 
	 */
	public function getTraitementDonnee() {
		return $this->traitementDonnee;
	}

	/**
	 * Set donneeFederale
	 *
	 * @param boolean $donneeFederale
	 * @return Application
	 */
	public function setDonneeFederale($donneeFederale) {
		$this->donneeFederale = $donneeFederale;

		return $this;
	}

	/**
	 * Get donneeFederale
	 *
	 * @return boolean 
	 */
	public function getDonneeFederale() {
		return $this->donneeFederale;
	}

	/**
	 * Set exterieurCg
	 *
	 * @param boolean $exterieurCg
	 * @return Application
	 */
	public function setExterieurCg($exterieurCg) {
		$this->exterieurCg = $exterieurCg;

		return $this;
	}

	/**
	 * Get exterieurCg
	 *
	 * @return boolean 
	 */
	public function getExterieurCg() {
		return $this->exterieurCg;
	}

	/**
	 * Set nbUtilisateur
	 *
	 * @param string $nbUtilisateur
	 * @return Application
	 */
	public function setNbUtilisateur($nbUtilisateur) {
		$this->nbUtilisateur = $nbUtilisateur;

		return $this;
	}

	/**
	 * Get nbUtilisateur
	 *
	 * @return string 
	 */
	public function getNbUtilisateur() {
		return $this->nbUtilisateur;
	}

	/**
	 * Set administrateurFonctionnel
	 *
	 * @param string $administrateurFonctionnel
	 * @return Application
	 */
	public function setAdministrateurFonctionnel($administrateurFonctionnel) {
		$this->administrateurFonctionnel = $administrateurFonctionnel;

		return $this;
	}

	/**
	 * Get administrateurFonctionnel
	 *
	 * @return string 
	 */
	public function getAdministrateurFonctionnel() {
		return $this->administrateurFonctionnel;
	}

	/**
	 * Set commentaire
	 *
	 * @param string $commentaire
	 * @return Application
	 */
	public function setCommentaire($commentaire) {
		$this->commentaire = $commentaire;

		return $this;
	}

	/**
	 * Get commentaire
	 *
	 * @return string 
	 */
	public function getCommentaire() {
		return $this->commentaire;
	}

	/**
	 * Set marche
	 *
	 * @param \melon\RefappBundle\Entity\Marche $marche
	 * @return Application
	 */
	public function setMarche(\melon\RefappBundle\Entity\Marche $marche = null) {
		$this->marche = $marche;

		return $this;
	}

	/**
	 * Get marche
	 *
	 * @return \melon\RefappBundle\Entity\Marche 
	 */
	public function getMarche() {
		return $this->marche;
	}

	/**
	 * Set editeur
	 *
	 * @param \melon\RefappBundle\Entity\Editeur $editeur
	 * @return Application
	 */
	public function setEditeur(\melon\RefappBundle\Entity\Editeur $editeur) {
		$this->editeur = $editeur;

		return $this;
	}

	/**
	 * Get editeur
	 *
	 * @return \melon\RefappBundle\Entity\Editeur 
	 */
	public function getEditeur() {
		return $this->editeur;
	}

	/**
	 * Set domaine
	 *
	 * @param \melon\RefappBundle\Entity\Domaine $domaine
	 * @return Application
	 */
	public function setDomaine(\melon\RefappBundle\Entity\Domaine $domaine) {
		$this->domaine = $domaine;
		$domaine->addApplication($this);

		return $this;
	}

	/**
	 * Get domaine
	 *
	 * @return \melon\RefappBundle\Entity\Domaine 
	 */
	public function getDomaine() {
		return $this->domaine;
	}
	/**
	 * Constructor
	 */
	public function __construct() {
		$this->directions = new \Doctrine\Common\Collections\ArrayCollection();
		$this->responsablesDsi = new \Doctrine\Common\Collections\ArrayCollection();
		$this->servicesAppliDsi = new \Doctrine\Common\Collections\ArrayCollection();
		$this->technologies = new \Doctrine\Common\Collections\ArrayCollection();
		$this->composants = new \Doctrine\Common\Collections\ArrayCollection();
		$this->environnenents = new \Doctrine\Common\Collections\ArrayCollection();
		$this->competences = new \Doctrine\Common\Collections\ArrayCollection();
		$this->applications = new \Doctrine\Common\Collections\ArrayCollection();
		$this->dateDerniereMiseAJour = new \Datetime();
		$this->dateFinDeVie = new \DateTime();
		$this->dateMiseEnOeuvre = new \Datetime();
		$this->dossierCnil = true;
	}

	/**
	 * Add directions
	 *
	 * @param \melon\RefappBundle\Entity\Direction $directions
	 * @return Application
	 */
	public function addDirection(
			\melon\RefappBundle\Entity\Direction $directions) {
		$this->directions[] = $directions;

		return $this;
	}

	/**
	 * Remove directions
	 *
	 * @param \melon\RefappBundle\Entity\Direction $directions
	 */
	public function removeDirection(
			\melon\RefappBundle\Entity\Direction $directions) {
		$this->directions->removeElement($directions);
	}

	/**
	 * Get directions
	 *
	 * @return \Doctrine\Common\Collections\Collection 
	 */
	public function getDirections() {
		return $this->directions;
	}

	/**
	 * Add responsablesDsi
	 *
	 * @param \melon\RefappBundle\Entity\ResponsableDsi $responsablesDsi
	 * @return Application
	 */
	public function addResponsablesDsi(
			\melon\RefappBundle\Entity\ResponsableDsi $responsablesDsi) {
		$this->responsablesDsi[] = $responsablesDsi;

		return $this;
	}

	/**
	 * Remove responsablesDsi
	 *
	 * @param \melon\RefappBundle\Entity\ResponsableDsi $responsablesDsi
	 */
	public function removeResponsablesDsi(
			\melon\RefappBundle\Entity\ResponsableDsi $responsablesDsi) {
		$this->responsablesDsi->removeElement($responsablesDsi);
	}

	/**
	 * Get responsablesDsi
	 *
	 * @return \Doctrine\Common\Collections\Collection 
	 */
	public function getResponsablesDsi() {
		return $this->responsablesDsi;
	}

	/**
	 * Add servicesAppliDsi
	 *
	 * @param \melon\RefappBundle\Entity\ServiceAppliDsi $servicesAppliDsi
	 * @return Application
	 */
	public function addServicesAppliDsi(
			\melon\RefappBundle\Entity\ServiceAppliDsi $servicesAppliDsi) {
		$this->servicesAppliDsi[] = $servicesAppliDsi;

		return $this;
	}

	/**
	 * Remove servicesAppliDsi
	 *
	 * @param \melon\RefappBundle\Entity\ServiceAppliDsi $servicesAppliDsi
	 */
	public function removeServicesAppliDsi(
			\melon\RefappBundle\Entity\ServiceAppliDsi $servicesAppliDsi) {
		$this->servicesAppliDsi->removeElement($servicesAppliDsi);
	}

	/**
	 * Get servicesAppliDsi
	 *
	 * @return \Doctrine\Common\Collections\Collection 
	 */
	public function getServicesAppliDsi() {
		return $this->servicesAppliDsi;
	}

	/**
	 * Add technologies
	 *
	 * @param \melon\RefappBundle\Entity\Technologie $technologies
	 * @return Application
	 */
	public function addTechnologie(
			\melon\RefappBundle\Entity\Technologie $technologies) {
		$this->technologies[] = $technologies;

		return $this;
	}

	/**
	 * Remove technologies
	 *
	 * @param \melon\RefappBundle\Entity\Technologie $technologies
	 */
	public function removeTechnologie(
			\melon\RefappBundle\Entity\Technologie $technologies) {
		$this->technologies->removeElement($technologies);
	}

	/**
	 * Get technologies
	 *
	 * @return \Doctrine\Common\Collections\Collection 
	 */
	public function getTechnologies() {
		return $this->technologies;
	}

	/**
	 * Add composants
	 *
	 * @param \melon\RefappBundle\Entity\Composant $composants
	 * @return Application
	 */
	public function addComposant(
			\melon\RefappBundle\Entity\Composant $composants) {
		$this->composants[] = $composants;

		return $this;
	}

	/**
	 * Remove composants
	 *
	 * @param \melon\RefappBundle\Entity\Composant $composants
	 */
	public function removeComposant(
			\melon\RefappBundle\Entity\Composant $composants) {
		$this->composants->removeElement($composants);
	}

	/**
	 * Get composants
	 *
	 * @return \Doctrine\Common\Collections\Collection 
	 */
	public function getComposants() {
		return $this->composants;
	}

	/**
	 * Add environnenents
	 *
	 * @param \melon\RefappBundle\Entity\Environnement $environnenents
	 * @return Application
	 */
	public function addEnvironnenent(
			\melon\RefappBundle\Entity\Environnement $environnenents) {
		$this->environnenents[] = $environnenents;

		return $this;
	}

	/**
	 * Remove environnenents
	 *
	 * @param \melon\RefappBundle\Entity\Environnement $environnenents
	 */
	public function removeEnvironnenent(
			\melon\RefappBundle\Entity\Environnement $environnenents) {
		$this->environnenents->removeElement($environnenents);
	}

	/**
	 * Get environnenents
	 *
	 * @return \Doctrine\Common\Collections\Collection 
	 */
	public function getEnvironnenents() {
		return $this->environnenents;
	}

	/**
	 * Add competences
	 *
	 * @param \melon\RefappBundle\Entity\Competence $competences
	 * @return Application
	 */
	public function addCompetence(
			\melon\RefappBundle\Entity\Competence $competences) {
		$this->competences[] = $competences;

		return $this;
	}

	/**
	 * Remove competences
	 *
	 * @param \melon\RefappBundle\Entity\Competence $competences
	 */
	public function removeCompetence(
			\melon\RefappBundle\Entity\Competence $competences) {
		$this->competences->removeElement($competences);
	}

	/**
	 * Get competences
	 *
	 * @return \Doctrine\Common\Collections\Collection 
	 */
	public function getCompetences() {
		return $this->competences;
	}

	/**
	 * Set documentations
	 *
	 * @param \melon\RefappBundle\Entity\Documentation $documentations
	 * @return Application
	 */
	public function setDocumentations(
			\melon\RefappBundle\Entity\Documentation $documentations = null) {
		$this->documentations = $documentations;

		return $this;
	}

	/**
	 * Get documentations
	 *
	 * @return \melon\RefappBundle\Entity\Documentation 
	 */
	public function getDocumentations() {
		return $this->documentations;
	}

	/**
	 * Add documentations
	 *
	 * @param \melon\RefappBundle\Entity\Documentation $documentations
	 * @return Application
	 */
	public function addDocumentation(
			\melon\RefappBundle\Entity\Documentation $documentations) {
		$this->documentations[] = $documentations;

		return $this;
	}

	/**
	 * Remove documentations
	 *
	 * @param \melon\RefappBundle\Entity\Documentation $documentations
	 */
	public function removeDocumentation(
			\melon\RefappBundle\Entity\Documentation $documentations) {
		$this->documentations->removeElement($documentations);
	}

	/**
	 * Add environnements
	 *
	 * @param \melon\RefappBundle\Entity\Environnement $environnements
	 * @return Application
	 */
	public function addEnvironnement(
			\melon\RefappBundle\Entity\Environnement $environnements) {
		$this->environnements[] = $environnements;

		return $this;
	}

	/**
	 * Remove environnements
	 *
	 * @param \melon\RefappBundle\Entity\Environnement $environnements
	 */
	public function removeEnvironnement(
			\melon\RefappBundle\Entity\Environnement $environnements) {
		$this->environnements->removeElement($environnements);
	}

	/**
	 * Get environnements
	 *
	 * @return \Doctrine\Common\Collections\Collection 
	 */
	public function getEnvironnements() {
		return $this->environnements;
	}
	
	/**
	 * Add applications
	 *
	 * @param \melon\RefappBundle\Entity\Environnement $thiscations
	 * @return Application
	 */
	public function addApplication(
			\melon\RefappBundle\Entity\Application $applications) {
		$this->applications[] = $applications;
	
		return $this;
	}
	/**
	 * Remove applications
	 *
	 * @param \melon\RefappBundle\Entity\Application $applications
	 */
	public function removeApplication(
			\melon\RefappBundle\Entity\Application $applications) {
		$this->applications->removeElement($applications);
	}
	
	/**
	 * Get applications
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getApplications() {
		return $this->applications;
	}
	
	public function AppliComplete(){	//retourne vrai si les champs spécifié de l'appli ne sont pas complétés
		if ($this->getNom()!="" && $this->getCode()!="" && $this->getCompatibilite()!="" && $this->getFonctionPrincipal()!="" && $this->getDirections()!=NULL && $this->getResponsablesDsi()!=NULL && $this->getServicesAppliDsi()!=NULL && $this->getEditeur()!=NULL && $this->getComposants()!=NULL && $this->getEnvironnements()!=NULL && $this->getDocumentations()!=NULL && $this->getCompetences()!=NULL )
		{
			return true;
		}
		else
		{return false;
		}
	}
	
	
}
