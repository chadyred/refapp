<?php

namespace melon\RefappBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Technologie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="melon\RefappBundle\Entity\TechnologieRepository")
 */
class Technologie
{
	//association bidirectionnel avec L'entit้ application
	/**
	 * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\Application", mappedBy="technologies")
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
     * @return Technologie
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
     * @return Technologie
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
}