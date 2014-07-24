<?php

namespace melon\RefappBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



class RechercheAppli
{

	private $nom;
	
	
	private $code;
	
	
    private $domaine;


    private $direction;


    private $responsableDsi;


    private $serviceAppliDsi;


    private $editeur;


    private $technologie;
    
    
    private $competence;


    private $langage;


    private $logiciel;


    private $sgbd;


    private $serveurWeb;


    private $os;

    
    public function setNom($nom)
    {
    	$this->nom = $nom;
    
    	return $this;
    }
    

    public function getNom()
    {
    	return $this->nom;
    }
    
    public function setCode($code)
    {
    	$this->code = $code;
    
    	return $this;
    }
    
    
    public function getCode()
    {
    	return $this->code;
    }
  
    
    public function setDomaine(\melon\RefappBundle\Entity\Domaine $domaine)
    {
    	$this->domaine = $domaine;
    
    	return $this;
    }
    
    
    public function getDomaine()
    {
    	return $this->domaine;
    }
    
    
    public function setDirection(\melon\RefappBundle\Entity\Direction $direction)
    {
    	$this->direction = $direction;
    
    	return $this;
    }
    
    
    public function getDirection()
    {
    	return $this->direction;
    }
    

    public function setEditeur(\melon\RefappBundle\Entity\Editeur $editeur)
    {
    	$this->editeur = $editeur;
    	
    	return $this;
    }
    
    public function getEditeur()
    {
    	return $this->editeur;
    }
    
    public function setResponsableDsi(\melon\RefappBundle\Entity\ResponsableDsi $responsableDsi)
    {
    	$this->responsableDsi = $responsableDsi;
    	 
    	return $this;
    }
    
    public function getResponsableDsi()
    {
    	return $this->responsableDsi;
    }
    
    public function setServiceAppliDsi(\melon\RefappBundle\Entity\ServiceAppliDsi $serviceAppliDsi)
    {
    	$this->serviceAppliDsi = $serviceAppliDsi;
    
    	return $this;
    }
    
    public function getServiceAppliDsi()
    {
    	return $this->serviceAppliDsi;
    }
    
    public function setTechnologie(\melon\RefappBundle\Entity\Technologie $technologie)
    {
    	$this->technologie = $technologie;
    
    	return $this;
    }
    
    public function getTechnologie()
    {
    	return $this->technologie;
    }
    
    public function setCompetence(\melon\RefappBundle\Entity\Competence $competence)
    {
    	$this->competence = $competence;
    
    	return $this;
    }
    
    public function getCompetence()
    {
    	return $this->competence;
    }
    
    public function setOs(\melon\RefappBundle\Entity\Os $os)
    {
    	$this->os = $os;
    
    	return $this;
    }
    
    public function getOs()
    {
    	return $this->os;
    }
    
    public function setServeurWeb(\melon\RefappBundle\Entity\ServeurWeb $serveurWeb)
    {
    	$this->serveurWeb = $serveurWeb;
    
    	return $this;
    }
    
    public function getServeurWeb()
    {
    	return $this->serveurWeb;
    }
    
    public function setLogiciel(\melon\RefappBundle\Entity\Logiciel $logiciel)
    {
    	$this->logiciel = $logiciel;
    
    	return $this;
    }
    
    public function getLogiciel()
    {
    	return $this->logiciel;
    }
    
    public function setSgbd(\melon\RefappBundle\Entity\Sgbd $sgbd)
    {
    	$this->sgbd = $sgbd;
    
    	return $this;
    }
    
    public function getSgbd()
    {
    	return $this->sgbd;
    }
    
    public function setLangage(\melon\RefappBundle\Entity\Langage $langage)
    {
    	$this->langage = $langage;
    
    	return $this;
    }
    
    public function getLangage()
    {
    	return $this->langage;
    }
    


}
