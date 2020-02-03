<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class Mypinvoiceitem
{
    

    /**     
     * @Assert\NotBlank(message="Please enter Product") 
     */
    protected $product;

    
    /**     
     * @Assert\NotBlank(message="Please Enter Rate") 
     */
      protected $rate;

      /**     
     * @Assert\NotBlank(message="Please Enter Quantity") 
     */
    protected $quantity;

     /**     
     * @Assert\NotBlank(message="Please Enter Quantity") 
     */
    protected $discount;

     /**     
     * @Assert\NotBlank(message="Please Enter Amount") 
     */
    protected $amount;

    
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

    public function setRate($rate)
    {
        $this->rate = $rate;
    
        return $this;
    }

    public function getRate()
    {
        return $this->rate;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }


}
