<?php

namespace melon\RefappBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


class RechercheServeur 
{

    private $id;


    private $nom;

    private $ip;


    private $hostName;


    private $typeServeur;


    private $environnement;


    private $serveurWeb;


    private $os;


    private $langage;


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
     * @return RechercheServeur
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
     * @return RechercheServeur
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
     * Set hostName
     *
     * @param string $hostName
     * @return RechercheServeur
     */
    public function setHostName($hostName)
    {
        $this->hostName = $hostName;
    
        return $this;
    }

    /**
     * Get hostName
     *
     * @return string 
     */
    public function getHostName()
    {
        return $this->hostName;
    }

    /**
     * Set typeServeur
     *
     * @param string $typeServeur
     * @return RechercheServeur
     */
    public function setTypeServeur($typeServeur)
    {
        $this->typeServeur = $typeServeur;
    
        return $this;
    }

    /**
     * Get typeServeur
     *
     * @return string 
     */
    public function getTypeServeur()
    {
        return $this->typeServeur;
    }


    /**
     * Set environnement
     *
     * @param string $environnement
     * @return RechercheServeur
     */
    public function setEnvironnement($environnement)
    {
        $this->environnement = $environnement;
    
        return $this;
    }

    /**
     * Get environnement
     *
     * @return string 
     */
    public function getEnvironnement()
    {
        return $this->environnement;
    }

 

    /**
     * Set serveurWeb
     *
     * @param string $serveurWeb
     * @return RechercheServeur
     */
    public function setServeurWeb(\melon\RefappBundle\Entity\ServeurWeb $serveurWeb)
    {
        $this->serveurWeb = $serveurWeb;
    
        return $this;
    }

    /**
     * Get serveurWeb
     *
     * @return string 
     */
    public function getServeurWeb()
    {
        return $this->serveurWeb;
    }

    /**
     * Set os
     *
     * @param string $os
     * @return RechercheServeur
     */
    public function setOs(\melon\RefappBundle\Entity\Os $os)
    {
        $this->os = $os;
    
        return $this;
    }

    /**
     * Get os
     *
     * @return string 
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Set langage
     *
     * @param string $langage
     * @return RechercheServeur
     */
    public function setLangage(\melon\RefappBundle\Entity\Langage $langage)
    {
        $this->langage = $langage;
    
        return $this;
    }

    /**
     * Get langage
     *
     * @return string 
     */
    public function getLangage()
    {
        return $this->langage;
    }
}
