<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;
use Symfony\Component\Validator\Constraints as Assert;




/**
 * @ORM\Entity
 * @ORM\Table(name="expanses")
 * @GRID\Source(columns="id,invoicedate,name,description,amount")
 */
class Expanses
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @GRID\Column(title="Id", size="100", type="text")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Please enter Name")
     * @GRID\Column(title="Name", size="700", type="text") 
     */
    protected $name;
    

    /**
     * @ORM\Column(type="date")   
     * @Assert\NotBlank(message="Please enter Date") 
     * @GRID\Column(title="Expensesdate", type="date", size="150") 
     */
    protected $invoicedate;


     /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Please enter Amount")  
     * @GRID\Column(title="Amount", type="number", size="100")
     */
    protected $amount;


    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Please enter Description") 
     * @GRID\Column(title="Description", size="900", type="text")
     */
    protected $description;


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
     * Set name
     *
     * @param string $name
     *
     * @return Expanses
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    
    /**
     * Set invoicedate
     *
     * @param \DateTime $invoicedate
     * @return Expanses
     */
    public function setInvoicedate($invoicedate)
    {
        $this->invoicedate = $invoicedate;
    
        return $this;
    }

    /**
     * Get invoicedate
     *
     * @return \DateTime 
     */
    public function getInvoicedate()
    {
        return $this->invoicedate;
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return Expanses
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    
        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }


     /**
     * Set description
     *
     * @param string $description
     *
     * @return Expanses
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }


}