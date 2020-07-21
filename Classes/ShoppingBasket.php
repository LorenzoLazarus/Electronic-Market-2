<?php
class ShoppingBasket
{
    private $basket_id;
    private $basket_dt;
    private $tatalcost;
    private $customerId;
    private $others;
    
    
    public function getBasketId($basket_id)
    {
        $this-> BasketId = $basket_id;
    }
    public function setBasketId($basket_id)
    {
        $this-> BasketId = $basket_id;
    }
    #
    public function getBasketDateTime($basket_dt)
    {
        $this-> BasketDT = $basket_dt;
    } 
    public function setBasketDateTime($basket_id)
    {
        $this-> BasketDT = $basket_dt;
    }
    #
    public function gettatalcost($tatalcost)
    {
        $this-> tatalcost = $tatalcost;
    }
    public function settatalcost($tatalcost)
    {
        $this-> tatalcost = $tatalcost;
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
   
    public function getOlderBaskets($others)
    {
        $this-> OlderBaskets = $others;
    }
   
}