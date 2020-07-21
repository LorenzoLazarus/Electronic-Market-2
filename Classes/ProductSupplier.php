<?php
class ProductsSuppleir
{
    private $bcode;
    private $supp_bcode;
    private $cost_price;
    
   #
   public function getSupplierBcode($bcode)
   {
       $this-> SupplierBcode = $supp_bcode;
   }

   public function setSupplierBcode($bcode)
   {
       $this-> SupplierBcode = $supp_bcode;
   }

       #
    public function getBcode($bcode)
    {
        $this-> bcode = $bcode;
    }

    public function setBcode($bcode)
    {
        $this-> bcode = $bcode;
    }
    #
    public function getCostPrice($cprice)
    {
        $this-> CostPrice = $cost_price;
    }

    

}