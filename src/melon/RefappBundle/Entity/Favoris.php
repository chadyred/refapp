<?php

namespace melon\RefappBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favoris
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="melon\RefappBundle\Entity\FavorisRepository")
 */
class Favoris
{
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbConsultation", type="integer")
     */
    private $nbConsultation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date")
     */
    private $dateCreation;
    /**
     * @var string
     *
     * @ORM\Column(name="chemin", type="string", length=255)
     */
    private $chemin;
    /**
     * @var string
     *
     * @ORM\Column(name="parametre", type="string", length=255)
     */
    private $parametre;

    /**
     * @var string
     *
     * @ORM\Column(name="resultat", type="string", length=255)
     */
    private $resultat;

	/**
	 *@ORM\ManyToOne(targetEntity="melon\RefappBundle\Entity\ResponsableDsi", inversedBy="favoris", cascade={"persist"})
	 */ 
    private $proprietaire;
    
    /**
     * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\ResponsableDsi", inversedBy="favoris", cascade={"persist"})
     */
    private $utilisateur;
    
    /**
     * Constructor
     */
    public function __construct() {
    	$this->utilisateur= new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * @return Favoris
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
     * Set nbConsultation
     *
     * @param integer $nbConsultation
     * @return Favoris
     */
    public function setNbConsultation($nbConsultation)
    {
        $this->nbConsultation = $nbConsultation;
    
        return $this;
    }

    /**
     * Get nbConsultation
     *
     * @return integer 
     */
    public function getNbConsultation()
    {
        return $this->nbConsultation;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Favoris
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
     * Set chemin
     *
     * @param string $chemin
     * @return Favoris
     */
    public function setChemin($chemin)
    {
    	$this->chemin =$chemin;
    
    	return $this;
    }
    
    /**
     * Get chemin
     *
     * @return string
     */
    public function getChemin()
    {
    	return $this->chemin;
    }
    /**
     * Set parametre
     *
     * @param string $parametre
     * @return Favoris
     */
    public function setParametre($parametre)
    {
    	$this->parametre = $parametre;
    
    	return $this;
    }
    
    /**
     * Get parametre
     *
     * @return string
     */
    public function getParametre()
    {
    	return $this->parametre;
    }
    

    /**
     * Set resultat
     *
     * @param string $resultat
     * @return Favoris
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;
    
        return $this;
    }

    /**
     * Get resultat
     *
     * @return string 
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set proprietaire
     *
     * @param string $proprietaire
     * @return Favoris
     */
    public function setProprietaire(\melon\RefappBundle\Entity\ResponsableDsi $proprietaire)
    {
        $this->proprietaire = $proprietaire;
    
        return $this;
    }

    /**
     * Get proprietaire
     *
     * @return \melon\RefappBundle\Entity\ResponsableDsi 
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }
    
    /**
     * Add utilisateur
     *
     * @param \melon\RefappBundle\Entity\ResponsableDsi $responsablesDsi
     * @return Favoris
     */
    public function addUtilisateur(
    		\melon\RefappBundle\Entity\ResponsableDsi $responsablesDsi) {
    	$this->utilisateur[] = $responsablesDsi;
    
    	return $this;
    }
    
    /**
     * Remove utilisateur
     *
     * @param \melon\RefappBundle\Entity\ResponsableDsi $responsablesDsi
     */
    public function removeUtilisateur(
    		\melon\RefappBundle\Entity\ResponsableDsi $responsablesDsi) {
    	$this->utilisateur->removeElement($responsablesDsi);
    }
    
    /**
     * Get utilisateur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUtilisateur() {
    	return $this->utilisateur;
    }
}
