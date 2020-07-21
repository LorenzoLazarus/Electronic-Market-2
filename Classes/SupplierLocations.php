<?php
class SupplierLocations
{
    private $supp_code;
    private $address_id;
    private $location_addr;
    private $quant_stock;
    
    
    
    public function getISupplierCode($InID)
    {
        $this-> SupplierCode = $supp_code;
    }
    
    public function setISupplierCode($InID)
    {
        $this-> getISupplierCode = $supp_code;
    }
    #
    public function getlocationAddress($LocAd)
    {
        $this-> LOcationA = $location_addr;
    }
    public function setlocationAddress($LocAd)
    {
        $this-> LOcationA = $location_addr;
    }
    #
    public function getQauntityInStock($qis)
    {
        $this-> QntStk = $quant_stock;
    }
    public function setQauntityInStock($qis)
    {
        $this-> QntStk = $quant_stock;
    }
    
}