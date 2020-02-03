<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="cashdiscount")
 */
class Cashdiscount
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Please enter cashdiscount")
     */
    protected $cashdiscount;
    
    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Please enter percentage")
     */
    protected $percentage;

        
   /**
     * @ORM\ManyToOne(targetEntity="Invoice")
     * @ORM\JoinColumn(name="invoice_id", referencedColumnName="id", onDelete="CASCADE")
      */
      protected $invoice;



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
     * Set cashdiscount
     *
     * @param string $cashdiscount
     *
     * @return Cashdiscount
     */
    public function setCashdiscount($cashdiscount)
    {
        $this->cashdiscount = $cashdiscount;

        return $this;
    }

    /**
     * Get cashdiscount
     *
     * @return string
     */
    public function getCashdiscount()
    {
        return $this->cashdiscount;
    }


    /**
     * Set percentage
     *
     * @param string $percentage
     *
     * @return Cashdiscount
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Get percentage
     *
     * @return string
     */
    public function getPercentage()
    {
        return $this->percentage;
    }


        
    /**
     * Set invoice
     *
     * @param \AppBundle\Entity\Invoice $invoice
     * @return Cashdiscount
     */
    public function setInvoice(\AppBundle\Entity\Invoice $invoice = null)
    {
        $this->invoice = $invoice;
    
        return $this;
    }

    /**
     * Get invoice
     *
     * @return \AppBundle\Entity\Invoice 
     */
    public function getInvoice()
    {
        return $this->invoice;
    }



}