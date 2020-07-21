<?php
class Customer
{
    private $name;
    private $phone;
    private $email;
    private $customerId;
    private $methodCodes;
    private $registrationDate;
    
    
    public function getName($name)
    {
        $this-> name = $name;
    }
    public function setName($name)
    {
        $this-> name = $name;
    }
    #
    public function getphone($phone)
    {
        $this-> phone= $phone;
    }

    public function setphone($phone)
    {
        $this-> bphone = $phone;
    }
    #
    public function getemail($email)
    {
        $this-> email = $email;
    }
    public function Setemail($email)
    {
        $this-> email = $email;
    }
    #
    public function getcustomerId($customerId)
    {
        $this-> customerId = $customerId;
    }
    public function setcustomerId($customerId)
    {
        $this-> customerId = $customerId;
    }
    #methodCode
    public function getmethodCode($methodCode)
    {
        $this-> methodCode = $methodCode;
    }
    public function setmethodCode($methodCode)
    {
        $this-> methodCode = $methodCode;
    }
    #registrationDate
    public function getregistrationDate($methodCoregistrationDatede)
    {
        $this-> registrationDate = $registrationDate;
    }
    public function setregistrationDate($methodCoregistrationDatede)
    {
        $this-> registrationDate = $registrationDate;
    }
}