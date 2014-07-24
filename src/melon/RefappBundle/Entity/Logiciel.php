<?php

namespace melon\RefappBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Logiciel
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="melon\RefappBundle\Entity\LogicielRepository")
 */
class Logiciel extends Composant
{
    /**
     * @var string
     *
     * @ORM\Column(name="typeLogiciel", type="string", length=255, nullable=false)
     */
    private $typeLogiciel;

    /**
     * Set typeLogiciel
     *
     * @param string $typeLogiciel
     * @return Logiciel
     */
    public function setTypeLogiciel($typeLogiciel)
    {
        $this->typeLogiciel = $typeLogiciel;
    
        return $this;
    }

    /**
     * Get typeLogiciel
     *
     * @return string 
     */
    public function getTypeLogiciel()
    {
        return $this->typeLogiciel;
    }
    
    
}