<?php

class Dao
{

    private $server = "mysql:host=localhost;dbname=Self_Checkout";

    private $user = "root";

    private $pass = "test";

    private $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );

    public $con; //initially made is protected maybe public is better 

    /* Function for opening connection */
    public function openConnection()
    
    {
        try 
        {
            
            $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
            echo 'successfully connected'
            return $this->con;
        } 
        catch (PDOException $e) 
        {
            
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }

    /* Function for closing connection */
    public function closeConnection()
    {
        $this->con = null;
    }
}
?>