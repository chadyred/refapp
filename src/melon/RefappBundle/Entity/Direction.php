<?php

namespace melon\RefappBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Direction
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="melon\RefappBundle\Entity\DirectionRepository")
 */
class Direction
{
	/**
	 * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\Application", mappedBy="directions")
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false, nullable=false)
     * @Assert\NotBlank(message="Le champ nom doit contenir un nom valide.")
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas un type {{ type }} valide.")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="correspondantInformatique", type="string", length=255, nullable=true)
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas un type {{ type }} valide.")
     */
    private $correspondantInformatique;


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
     * @return Direction
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
     * Set correspondantInformatique
     *
     * @param string $correspondantInformatique
     * @return Direction
     */
    public function setCorrespondantInformatique($correspondantInformatique)
    {
        $this->correspondantInformatique = $correspondantInformatique;
    
        return $this;
    }

    /**
     * Get correspondantInformatique
     *
     * @return string 
     */
    public function getCorrespondantInformatique()
    {
        return $this->correspondantInformatique;
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
     * @return Direction
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