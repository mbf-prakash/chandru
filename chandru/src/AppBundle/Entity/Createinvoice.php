<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class Createinvoice
{
    

    /**     
     * @Assert\NotBlank(message="Please enter Date") 
     */
    protected $invoicedate;

    
    /**     
     * @Assert\NotBlank(message="Please Select Customer") 
     */
      protected $customer;

    
    public function setInvoicedate($invoicedate)
    {
        $this->invoicedate = $invoicedate;
    
        return $this;
    }

    public function getInvoicedate()
    {
        return $this->invoicedate;
    }



    public function setCustomer($customer)
    {
        $this->customer = $customer;
    
        return $this;
    }

    public function getCustomer()
    {
        return $this->customer;
    }


}
