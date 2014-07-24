<?php

namespace melon\RefappBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * ResponsableDsi
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="melon\RefappBundle\Entity\ResponsableDsiRepository")
 */
class ResponsableDsi implements UserInterface, \Serializable {

	//attributs//

	//association bidirectionnel avec L'entit� application
	/**
	 * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\Application", mappedBy="responsablesDsi")
	 */
	private $applications;
	
	/**
	 * @ORM\ManyToMany(targetEntity="melon\RefappBundle\Entity\Application", mappedBy="responsablesDsi")
	 */
	private $favoris;
	

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
	 * @ORM\Column(name="username", type="string", length=255, nullable=false, unique=true)
	 * @Assert\NotBlank(message="Le champ matricule doit contenir un matricule valide.")
	 * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas un type {{ type }} valide.")
	 */
	private $username;

	/**
	 * @ORM\Column(name="password", type="string", length=255)
	 * @Assert\NotBlank(message="Le champ password ne doit pas être vide et ne peut contenir d'espace.")
	 */
	private $password;

	/**
	 * @ORM\Column(name="salt", type="string", length=255, nullable=true)
	 */
	private $salt;

	/**
	 * @ORM\Column(name="roles", type="array")
	 */
	private $roles;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="nom", type="string", length=255, nullable=false)
	 * @Assert\NotBlank(message="Le champ nom doit contenir un nom valide.")
	 * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas un type {{ type }} valide.")
	 */
	private $nom;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
	 * @Assert\NotBlank(message="Le champ prenom doit contenir un prenom valide.")
	 * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas un type {{ type }} valide.")
	 */
	private $prenom;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="numTel", type="string", length=255, nullable=true)
	 * @Assert\Type(type="numeric", message="La valeur {{ value }} n'est pas un type {{ type }} valide.")
	 * @Assert\MinLength(10)
	 */
	private $numTel;
	/**
	 * @var string
	 *
	 * @ORM\Column(name="email", type="string", length=255, nullable=false)
	 * @Assert\NotBlank(message="Le champ email doit contenir un email valide.")
	 * @Assert\Type(type="string", message="La valeur {{ value }} n'est pas un type {{ type }} valide.")
	 */
	private $email;
	//ManyToOne//
	/** @ORM\ManyToOne(targetEntity="melon\RefappBundle\Entity\ServiceAppliDsi")
	 */

	private $serviceAppliDsi;

	// getter et setter //

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
	 * @return ResponsableDsi
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
	 * Set prenom
	 *
	 * @param string $prenom
	 * @return ResponsableDsi
	 */
	public function setPrenom($prenom) {
		$this->prenom = $prenom;

		return $this;
	}

	/**
	 * Get prenom
	 *
	 * @return string 
	 */
	public function getPrenom() {
		return $this->prenom;
	}


	/**
	 * Set numTel
	 *
	 * @param string $numTel
	 * @return ResponsableDsi
	 */
	public function setNumTel($numTel) {
		$this->numTel = $numTel;

		return $this;
	}

	/**
	 * Get numTel
	 *
	 * @return string 
	 */
	public function getNumTel() {
		return $this->numTel;
	}
	/**
	 * Set email
	 *
	 * @param string $email
	 * @return ResponsableDsi
	 */
	public function setEmail($email) {
		$this->email = $email;
	
		return $this;
	}
	/**
	 * Get prenom
	 *
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}
	/**
	 * Set serviceAppliDsi
	 *
	 * @param \melon\RefappBundle\Entity\ServiceAppliDsi $serviceAppliDsi
	 * @return ResponsableDsi
	 */
	public function setServiceAppliDsi(
			\melon\RefappBundle\Entity\ServiceAppliDsi $serviceAppliDsi) {
		$this->serviceAppliDsi = $serviceAppliDsi;

		return $this;
	}

	/**
	 * Get serviceAppliDsi
	 *
	 * @return \melon\RefappBundle\Entity\ServiceAppliDsi 
	 */
	public function getServiceAppliDsi() {
		return $this->serviceAppliDsi;
	}
	/**
	 * Constructor
	 */
	public function __construct() {
		$this->applications = new \Doctrine\Common\Collections\ArrayCollection();
		//Ne souhaitant qu'ins�rer des responsable DSI dans la base, on donne cette valeur par d�fault au constructeur
			
	}

	/**
	 * Add applications
	 *
	 * @param \melon\RefappBundle\Entity\Application $applications
	 * @return ResponsableDsi
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

	public function eraseCredentials() {
	}

	/**
	 * Set password
	 *
	 * @param string $password
	 * @return ResponsableDsi
	 */
	public function setPassword($password) {
		$this->password = $password;

		return $this;
	}

	/**
	 * Get password
	 *
	 * @return string 
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * Set salt
	 *
	 * @param string $salt
	 * @return ResponsableDsi
	 */
	public function setSalt($salt) {
		$this->salt = $salt;

		return $this;
	}

	/**
	 * Get salt
	 *
	 * @return string 
	 */
	public function getSalt() {
		return $this->salt;
	}

	public function setRoles($roles)
  	{
  		$rolesarray=array($roles);	
   	 $this->roles = $rolesarray;
   	 return $this;
 	 }
 	 
 	 public function setRoleDefault($roles){
 	 	$this->roles= ($roles);
 	 	return $this;
 	 }
 
 	public function getRoles()
 	 {
   	 return $this->roles;
  	}
  	
	public function getUsername() {
		
		return $this->username;
	}


    /**
     * Set username
     *
     * @param string $username
     * @return ResponsableDsi
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }
    
    public function serialize()
    {
    	return serialize(array(
    			$this->id,
    			$this->password,
    			$this->username
    	));
    }
    
    public function unserialize($serialized)
    {
    	list(
    			$this->id,
    			$this->password,
    			$this->username
    	) = unserialize($serialized);
    }
    

}