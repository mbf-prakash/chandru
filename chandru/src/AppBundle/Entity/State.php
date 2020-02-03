<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="state")
 * @UniqueEntity(fields={"state"}, message="State already exist.") 
 * @GRID\Source(columns="id,state,statecode")
 */
class State
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @GRID\Column(title="ID", size="100", type="number") 
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Please enter state")
     * @GRID\Column(title="State", size="700", type="text") 
     */
    protected $state;

    
     /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Please enter Statecode")   
     */
    protected $statecode;

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
     * Set state
     *
     * @param string $state
     * @return State
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    
    /**
     * Set statecode
     *
     * @param string $statecode
     * @return State
     */
    public function setStatecode($statecode)
    {
        $this->statecode = $statecode;
    
        return $this;
    }

    /**
     * Get statecode
     *
     * @return string 
     */
    public function getStatecode()
    {
        return $this->statecode;
    }


}
