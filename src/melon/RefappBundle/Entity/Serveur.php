<?php

namespace melon\RefappBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Serveur
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="melon\RefappBundle\Entity\ServeurRepository")
 */
 class Serveur
{
	
  /**
   * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\Environnement", mappedBy="serveurs", cascade={"persist", "remove"})
   */
  private $environnements;
	
	//Attributs//
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
     * @ORM\Column(name="ip", type="string", length=255, nullable=false)
     * @Assert\Ip(message="Ip incorect.")
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="hostName", type="string", length=255, nullable=true)
     */
    private $hostname;

   /**
     * @ORM\Column(type="string", columnDefinition="ENUM('N/A', 'fichier', 'sgbd', 'applicatif', 'web')", nullable=true)
     */
    
    private $typeServeur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime", nullable=true)
     * @Assert\DateTime(message="Le champ doit être un type datetime.")
     */
    private $dateCreation;
    
    /**
 	 * @ORM\Column(name="emplacement", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Le champ emplacement doit contenir un nom valide.")
     */
    private $emplacement;

    //Getter et setter//
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
     * @return Serveur
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
     * Set ip
     *
     * @param string $ip
     * @return Serveur
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set hostname
     *
     * @param string $hostname
     * @return Serveur
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
    
        return $this;
    }

    /**
     * Get hostname
     *
     * @return string 
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Set typeServeur
     *
     * @param array $typeServeur
     * @return Serveur
     */
    public function setTypeServeur($typeServeur)
    {
        $this->typeServeur = $typeServeur;
    
        return $this;
    }

    /**
     * Get typeServeur
     *
     * @return array 
     */
    public function getTypeServeur()
    {
        return $this->typeServeur;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Serveur
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
    
    /**
     * 
     * Set emplacement
     *
     * @param string $emplacement
     * @return Serveur
     */
    public function setEmplacement($emplacement)
    {
    	$this->emplacement = $emplacement;
    
    	return $this;
    }
    
    /**
     * Get emplacement
     *
     * @return string
     */
    public function getEmplacement()
    {
    	return $this->emplacement;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->environnenents = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add environnements
     *
     * @param \melon\RefappBundle\Entity\Environnement $environnements
     * @return Serveur
     */
    public function addEnvironnement(\melon\RefappBundle\Entity\Environnement $environnements)
    {
        $this->environnements[] = $environnements;
    
        return $this;
    }

    /**
     * Remove environnements
     *
     * @param \melon\RefappBundle\Entity\Environnement $environnements
     */
    public function removeEnvironnement(\melon\RefappBundle\Entity\Environnement $environnements)
    {
        $this->environnements->removeElement($environnements);
    }

    /**
     * Get environnements
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEnvironnements()
    {
        return $this->environnements;
    }
}