<?php

namespace melon\RefappBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Editeur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="melon\RefappBundle\Entity\EditeurRepository")
 */
class Editeur
{
	
	//association bidirectionnel avec L'entité application
	/**
	 * @ORM\OneToMany(targetEntity="melon\RefappBundle\Entity\Application", mappedBy="editeur")
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
     * @var string
     *
     * @ORM\Column(name="numtel", type="string", length=255, nullable=true)
     * @Assert\Type(type="numeric", message="La valeur {{ value }} n'est pas un type {{ type }} valide.")
     * @Assert\MinLength(10)
     */
    private $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=255, nullable=true)
     */
    private $numero;
    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string",length=255, nullable=true)
     */
    private $rue;
    /**
     * @var string
     *
     * @ORM\Column(name="codepostal", type="integer", nullable=true)
     */
    private $codepostal;
    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=true)
     * @Assert\Email(message="L'email est incorect.")
     */
   
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="responsableTechnique", type="string", length=255, nullable=true)
     * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas un type {{ type }} valide.")
     */
    private $responsableTechnique;

    /**
     * @var string
     *
     * @ORM\Column(name="responsableApplication", type="string", length=255, nullable=true)
     */
    private $responsableApplication;


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
     * @return Editeur
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
     * Set numtel
     *
     * @param string $numtel
     * @return Editeur
     */
    public function setNumtel($numtel)
    {
        $this->numtel = $numtel;
    
        return $this;
    }

    /**
     * Get numtel
     *
     * @return string 
     */
    public function getNumtel()
    {
        return $this->numtel;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Editeur
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }
    
    /**
     * Set rue
     *
     * @param string $rue
     * @return Editeur
     */
    public function setRue($rue)
    {
    	$this->rue = $rue;
    
    	return $this;
    }
    
    /**
     * Get rue
     *
     * @return string
     */
    public function getRue()
    {
    	return $this->rue;
    }
    
    /**
     * Set codepostal
     *
     * @param integer $codepostal
     * @return Editeur
     */
    public function setCodepostal($codepostal)
    {
    	$this->codepostal = $codepostal;
    
    	return $this;
    }
    
    /**
     * Get codepostal
     *
     * @return string
     */
    public function getCodepostal()
    {
    	return $this->codepostal;
    }
    
    /**
     * Set ville
     *
     * @param string $adresse
     * @return Editeur
     */
    public function setVille($ville)
    {
    	$this->ville = $ville;
    
    	return $this;
    }
    
    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
    	return $this->ville;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Editeur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set responsableTechnique
     *
     * @param string $responsableTechnique
     * @return Editeur
     */
    public function setResponsableTechnique($responsableTechnique)
    {
        $this->responsableTechnique = $responsableTechnique;
    
        return $this;
    }

    /**
     * Get responsableTechnique
     *
     * @return string 
     */
    public function getResponsableTechnique()
    {
        return $this->responsableTechnique;
    }

    /**
     * Set responsableApplication
     *
     * @param string $responsableApplication
     * @return Editeur
     */
    public function setResponsableApplication($responsableApplication)
    {
        $this->responsableApplication = $responsableApplication;
    
        return $this;
    }

    /**
     * Get responsableApplication
     *
     * @return string 
     */
    public function getResponsableApplication()
    {
        return $this->responsableApplication;
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
     * @return Editeur
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