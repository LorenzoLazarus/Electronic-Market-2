<?php
    
//Reading Product Table from Database
    require_once 'dataHandler.php';
    $dB = new Database();
    if(isset($_POST['action']) && $_POST['action']=="view")
    {
        $output = '            
        <div class="row">
                <div class="col-lg-6">
                    <h4 class="mt-2 mb-2 text-primary">All Products</h4>
                </div>
                <div class="col-lg-6">
                    <button type="button" class="btn btn-primary m-1 float-right" data-toggle="modal" data-target="#addModal"><i class="fas fa-user-plus fa-lg"></i>&nbsp;&nbsp;Add New Product</button>
                    <!--<a href="#" class="btn btn-success m-1 float-right"><i class="fas fa-table fa-lg">&nbsp;&nbsp;Export to Excel</i></a>-->
                </div>
        </div>';
        $data=$dB->read();
        if($dB->totalRowCount()>0){
            $output .= '
            <table id="datatable" style="border-radius: 5px" class="table table-dark table-hover">
                <thead class="text-center">
                    <tr style="border-bottom: gold 1px solid">
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Description</th>
                        <th scope="col">Quantitiy in Stock</th>
                        <th scope="col">Reorder Quantity</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Modify</th>
                    </tr>
                </thead>
                <tbody>';
                foreach($data as $row)
                {
                    $output .= '<tr class="text-center text secondary">
                    <td>' .$row['product_id'].'</td>
                    <td>' .$row['product_name'].'</td>
                    <td>' .$row['product_description'].'</td>
                    <td>' .$row['quantitiy_in_stock'].'</td>
                    <td>' .$row['reorder_quantity'].'</td>
                    <td>R' .$row['product_price'].'</td>
                        <td>
                            <a href="#" title="View Details" class="text-success infoBtn" id="'.$row['product_id'].'"><i class="fas fa-info-circle fa-md"></i></a>&nbsp;&nbsp;
                            
                            <a href="#" title="Edit" class="text-primary editBtn" data-toggle = "modal" data-target="#editModal" id="'.$row['product_id'].'"><i class="fas fa-edit fa-md"></i></a>&nbsp;&nbsp;
                            
                            <a href="#" title="Delete" class="text-danger delBtn" id="'.$row['product_id'].'"><i class="fas fa-trash-alt fa-md"></i></a>
                        </td></tr>';
                }
            $output .= '</tbody></table>';
            echo $output;
        }
        else{
            echo '<h3 class="text-center text-secondary mt-5">:( No products present in the database</h3>)';
        }
    }

    if(isset($_POST['action']) && $_POST['action'] == "insert")
    {
        $fname = $_POST['fname'];
        $fdescription = $_POST['fdescription'];
        $fqtyinStock = $_POST['fqtyinStock'];
        $freorderQuantity = $_POST['freorderQuantity'];
        $fprice = $_POST['fprice'];
        
        $dB->insertProduct($fname,$fdescription,$fqtyinStock,$freorderQuantity,$fprice);
    }

    if(isset($_POST['edit_id'])){
        $id = $_POST['edit_id'];
        
        $row = $dB->getUserById($id);
        echo json_encode($row);
    }

if(isset($_POST['action']) && $_POST['action'] == "update"){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $fdescription = $_POST['fdescription'];
    $fqtyinStock = $_POST['fqtyinStock'];
    $freorderQuantity = $_POST['freorderQuantity'];
    $fprice = $_POST['fprice'];
    
    $dB->updateProducts($id,$fname,$fdescription,$fqtyinStock,$freorderQuantity,$fprice);
}

if(isset($_POST['del_id'])){
    $id = $_POST['del_id'];
    
    $dB->deleteProduct($id);
}

if(isset($_POST['info_id'])){
    $id = $_POST['info_id'];
    
    $row = $dB->getUserById($id);
    echo json_encode($row);
}

//Reading Customer Table from Database



?>
