<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;

class Changepassword
{
    /**
     * @SecurityAssert\UserPassword(
     *     message = "Wrong value for your current password"
     * )
     */
     protected $oldPassword;
 
    /**     
     * @Assert\NotBlank(message="Please enter new password")    
     */
    protected $plainPassword;
 
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }
    public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;

        return $this;
    }
    public function getOldPassword()
    {
        return $this->oldPassword;
    }


}
