<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class Myinvoiceitem
{
    

    /**     
     * @Assert\NotBlank(message="Please enter Product") 
     */
    protected $product;

    
    /**     
     * @Assert\NotBlank(message="Please Enter Quantity") 
     */
      protected $quantity;

     /**     
     * @Assert\NotBlank(message="Please Enter Quantity") 
     */
    protected $discount;

    
    public function setProduct($product)
    {
        $this->product = $product;
    
        return $this;
    }

    public function getProduct()
    {
        return $this->product;
    }



    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    
        return $this;
    }

    public function getDiscount()
    {
        return $this->discount;
    }


}
