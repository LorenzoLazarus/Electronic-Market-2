<?php
class Products
{
    private $name;
    private $bcode;
    private $price;
    
    private $prod_type_code;
    private $prod_description;

 #
 public function getProductTypeCode($priprod_type_codece)
 {
     $this-> prProductTypeCodeice = $prod_type_code;
 }
 public function setProductTypeCode($priprod_type_codece)
 {
     $this-> prProductTypeCodeice = $prod_type_code;
 }


 public function getPrice($descr)
 {
     $this-> ProdDescription = $prod_description;
 }
 
 public function setPrice($descr)
 {
     $this-> ProdDescription = $prod_description;
 }


    #
    public function getName($name)
    {
        $this-> name = $name;
    }
    public function setName($name)
    {
        $this-> name = $name;
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
  
   # $product1 = new Product();

   # $product1->getcode(code);
}