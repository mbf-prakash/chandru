<?php

namespace AppBundle\Entity;


use Appbundle\Entity\State;
use Doctrine\ORM\Mapping as ORM;
use APY\DataGridBundle\Grid\Mapping as GRID;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="supplier")
 * @GRID\Source(columns="id,supplier,mobile,city,state.state,joineddate")
 */
class Supplier
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @GRID\Column(title="ID", type="number") 
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Please enter Supplier Name")
     * @GRID\Column(title="Supplier Name", type="text",  size="950") 
     */
    protected $supplier;

     /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Please enter Address")   
     */
    protected $address1;

     /**
     * @ORM\Column(type="string", nullable=true)     
     * @Assert\NotBlank(message="Please enter Address")  
     */
    protected $address2;

     /**
     * @ORM\Column(type="string" , length=50)
     * @Assert\NotBlank(message="Please enter City") 
     * @GRID\Column(title="City",  size="250")  
     */
    protected $city;

     /**
     * @ORM\Column(type="string" , length=6)
     * @Assert\NotBlank(message="Please enter Pincode")   
     */
    protected $pincode;


    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Please enter Mobile Numbber")  
     * @GRID\Column(title="Mobile", size="200")  
     */
    protected $mobile;


    
    /**
     * @ORM\Column(type="string", nullable=true)
     * @GRID\Column(title="GSTIN",  size="200")  
     */
    protected $gstin;

     /**
     * @ORM\ManyToOne(targetEntity="State")
     * @ORM\JoinColumn(name="state_id", referencedColumnName="id", onDelete="CASCADE") 
     * @GRID\Column(title="State", field="state.state", filter="select", size="200")
      */
    protected $state;



    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank(message="Please enter Joined Date")
     * @GRID\Column(title="Since", type="date", size="150") 
     */
    protected $joineddate;

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
     * Set supplier
     *
     * @param string $supplier
     * @return Supplier
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
    
        return $this;
    }

    /**
     * Get supplier
     *
     * @return string 
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Set address1
     *
     * @param string $address1
     * @return Supplier
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    
        return $this;
    }

    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return Supplier
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    
        return $this;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Supplier
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set pincode
     *
     * @param string $pincode
     * @return Supplier
     */
    public function setPincode($pincode)
    {
        $this->pincode = $pincode;
    
        return $this;
    }

    /**
     * Get pincode
     *
     * @return string 
     */
    public function getPincode()
    {
        return $this->pincode;
    }



    
    
    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Customer
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    
        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }



    

    /**
     * Set gstin
     *
     * @param string $gstin
     * @return Supplier
     */
    public function setGstin($gstin)
    {
        $this->gstin = $gstin;
    
        return $this;
    }

    /**
     * Get gstin
     *
     * @return string 
     */
    public function getGstin()
    {
        return $this->gstin;
    }


    
    /**
     * Set state
     *
     * @param \AppBundle\Entity\State $state
     * @return Supplier
     */
    public function setState(\AppBundle\Entity\State $state = null)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return \AppBundle\Entity\State 
     */
    public function getState()
    {
        return $this->state;
    }



    /**
     * Set joineddate
     *
     * @param \DateTime $joineddate
     * @return Supplier
     */
    public function setJoineddate($joineddate)
    {
        $this->joineddate = $joineddate;
    
        return $this;
    }

    /**
     * Get joineddate
     *
     * @return \DateTime 
     */
    public function getJoineddate()
    {
        return $this->joineddate;
    }

}
