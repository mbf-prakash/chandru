<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use APY\DataGridBundle\Grid\Mapping as GRID;

class Changepstatus
{
    

    /**     
     * @Assert\NotBlank(message="Please enter Date")   
     * @GRID\Column(title="Date", type="number", size="100")
     */
    protected $paiddate;


     /**
     * @Assert\NotBlank(message="Please enter Amount")  
     * @GRID\Column(title="Amount", type="number", size="100")
     */
    protected $amount;


    
   

    
    public function setPaiddate($paiddate)
    {
        $this->paiddate = $paiddate;
    
        return $this;
    }

    public function getPaiddate()
    {
        return $this->paiddate;
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
