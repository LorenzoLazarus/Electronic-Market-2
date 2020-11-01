<?php

class Database{
    private $dsn = "mysql:host=localhost;dbname=Self_Checkout";
    private $user = "root";
    private $pass = "";
    public $conn;
    
    public function __construct(){
        try{
            $this->conn = new PDO($this->dsn,$this->user,$this->pass);
        }
        catch(PDOException $e){
            echo $e->getMessage();
    }
    }
    
    public function  insertProduct($product_name,$product_description,$quantitiy_in_stock,$reorder_quantity,$price)
    {
        $query = "INSERT INTO product(product_name,product_description,quantitiy_in_stock,reorder_quantity,product_price) VALUES(:product_name,:product_description,:quantitiy_in_stock,:reorder_quantity,:product_price)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['product_name'=>$product_name,'product_description'=>$product_description,'quantitiy_in_stock'=>$quantitiy_in_stock,'reorder_quantity'=>$reorder_quantity,'product_price'=>$price]);
        
        return true;  
    }
    
    public function read(){
        $data = array();
        $query = "SELECT * FROM product";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt ->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row)
        {
            $data[] = $row;
        }
        return $data;
            
    }
    
    public function getUserById($id)
    {
        $query = "SELECT * FROM product WHERE product_id = :product_id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['product_id'=>$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
            
    }
    
    public function updateProducts($id,$product_name,$product_description,$quantitiy_in_stock,$reorder_quantity,$price)
    {
        $query = "UPDATE product SET product_name = :product_name, product_description = :product_description,quantitiy_in_stock = :quantitiy_in_stock,reorder_quantity = :reorder_quantity, product_price = :product_price WHERE product_id = :product_id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['product_name'=>$product_name,'product_description'=>$product_description,'quantitiy_in_stock'=>$quantitiy_in_stock,'reorder_quantity'=>$reorder_quantity,'product_price'=>$price,'product_id'=>$id]);
        return true; 
    }
    
    public function deleteProduct($id)
    {
        $query = "DELETE FROM product WHERE product_id = :product_id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['product_id'=>$id]);
        return true;
            
    }
    
    
    public function totalRowCount(){
        $query = "SELECT * FROM product";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $t_rows = $stmt->rowCount();
        
        return $t_rows;
    }
  // Insert into Cart table
  public function  InsertToCArt($product_id,$product_name,$quantitiy,$price)
  {
      $query = "INSERT INTO Cart(product_id,product_name,quantitiy,product_price) VALUES(:product_name,:product_description,:quantitiy_in_stock,:reorder_quantity,:product_price)";
      $stmt = $this->conn->prepare($query);
      $stmt->execute(['product_id'=>$product_id,'product_name'=>$product_name,'quantitiy'=>$quantitiy,'product_price'=>$price]);
      
      return true;  
  }
    // cart details ******
    public function GetCartInfo(){
        $query = "SELECT product_id, product_name, quantity, cost, line_total FROM CartInfo";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $t_rows = $stmt->rowCount();
        
        return $t_rows;
        /// call empty cart method
    }
    // empty cart so we have a new entry on new buy/scan
}
$dB = new Database();


?>
