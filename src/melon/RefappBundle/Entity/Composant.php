<?php

namespace melon\RefappBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\HttpFoundation\Response;

/**
 * Composant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="melon\RefappBundle\Entity\ComposantRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"os" = "Os", "serveurWeb" = "ServeurWeb", "sgbd" = "Sgbd", "logiciel" = "Logiciel", "langage" = "Langage"})
 */
class Composant
{
	//association bidirectionnel avec L'entit� application
	/**
	 * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\Application", mappedBy="composants")
	 */
	private $applications;
	
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime", nullable=true)
     * @Assert\DateTime(message="Le champ doit �tre un type datetime.")
     */
    private $dateFin;

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
     */
    private $type;
    
    /**
     * @var string
     * @ORM\Column(name="nomComplet", type="string", length=255, nullable=true)
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas un type {{ type }} valide.")
     */
    private $nomComplet;
    
    
    /**
     * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\Environnement", mappedBy="composants", cascade={"persist", "remove"})
     */
    private $environnements;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Composant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Composant
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    
        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return Composant
     */
    public function setVersion($version)
    {
        $this->version = $version;
    
        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }
    
 	/**
	* Set type
	*
	* @param string $type
	*/
	public function setType($type)
	{
		$this->type = $type;
	}
	
	/**
	* Get type
	*
	* @return string
	*/
	public function getType()
	{
		return $this->type;
	}
	
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->applications = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add applications
     *
     * @param \melon\RefappBundle\Entity\Application $applications
     * @return Composant
     */
    public function addApplication(\melon\RefappBundle\Entity\Application $applications)
    {
        $this->applications[] = $applications;
    
        return $this;
    }

    /**
     * Remove applications
     *
     * @param \melon\RefappBundle\Entity\Application $applications
     */
    public function removeApplication(\melon\RefappBundle\Entity\Application $applications)
    {
        $this->applications->removeElement($applications);
    }

    /**
     * Get applications
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getApplications()
    {
        return $this->applications;
    }
    
    /**
     * Get nomComplet
     *
     * @return integer
     */
    public function getNomComplet()
    {
    	return $this->nomComplet;
    }
    
    /**
     * Set nomComplet
     *
     * @param string $nomComplet
     * @return Composant
     */
    public function setNomComplet($nomComplet)
    {
    	$this->nomComplet = $nomComplet;
    
    	return $this;
    }
    
    /**
     * Add environnenents
     *
     * @param \melon\RefappBundle\Entity\Environnement $environnenents
     * @return Composant
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
     * Get Obsolescence
     *
     * @return \string
     */
    public function getObsolescence($nbMois1,$nbMois2,$nbMois3){
   

    	if($this->getDateFin()!=""){//Si la date est renseignée
    		 		//pour nbMois1
    		list($year, $month, $day) = explode('-', $this->getDateFin()->format("Y-m-d"));
    		if($nbMois1 >= 12){
    			$nbAn=(int)($nbMois1/12);
    			$nbMois1=($nbMois1)%12;
    			$alerte1 = mktime(0, 0, 0, $month-$nbMois1, $day, $year-$nbAn);
    		}
    		elseif($nbMois1<=0){
    			$alerte1 = mktime(0, 0, 0, $month+$nbMois1, $day, $year);
    		}
    		else{
    			$alerte1 = mktime(0, 0, 0, $month-$nbMois1, $day, $year);
    		}
    		//pour nbMois2
    		list($year, $month, $day) = explode('-', $this->getDateFin()->format("Y-m-d"));
    		if($nbMois2 >= 12){
    			$nbAn=(int)($nbMois2/12);
    			$nbMois2=($nbMois2)% 12;
    			$alerte2 = mktime(0, 0, 0, $month-$nbMois2, $day, $year-$nbAn);
    		}
    		elseif($nbMois2<=0){
    			$alerte2 = mktime(0, 0, 0, $month+$nbMois2, $day, $year);
    		}
    		else{
    			$alerte2 = mktime(0, 0, 0, $month-$nbMois2, $day, $year);
    		}
    		//pour $nbMois3
    		list($year, $month, $day) = explode('-',$this->getDateFin()->format("Y-m-d"));
    		if($nbMois3 >= 12){
    			$nbAn=(int)($nbMois3/12);
    			
    			$nbMois3=($nbMois3)%12;
    			
    			$alerte3 = mktime(0, 0, 0, $month-$nbMois3, $day, $year-$nbAn);
    		}
    		elseif($nbMois3<=0){
    			$alerte3 = mktime(0, 0, 0, $month+$nbMois3, $day, $year);
    		}
    		else{
    			$alerte3 = mktime(0, 0, 0, $month-$nbMois3, $day, $year);
    		}
    	
    		list($year, $month, $day) = explode('-', $this->getDateFin()->format("Y-m-d"));
    		$dateComp = mktime(0, 0, 0, $month, $day, $year);
    		// on envoie à la vu les résultats à la vue
    		
    		
    		$today ="now"|date("Y-m-d");
    		$year=$today|date('Y');
    		$month=$today|date('m');
    		$day=$today|date('d');
    		//On créer plusieurs dates (en timestamp) pour pouvoir les comparées après
    		list($year, $month, $day) = explode('-', date("Y-m-d"));
    		$now = mktime(0, 0, 0, $month, $day, $year); //Maintenant
    		//Transformation de la date en timestamp
    			if($now > $dateComp){ //Si composant deja obsolete
    				return 0;
    			}elseif($now > $alerte3 && $now < $alerte2){ //Si  dans moins de l'alerte3
    				return 1;	//Alerte Jaune
    			}elseif($now > $alerte2 && $now < $alerte1 ){ //Si dans moins de l'alerte2
    				return 3;	//Alerte Orange
    			}elseif($now > $alerte1 ){ //Si dans moins de l'alerte3
    				return 6;	//Alerte Rouge
   				}else{
    				return 9; // sinon il est a jour
    			}
    	}else{ //Si la date est pas renseignée, on dit que c'est pas obsolete
   			return -1;
    	}
    } 
    /**
     * Get CompareDateFinComposant
     *
     * @param \Composant $comp1, \Composant $comp2
     * @return \Composant
     */
    public function getCompareDateFinComposant(\melon\RefappBundle\Entity\Composant $comp1,\melon\RefappBundle\Entity\Composant $comp2){
    	if ($comp1->getDateFin()>$comp2->getDateFin()){
    		return $comp1;
    	}
    	else {
    		return $comp2;
    	}
    } 
    /**
     * Get ObsolescenceComposant
     *
     * @param \Composant 
     * @return \Composant
     */
    public function getObsolescenceComposant($composant){
    	/*foreach($composants as $composant){
    		$c = getCompareDateFinComposant($composant,$composants->next());
    	}*/
    	for($i= $composants->first()+1;i< $composants->last();$i++){
    	 $composant = getCompareDateFinComposant($composant,$composants->get($i));
    
    	}
    	return $composant;
    
    }
    
    
    
}