<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;

/**
 * @ORM\Entity
 * @ORM\Table(name="pinvoice")
 * @GRID\Source(columns="id,supplier.supplier,invoicenumber,invoicedate,subtotal,cgst,sgst,igst,grandtotal,status,paiddate")
 */
class Pinvoice
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\ManyToOne(targetEntity="Supplier")
     * @ORM\JoinColumn(name="supplier_id", referencedColumnName="id", onDelete="CASCADE") 
     * @GRID\Column(title="Supplier", field="supplier.supplier", filter="select", size="750")
      */
      protected $supplier;


    /**
     * @ORM\Column(type="string")    
     * @GRID\Column(title="Inv.No", type="text", size="100") 
     */
    protected $invoicenumber;

    /**
     * @ORM\Column(type="date")    
     * @GRID\Column(title="Date", type="date", size="150") 
     */
    protected $invoicedate;

    /**
     * @ORM\Column(type="float")
     * @GRID\Column(title="Sub.Tot", type="number", size="50") 
     */
    protected $subtotal;

    /**
     * @ORM\Column(type="float")
     * @GRID\Column(title="CGST", type="number") 
     */
    protected $cgst;

    /**
     * @ORM\Column(type="float")
     */
    protected $balance;

    /**
     * @ORM\Column(type="float")
     * @GRID\Column(title="SGST", type="number") 
     */
    protected $sgst;

    /**
     * @ORM\Column(type="float")
     * @GRID\Column(title="IGST", type="number") 
     */
    protected $igst;

    /**
     * @ORM\Column(type="float")
     * @GRID\Column(title="Amount", type="number", size="50") 
     */
    protected $grandtotal;

      /**
     * @ORM\Column(type="boolean")
     * @GRID\Column(title="Status", filter="select", size="50")
     */
    protected $status;

    /**
     * @ORM\Column(type="date", nullable=true)    
     * @GRID\Column(title="Paid On", type="date", size="150") 
     */
    protected $paiddate;




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
     * Set invoicedate
     *
     * @param \DateTime $invoicedate
     * @return Pinvoice
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
     * Set invoicenumber
     *
     * @param string $invoicenumber
     * @return Pinvoice
     */
    public function setInvoicenumber($invoicenumber)
    {
        $this->invoicenumber = $invoicenumber;
    
        return $this;
    }

    /**
     * Get string
     *
     * @return integer 
     */
    public function getInvoicenumber()
    {
        return $this->invoicenumber;
    }

    /**
     * Set subtotal
     *
     * @param float $subtotal
     * @return Pinvoice
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
    
        return $this;
    }

    /**
     * Get subtotal
     *
     * @return float 
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Set cgst
     *
     * @param float $cgst
     * @return Pinvoice
     */
    public function setCgst($cgst)
    {
        $this->cgst = $cgst;
    
        return $this;
    }

    /**
     * Get cgst
     *
     * @return float 
     */
    public function getCgst()
    {
        return $this->cgst;
    }

    /**
     * Set sgst
     *
     * @param float $sgst
     * @return Pinvoice
     */
    public function setSgst($sgst)
    {
        $this->sgst = $sgst;
    
        return $this;
    }

    /**
     * Get sgst
     *
     * @return float 
     */
    public function getSgst()
    {
        return $this->sgst;
    }

    /**
     * Set igst
     *
     * @param float $igst
     * @return Pinvoice
     */
    public function setIgst($igst)
    {
        $this->igst = $igst;
    
        return $this;
    }

    /**
     * Get igst
     *
     * @return float 
     */
    public function getIgst()
    {
        return $this->igst;
    }

    /**
     * Set balance
     *
     * @param float $balance
     * @return Pinvoice
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

    /**
     * Set grandtotal
     *
     * @param float $grandtotal
     * @return Pinvoice
     */
    public function setGrandtotal($grandtotal)
    {
        $this->grandtotal = $grandtotal;
    
        return $this;
    }

    /**
     * Get grandtotal
     *
     * @return float 
     */
    public function getGrandtotal()
    {
        return $this->grandtotal;
    }

  
 

    /**
     * Set supplier
     *
     * @param \AppBundle\Entity\Supplier $supplier
     * @return Pinvoice
     */
    public function setSupplier(\AppBundle\Entity\Supplier $supplier = null)
    {
        $this->supplier = $supplier;
    
        return $this;
    }

    /**
     * Get supplier
     *
     * @return \AppBundle\Entity\Supplier 
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Invoice
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set paiddate
     *
     * @param \DateTime $paiddate
     * @return Invoice
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
}
