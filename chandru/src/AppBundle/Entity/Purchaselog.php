<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;


/**
 * @ORM\Entity
 * @ORM\Table(name="purchaselog")
 * @GRID\Source(columns="id, product.product, pinvoice.invoicenumber, pinvoice.invoicedate,  quantity, supplier.supplier ")
*/

class Purchaselog
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;


    /**
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", onDelete="CASCADE") 
     * @GRID\Column(title="Product", field="product.product", filter="select", size="250", type="text")
      */
      protected $product;



    /**
     * @ORM\ManyToOne(targetEntity="Supplier")
     * @ORM\JoinColumn(name="supplier_id", referencedColumnName="id", onDelete="CASCADE") 
     * @GRID\Column(title="Supplier", field="supplier.supplier", filter="select", size="150", type="text")
      */
      protected $supplier;

      

    /**
     * @ORM\ManyToOne(targetEntity="Pinvoice")
     * @ORM\JoinColumn(name="pinvoice_id", referencedColumnName="id", onDelete="CASCADE") 
     * @GRID\Column(title="Invoice No.", field="pinvoice.invoicenumber", type="text", size="150",)
     * @GRID\Column(title="Invoice Date.", field="pinvoice.invoicedate", type="date", size="150",)
      */
      protected $pinvoice;


    
    /**
     * @ORM\Column(type="float")
     * @GRID\Column(title="Qty", size="50")  
     */
    protected $quantity;



    
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
     * Set product
     *
     * @param \AppBundle\Entity\Product $product
     * @return Purchaselog
     */
    public function setProduct(\AppBundle\Entity\Product $product = null)
    {
        $this->product = $product;
    
        return $this;
    }

    /**
     * Get product
     *
     * @return \AppBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }



    /**
     * Set supplier
     *
     * @param \AppBundle\Entity\Supplier $supplier
     * @return Purchaselog
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
     * Set pinvoice
     *
     * @param \AppBundle\Entity\Pinvoice $pinvoice
     * @return Purchaselog
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
     * Set quantity.
     *
     * @param float $quantity
     *
     * @return Purchaselog
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






}



    