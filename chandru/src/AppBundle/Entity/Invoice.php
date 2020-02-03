<?php

namespace AppBundle\Entity;


use Appbundle\Entity\Customer;
use Appbundle\Entity\Paymentmode;
use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;

/**
 * @ORM\Entity
 * @ORM\Table(name="invoice")
 * @GRID\Source(columns="id,invoicedate,invoicenumber,company,gstin,subtotal,cgst,sgst,igst,cashdiscount,grandtotal,status,cancel,paiddate")
 */
class Invoice
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="date")    
     * @GRID\Column(title="Date", type="date", size="150") 
     */
    protected $invoicedate;

    /**
     * @ORM\Column(type="integer")    
     * @GRID\Column(title="Inv.No", type="number", size="50") 
     */
    protected $invoicenumber;
    /**
     * @ORM\Column(type="string", length=50)
     * @GRID\Column(title="Company", type="text", size="450") 
     */
    protected $company;

     /**
     * @ORM\Column(type="string")
     */
    protected $address1;

     /**
     * @ORM\Column(type="string", nullable=true)     
     */
    protected $address2;

     /**
     * @ORM\Column(type="string" , length=50)  
     */
    protected $city;

     /**
     * @ORM\Column(type="string" , length=6)
     */
    protected $pincode;

     /**
     * @ORM\Column(type="string" , length=50)
     */
    protected $state;

    /**
     * @ORM\Column(type="string" , length=50)
     */
    protected $statecode;

    /**
     * @ORM\Column(type="string")
     */
    protected $mobile;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $gstin;

    /**
     * @ORM\Column(type="float")
     * @GRID\Column(title="Sub.Tot", type="number") 
     */
    protected $subtotal;

    /**
     * @ORM\Column(type="float")
     * @GRID\Column(title="CGST", type="number", size="50") 
     */
    protected $cgst;

    /**
     * @ORM\Column(type="float")
     * @GRID\Column(title="SGST", type="number", size="50") 
     */
    protected $sgst;

    /**
     * @ORM\Column(type="float")
     * @GRID\Column(title="IGST", type="number", size="50") 
     */
    protected $igst;

    /**
     * @ORM\Column(type="float")
     * @GRID\Column(title="C.Disc", type="number", size="50") 
     */
    protected $cashdiscount;

    /**
     * @ORM\Column(type="float")
     * @GRID\Column(title="Amount", type="number", size="50") 
     */
    protected $grandtotal;

    /**
     * @ORM\Column(type="float")
     */
    protected $balance;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $inwords;

    /**
     * @ORM\Column(type="boolean")
     * @GRID\Column(title="Paymount Status", filter="select", size="50")
     */
    protected $status;

    /**
     * @ORM\Column(type="boolean")
     * @GRID\Column(title="Invoice Status", filter="select", size="50")
     */
    protected $cancel;

    /**
     * @ORM\Column(type="date", nullable=true)    
     * @GRID\Column(title="Paid On", type="date", size="150") 
     */
    protected $paiddate;

    /**
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id", onDelete="CASCADE") 
     * @GRID\Column(title="Company", field="customer.company", filter="select")
     * @GRID\Column(title="GSTIN", field="customer.gstin", )
     * @GRID\Column(title="State", field="customer.state.state", filter="select")
      */
    protected $customer;

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
     * @return Invoice
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
     * @param integer $invoicenumber
     * @return Invoice
     */
    public function setInvoicenumber($invoicenumber)
    {
        $this->invoicenumber = $invoicenumber;
    
        return $this;
    }

    /**
     * Get invoicenumber
     *
     * @return integer 
     */
    public function getInvoicenumber()
    {
        return $this->invoicenumber;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return Invoice
     */
    public function setCompany($company)
    {
        $this->company = $company;
    
        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set address1
     *
     * @param string $address1
     * @return Invoice
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    
        return $this;
    }

    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return Invoice
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    
        return $this;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Invoice
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set pincode
     *
     * @param string $pincode
     * @return Invoice
     */
    public function setPincode($pincode)
    {
        $this->pincode = $pincode;
    
        return $this;
    }

    /**
     * Get pincode
     *
     * @return string 
     */
    public function getPincode()
    {
        return $this->pincode;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Invoice
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
     * @return Invoice
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
    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Invoice
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    
        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set gstin
     *
     * @param string $gstin
     * @return Invoice
     */
    public function setGstin($gstin)
    {
        $this->gstin = $gstin;
    
        return $this;
    }

    /**
     * Get gstin
     *
     * @return string 
     */
    public function getGstin()
    {
        return $this->gstin;
    }

    /**
     * Set subtotal
     *
     * @param float $subtotal
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
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
     * Set cashdiscount
     *
     * @param float $cashdiscount
     * @return Invoice
     */
    public function setCashdiscount($cashdiscount)
    {
        $this->cashdiscount = $cashdiscount;
    
        return $this;
    }

    /**
     * Get cashdiscount
     *
     * @return float 
     */
    public function getCashdiscount()
    {
        return $this->cashdiscount;
    }



    /**
     * Set grandtotal
     *
     * @param float $grandtotal
     * @return Invoice
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
     * Set balance
     *
     * @param float $balance
     * @return Invoice
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
     * Set inwords
     *
     * @param string $inwords
     * @return Invoice
     */
    public function setInwords($inwords)
    {
        $this->inwords = $inwords;
    
        return $this;
    }

    /**
     * Get inwords
     *
     * @return string 
     */
    public function getInwords()
    {
        return $this->inwords;
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
     * Set cancel
     *
     * @param boolean $cancel
     * @return Invoice
     */
    public function setCancel($cancel)
    {
        $this->cancel = $cancel;
    
        return $this;
    }

    /**
     * Get cancel
     *
     * @return boolean 
     */
    public function getCancel()
    {
        return $this->cancel;
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

 

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customer $customer
     * @return Invoice
     */
    public function setCustomer(\AppBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;
    
        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
