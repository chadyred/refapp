<?php

namespace melon\RefappBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Environnement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="melon\RefappBundle\Entity\EnvironnementRepository")
 */
class Environnement
{
	
	/**
	 * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\Application", mappedBy="environnements", cascade={"persist"})
	 */
	private $applications;
	
	/**
	 * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\Serveur", inversedBy="environnements", cascade={"persist"})
	 */
	private $serveurs; 
	
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
     * @ORM\Column(type="string", columnDefinition="ENUM('Production', 'Développement', 'Recette')", nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="repertoire", type="string", length=255, nullable=true)
     */
    private $repertoire;

    /**
     * @var string
     *
     * @ORM\Column(name="nomInstance", type="string", length=255, nullable=true)
     */
    private $nomInstance;

    /**
     * @var string
     *
     * @ORM\Column(name="utilisateurBdd", type="string", length=255, nullable=true)
     */
    private $utilisateurBdd;

    /**
     * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\Composant", inversedBy="environnements", cascade={"persist", "remove"})
     */
    private $composants;

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
     * @return Environnement
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
     * Set repertoire
     *
     * @param string $repertoire
     * @return Environnement
     */
    public function setRepertoire($repertoire)
    {
        $this->repertoire = $repertoire;
    
        return $this;
    }

    /**
     * Get repertoire
     *
     * @return string 
     */
    public function getRepertoire()
    {
        return $this->repertoire;
    }

    /**
     * Set nomInstance
     *
     * @param string $nomInstance
     * @return Environnement
     */
    public function setNomInstance($nomInstance)
    {
        $this->nomInstance = $nomInstance;
    
        return $this;
    }

    /**
     * Get nomInstance
     *
     * @return string 
     */
    public function getNomInstance()
    {
        return $this->nomInstance;
    }

    /**
     * Set utilisateurBdd
     *
     * @param string $utilisateurBdd
     * @return Environnement
     */
    public function setUtilisateurBdd($utilisateurBdd)
    {
        $this->utilisateurBdd = $utilisateurBdd;
    
        return $this;
    }

    /**
     * Get utilisateurBdd
     *
     * @return string 
     */
    public function getUtilisateurBdd()
    {
        return $this->utilisateurBdd;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->serveurs = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add applications
     *
     * @param \melon\RefappBundle\Entity\Application $applications
     * @return Environnement
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
     * Add serveurs
     *
     * @param \melon\RefappBundle\Entity\Serveur $serveurs
     * @return Environnement
     */
    public function addServeur(\melon\RefappBundle\Entity\Serveur $serveurs)
    {
        $this->serveurs[] = $serveurs;
        $serveurs->addEnvironnement($this);

        return $this;
    }

    /**
     * Remove serveurs
     *
     * @param \melon\RefappBundle\Entity\Serveur $serveurs
     */
    public function removeServeur(\melon\RefappBundle\Entity\Serveur $serveurs)
    {
        $this->serveurs->removeElement($serveurs);
    }

    /**
     * Get serveurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getServeurs()
    {
        return $this->serveurs;
    }
    
   /* /**
     * Set serveur
     *
     * @param \melon\RefappBundle\Entity\Serveur $serveurs
     * @return Environnement
     */
    /*public function setServeurs(\melon\RefappBundle\Entity\Serveur $serveurs = null)
    {
    	$this->serveur = $serveurs;

    	return $this;
    }*/
    
    /**
     * Add composants
     *
     * @param \melon\RefappBundle\Entity\Composant $composants
     * @return Environnement
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
    
    
}