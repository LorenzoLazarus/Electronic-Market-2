
<?php
class BasketItems
{
    private $basket_id;
    private$bcode;
  

    public function getBasketId($basket_id)
    {
        $this-> BasketId = $basket_id;
    }
    public function setBasketId($basket_id)
    {
        $this-> BasketId = $basket_id;
    }

    public function getBcode($bcode)
    {
        $this-> bcode = $bcode;
    }

    public function setBcode($bcode)
    {
        $this-> bcode = $bcode;
    }
}