<?php

namespace AppBundle\Entity;


use Appbundle\Entity\Invoice;
use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="pinvoiceitem")
 * @GRID\Source(columns="id,product,quantity,amount")
 */
class Pinvoiceitem
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
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Please enter Unit")  
     * @GRID\Column(title="Unit", size="50")  
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
     * @ORM\ManyToOne(targetEntity="Pinvoice")
     * @ORM\JoinColumn(name="pinvoice_id", referencedColumnName="id", onDelete="CASCADE")
      */
    protected $pinvoice;

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
     * @return Pinvoiceitem
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
     * @return Pinvoiceitem
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
     * @return Pinvoiceitem
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
     * Set mrp.
     *
     * @param string $mrp
     *
     * @return Pinvoiceitem
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
     * @return Pinvoiceitem
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
     * @return Pinvoiceitem
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
     * @return Pinvoiceitem
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
     * @return Pinvoiceitem
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
     * @param \AppBundle\Entity\Pinvoice $pinvoice
     * @return Pinvoiceitem
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
     * @param string $unit
     *
     * @return Pinvoiceitem
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }



}
