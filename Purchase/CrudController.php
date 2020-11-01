<?php
include_once './Dao.php';

class CrudController
{

    /* Fetch All */
    public function readData()
    {
        try {
            //matlala db
            
            $dao = new Dao();
            
            $conn = $dao->openConnection();
            
            $sql = "SELECT id,title,description, url, category FROM `tb_links` ORDER BY id DESC";
            
            $resource = $conn->query($sql);
            
            $result = $resource->fetchAll(PDO::FETCH_ASSOC);
            
            $dao->closeConnection();
        } catch (PDOException $e) {
            
            echo "There is some problem in connection: " . $e->getMessage();
        }
        if (! empty($result)) {
            return $result;
        }
    }

    /* Fetch Single Record by Id */
    public function readSingle($id)
    {
        try {
            
            $dao = new Dao();
            
            $conn = $dao->openConnection();
            
            $sql = "SELECT id,title,description, url, category FROM `tb_links` WHERE id=" . $id . " ORDER BY id DESC";
            
            $resource = $conn->query($sql);
            
            $result = $resource->fetchAll(PDO::FETCH_ASSOC);
            
            $dao->closeConnection();
        } catch (PDOException $e) {
            
            echo "There is some problem in connection: " . $e->getMessage();
        }
        if (! empty($result)) {
            return $result;
        }
    }

    /* Add New Record */
    public function addProduct($formArray)
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $category = $_POST['category'];
        
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "INSERT INTO `tb_links`(`title`, `description`, `url`, `category`) VALUES ('" . $title . "','" . $description . "','" . $url . "','" . $category . "')";
        $conn->query($sql);
        $dao->closeConnection();
    }

    /* Edit a Record */
    public function editProduct($formArray)
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $category = $_POST['category'];
        
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "UPDATE tb_links SET title = '" . $title . "' , description='" . $description . "', url='" . $url . "', category='" . $category . "' WHERE id=" . $id;
        
        $conn->query($sql);
        $dao->closeConnection();
    }

    /* Delete a Record */
    public function deleteProduct($id)
    {
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "DELETE FROM `tb_links` where id='$id'";
        
        $conn->query($sql);
        $dao->closeConnection();
    }

    

    /* Add New Record */
    public function addSupplier($formArray)
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $category = $_POST['category'];
        
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "INSERT INTO `tb_links`(`title`, `description`, `url`, `category`) VALUES ('" . $title . "','" . $description . "','" . $url . "','" . $category . "')";
        $conn->query($sql);
        $dao->closeConnection();
    }

        /* Edit a Record */
    public function updateSupplier($formArray)
    {

    }
    public function deleteSupplier($Supplier_id)
    {
        
    }
        public function readInventoryLocation()
    {

    }



    /* Add New Record */
    public function addInventoryLocation($formArray)
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $category = $_POST['category'];
        
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "INSERT INTO `tb_links`(`title`, `description`, `url`, `category`) VALUES ('" . $title . "','" . $description . "','" . $url . "','" . $category . "')";
        $conn->query($sql);
        $dao->closeConnection();
    }

        /* Edit a Record */
    public function updateInventoryLocation($formArray)
    {

    }
    public function deleteInventory($Inventory_id)
    {
        
    }
        public function readAddress()
    {

    }



    /* Add New Record */
    public function addAddress($formArray)
    {
        $address = $_POST['address_id'];
        $street = $_POST['street'];
        $Suburb = $_POST['Suburb'];
        $city = $_POST['city'];
        
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "INSERT INTO Addresses(`address_id`, `Street`, `Subburb`, `city`,) VALUES ('" . $title . "','" . $description . "','" . $url . "','" . $category . "')";
        $conn->query($sql);
        $dao->closeConnection();

    }

        /* Edit a Record */
    public function updateAddress($formArray)
    {

    }
    public function deleteAddress($Inventory_id)
    {
        
    }

    public function insertPurcts()
    {
        $purchase_id = $_POST['purchase_id'];
        $scanner_code = $_POST['scanner_code'];
        $receiptNumber = $_POST['receiptNumber'];
        $Date = $_POST['Date'];
        $Cost = $_POST['Cost'];

        $dao = new Dao();
        $conn = $dao->openConnection();        
        $scanner_code = mysql_real_escape_string($scanner_code);

        $result = mysql_query("SELECT COUNT(*) AS num_rows FROM Purchase WHERE scanner_code='{$scanner_code}' LIMIT 1;");
        $row = mysql_fetch_array($result);

        if($row["num_rows"] > 0){ 
        //Send error message
        }else{
            $sql = "INSERT INTO Purchase( `scanner_code`, `receiptNumber`, `Date`,`Cost`,) VALUES ('" . $scanner_code . "','" . $receiptNumber . "','" . $Date . "','" . $Cost . "')";
            $conn->query($sql);
            $dao->closeConnection(); 
        }

    }


}

?>