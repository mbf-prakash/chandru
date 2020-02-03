<?php

namespace AppBundle\Entity;


use Appbundle\Entity\Invoice;
use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="invoiceitem")
 * @GRID\Source(columns="id,product,hssncode,gst,mrp,quantity,rate,unit.unit,discount,amount")
 */
class Invoiceitem
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;



    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Please enter Product Name")
     * @GRID\Column(title="Product Name", type="text", size="450") 
     */
    protected $product;

      /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Please enter HSSNcode")   
      * @GRID\Column(title="HSSN", type="text") 
     */
    protected $hssncode;

      /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Please enter GST")  
     * @GRID\Column(title="GST%", size="50")  
     */
    protected $gst;

     /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Please enter CGST")  
     * @GRID\Column(title="CGST%", size="75")  
     */
    protected $cgst;

         /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Please enter SGST")  
     * @GRID\Column(title="SGST%", size="75")  
     */
    protected $sgst;

    

         /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Please enter IGST")  
     * @GRID\Column(title="IGST%", size="75")  
     */
    protected $igst;


     /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Please enter MRP")  
     * @GRID\Column(title="MRP", size="75")  
     */
    protected $mrp;


    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Please enter Quantity")  
     * @GRID\Column(title="Qty", size="50")  
     */
    protected $quantity;


     /**
     * @ORM\ManyToOne(targetEntity="Unit")
     * @ORM\JoinColumn(name="unit_id", referencedColumnName="id", onDelete="CASCADE") 
     * @GRID\Column(title="Unit", field="unit.unit", filter="select", size="75")
      */
      protected $unit;

     /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Please enter Rate")  
     * @GRID\Column(title="Rate", size="75")  
     */
    protected $rate;

     /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Please enter Discount Percentage")  
     * @GRID\Column(title="Dis%", size="75")  
     */
    protected $discount;


     /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Please enter Amount")  
     * @GRID\Column(title="Amount", type="number", size="100")
     */
    protected $amount;
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
     * Set product.
     *
     * @param string $product
     *
     * @return Invoiceitem
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product.
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set hssncode.
     *
     * @param string $hssncode
     *
     * @return Invoiceitem
     */
    public function setHssncode($hssncode)
    {
        $this->hssncode = $hssncode;

        return $this;
    }

    /**
     * Get hssncode.
     *
     * @return string
     */
    public function getHssncode()
    {
        return $this->hssncode;
    }

    
    /**
     * Set gst.
     *
     * @param string $gst
     *
     * @return Invoiceitem
     */
    public function setGst($gst)
    {
        $this->gst = $gst;

        return $this;
    }

    /**
     * Get gst.
     *
     * @return string
     */
    public function getGst()
    {
        return $this->gst;
    }


    /**
     * Set cgst.
     *
     * @param string $cgst
     *
     * @return Invoiceitem
     */
    public function setCgst($cgst)
    {
        $this->cgst = $cgst;

        return $this;
    }

    /**
     * Get cgst.
     *
     * @return string
     */
    public function getCgst()
    {
        return $this->cgst;
    }


        /**
     * Set sgst.
     *
     * @param string $sgst
     *
     * @return Invoiceitem
     */
    public function setSgst($sgst)
    {
        $this->sgst = $sgst;

        return $this;
    }

    /**
     * Get sgst.
     *
     * @return string
     */
    public function getSgst()
    {
        return $this->sgst;
    }


        /**
     * Set igst.
     *
     * @param string $igst
     *
     * @return Invoiceitem
     */
    public function setIgst($igst)
    {
        $this->igst = $igst;

        return $this;
    }

    /**
     * Get igst.
     *
     * @return string
     */
    public function getIgst()
    {
        return $this->igst;
    }





    /**
     * Set mrp.
     *
     * @param string $mrp
     *
     * @return Invoiceitem
     */
    public function setMrp($mrp)
    {
        $this->mrp = $mrp;

        return $this;
    }

    /**
     * Get mrp.
     *
     * @return string
     */
    public function getMrp()
    {
        return $this->mrp;
    }


    
    /**
     * Set quantity.
     *
     * @param string $quantity
     *
     * @return Invoiceitem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity.
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }


    /**
     * Set rate.
     *
     * @param string $rate
     *
     * @return Invoiceitem
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate.
     *
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set discount.
     *
     * @param string $discount
     *
     * @return Invoiceitem
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }


    /**
     * Set amount
     *
     * @param float $amount
     * @return Invoiceitem
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
     * Set invoice
     *
     * @param \AppBundle\Entity\Invoice $invoice
     * @return Invoiceitem
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


    /**
     * Get discount.
     *
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }


      /**
     * Set unit.
     *
     * @param \AppBundle\Entity\Unit|null $unit
     *
     * @return Invoiceitem
     */
    public function setUnit(\AppBundle\Entity\Unit $unit = null)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit.
     *
     * @return \AppBundle\Entity\Unit|null
     */
    public function getUnit()
    {
        return $this->unit;
    }


}
