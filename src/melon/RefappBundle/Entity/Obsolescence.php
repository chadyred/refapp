<?php

namespace melon\RefappBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

use melon\RefappBundle\Form\RechercheAppliType;

use melon\RefappBundle\Form\DomaineType;

use Doctrine\DBAL\Types\ArrayType;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\HttpKernel\DataCollector\DataCollector;

use Doctrine\ORM\EntityRepository;

use melon\RefappBundle\Entity\Domaine;
use melon\RefappBundle\Entity\Composant;
/**
 * Obsolescence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="melon\RefappBundle\Entity\ObsolescenceRepository")
 */
class Obsolescence
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
     * @var integer
     * @Assert\Type(type = "integer", message = "La valeur {{ value }} n'est pas un format valide de type {{ type }}.")
     * @Assert\Min(limit = "0",message ="Vous ne pouvez pas rentrer un nombre négatif")
     * @Assert\Max(limit = "99999", message = "Le maximum ne doit pas dépasser 99999 mois")
     * @ORM\Column(name="nbMois1", type="integer",nullable=false)
     */
    private $nbMois1;

    /**
     * @var integer
     * @Assert\Type(type = "integer", message = "La valeur {{ value }} n'est pas un format valide de type {{ type }}.")
     * @Assert\Min(limit = "0",message ="Vous ne pouvez pas rentrer un nombre négatif")
     * @Assert\Max(limit = "99999", message = "Le maximum ne doit pas dépasser 99999 mois")
     * @ORM\Column(name="nbMois2", type="integer",nullable=false)
     */
    private $nbMois2;

    /**
     * @var integer
     * @Assert\Type(type = "integer", message = "La valeur {{ value }} n'est pas un format valide de type {{ type }}.")
     * @Assert\Min(limit = "0",message ="Vous ne pouvez pas rentrer un nombre négatif")
     * @Assert\Max(limit = "99999", message = "Le maximum ne doit pas dépasser 99999 mois")
     * @ORM\Column(name="nbMois3", type="integer",nullable=false)
     */
    private $nbMois3;


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
     * Set nbMois1
     *
     * @param integer $nbMois1
     * @return Obsolescence
     */
    public function setNbMois1($nbMois1)
    {
        $this->nbMois1 = $nbMois1;
    
        return $this;
    }

    /**
     * Get nbMois1
     *
     * @return integer 
     */
    public function getNbMois1()
    {
        return $this->nbMois1;
    }

    /**
     * Set nbMois2
     *
     * @param integer $nbMois2
     * @return Obsolescence
     */
    public function setNbMois2($nbMois2)
    {
        $this->nbMois2 = $nbMois2;
    
        return $this;
    }

    /**
     * Get nbMois2
     *
     * @return integer 
     */
    public function getNbMois2()
    {
        return $this->nbMois2;
    }

    /**
     * Set nbMois3
     *
     * @param integer $nbMois3
     * @return Obsolescence
     */
    public function setNbMois3($nbMois3)
    {
        $this->nbMois3 = $nbMois3;
    
        return $this;
    }

    /**
     * Get nbMois3
     *
     * @return integer 
     */
    public function getNbMois3()
    {
        return $this->nbMois3;
    }
}
