<?php
class Customer
{
    private $invloc_id;
    private $product_id;
    private $location_addr;
    private $quant_stock;
    private $record_lev;
    private $reorder_quant;
    
    
    public function getInvlocId($InID)
    {
        $this-> Inventoryid = $invloc_id;
    }
    
    public function setInvlocId($InID)
    {
        $this-> Inventoryid = $invloc_id;
    }
    #
    public function getProductID($pid)
    {
        $this-> productId= $product_id;
    }

    public function setProductID($pid)
    {
        $this-> productId= $product_id;
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
    #
    public function getRecordLevel($reclvl)
    {
        $this-> Reclevel = $record_lev;
    }
    public function setRecordLevel($reclvl)
    {
        $this-> Reclevel = $record_lev;
    }
    #
    public function getRecordOrder($record)
    {
        $this-> RecOrd = $reorder_quant;
    }
    public function setRecordOrder($record)
    {
        $this-> RecOrd = $reorder_quant;
    }
   #
   public function getlocationAddress($LocAd)
    {
        $this-> LOcationAdr = $location_addr;
    }
    public function setlocationAddress($LocAd)
    {
        $this-> LOcationAdr = $location_addr;
    }
   
}