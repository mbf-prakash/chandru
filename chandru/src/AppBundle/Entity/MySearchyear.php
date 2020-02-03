<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class MySearchyear
{
    

     /**
     * @Assert\NotBlank(message="Please select year")  
     */
    protected $year;


    

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
