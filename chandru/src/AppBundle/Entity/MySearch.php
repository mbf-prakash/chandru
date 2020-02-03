<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class MySearch
{
    

    /**     
     * @Assert\NotBlank(message="Please select month")   
     */
    protected $month;


     /**
     * @Assert\NotBlank(message="Please select year")  
     */
    protected $year;


    
   

    
    public function setMonth($month)
    {
        $this->month = $month;
    
        return $this;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function setYear($year)
    {
        $this->year = $year;
    
        return $this;
    }

    public function getYear()
    {
        return $this->year;
    }





}
