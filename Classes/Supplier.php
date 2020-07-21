<?php
class Supplier
{
    private $supp_code;
    private $supp_name;
    private $supp_phone;
    private $supp_email;
    
    
    
    public function getISupplierCode($InID)
    {
        $this-> SupplierCode = $supp_code;
    }
    
    public function setISupplierCode($InID)
    {
        $this-> SupplierCode = $supp_code;
    }
    #
    public function getSupplierName($supp_name)
    {
        $this-> Suppliername = $supp_name;
    }
    public function setSupplierName($supp_name)
    {
        $this-> Suppliername = $supp_name;
    }
    #
    public function getSupplierPhone($supp_phone)
    {
        $this-> SupplierPhone = $supp_phone;
    }
    public function setQauntityInStock($supp_phone)
    {
        $this-> SupplierPhone = $supp_phone;
    }
     #
     public function getSupplierEmail($supp_email)
     {
         $this-> SupplierEmail = $supp_email;
     }
     public function setSupplierEmail($supp_email)
     {
         $this-> SupplierEmail = $supp_email;
     }
}