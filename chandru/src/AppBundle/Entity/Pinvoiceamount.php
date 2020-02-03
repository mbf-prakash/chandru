<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="pinvoiceamount")
 * @GRID\Source(columns="id,pinvoice.id,paiddate,amount,balance")
 */
class Pinvoiceamount
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**     
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="Please enter Date") 
     * @GRID\Column(title="Paiddate", type="date", size="100")
     */
    protected $paiddate;


     /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Please enter Amount")  
     * @GRID\Column(title="Amount", type="number", size="100")
     */
    protected $amount;

    
   /**
     * @ORM\ManyToOne(targetEntity="Pinvoice")
     * @ORM\JoinColumn(name="pinvoice_id", referencedColumnName="id", onDelete="CASCADE")
      */
      protected $pinvoice;


     /**
     * @ORM\Column(type="float")
     * @GRID\Column(title="Balance", type="number", size="100")
     */
    protected $balance;

    


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
     * Set paiddate
     *
     * @param \DateTime $paiddate
     * @return Invoiceamount
     */
    public function setPaiddate($paiddate)
    {
        $this->paiddate = $paiddate;
    
        return $this;
    }

    /**
     * Get paiddate
     *
     * @return \DateTime 
     */
    public function getPaiddate()
    {
        return $this->paiddate;
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return Invoiceamount
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
     * Set pinvoice
     *
     * @param \AppBundle\Entity\Pinvoice $pinvoice
     * @return Pinvoiceamount
     */
    public function setPinvoice(\AppBundle\Entity\Pinvoice $pinvoice = null)
    {
        $this->pinvoice = $pinvoice;
    
        return $this;
    }

    /**
     * Get pinvoice
     *
     * @return \AppBundle\Entity\Pinvoice 
     */
    public function getPinvoice()
    {
        return $this->pinvoice;
    }


    /**
     * Set balance
     *
     * @param float $balance
     * @return Invoiceamount
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    
        return $this;
    }

    /**
     * Get balance
     *
     * @return float 
     */
    public function getBalance()
    {
        return $this->balance;
    }


}