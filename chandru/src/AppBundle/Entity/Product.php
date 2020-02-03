<?php

namespace AppBundle\Entity;


use Appbundle\Entity\State;
use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 * @UniqueEntity(fields={"product"}, message="Product already exist.") 
 * @GRID\Source(columns="id,product,unit.unit,category.category,mrp,discount,rate,gst,stock")
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @GRID\Column(title="ID", type="number", size="40") 
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", onDelete="CASCADE") 
     * @GRID\Column(title="Category", field="category.category", filter="select", size="150")
      */
      protected $category;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Please enter Product Name")
     * @GRID\Column(title="Product Name", type="text", size="450") 
     */
    protected $product;


    /**
     * @ORM\Column(type="float", length=50, nullable=true)
     * @Assert\NotBlank(message="Please enter Stock")
     * @GRID\Column(title="Stock", type="text", size="50") 
     */
    protected $stock;


      /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Please enter HSSNcode")   
     */
    protected $hssncode;

     /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Please enter GST")  
     * @GRID\Column(title="GST%", size="100", size="50")  
     */
    protected $gst;


     /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Please enter MRP")  
     * @GRID\Column(title="MRP", size="100", size="50")  
     */
    protected $mrp;

     /**
     * @ORM\ManyToOne(targetEntity="Unit")
     * @ORM\JoinColumn(name="unit_id", referencedColumnName="id", onDelete="CASCADE") 
     * @GRID\Column(title="Unit", field="unit.unit", filter="select", size="150")
      */
      protected $unit;

     /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Please enter Rate")  
     * @GRID\Column(title="S.Rate", size="100", size="50")  
     */
    protected $rate;

     /**
     * @ORM\Column(type="float")
     * @GRID\Column(title="Dis%", size="50")  
     */
    protected $discount;




    /**
     * Get id.
     *
     * @return int
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
     * @return Product
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
     * Set stock.
     *
     * @param string $stock
     *
     * @return Product
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock.
     *
     * @return string
     */
    public function getStock()
    {
        return $this->stock;
    }


    /**
     * Set hssncode.
     *
     * @param string $hssncode
     *
     * @return Product
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
     * @return Product
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
     * @return Product
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
     * Set rate.
     *
     * @param string $rate
     *
     * @return Product
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
     * @return Product
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
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
     * Set category.
     *
     * @param \AppBundle\Entity\Category|null $category
     *
     * @return Product
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return \AppBundle\Entity\Category|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set unit.
     *
     * @param \AppBundle\Entity\Unit|null $unit
     *
     * @return Product
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
