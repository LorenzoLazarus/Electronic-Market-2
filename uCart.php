<?php include 'uNavbar.php'; 
/*include_once 'CrudController.php';
$crudcontroller = new CrudController();
$result = $crudcontroller->readData();*/
?>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link href="css/dashboard.css" rel="stylesheet" type="text/css"/>
        <title>eCommerce | User Dashboard</title>
    </head>
    <body id="wrapper">

        <main role="main" >

            <h3>Recent Purchase history</h3>
            <hr>
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div card-body>
                            <div class="table-responsive">
                                <table id="datatable" style="border-radius: 5px" class="table table-dark table-hover">
                                    <thead >
                                        <tr style="border-bottom: gold 1px solid">
                                            <th scope="col">#</th>
                                            <th scope="col">Item</th>
                                            <th scope="col">Cost</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Bread</td>
                                            <td>R16</td>
                                            <td>2</td>
                                            <td>R32</td>
                                            <td><a class="btn btn-warning">edit</a> <a class="btn btn-danger">remove</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Redbull</td>
                                            <td>R32</td>
                                            <td>1</td>
                                            <td>R32</td>
                                            <td><a class="btn btn-warning">edit</a> <a class="btn btn-danger">remove</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Lays_salt&vinegar</td>
                                            <td>R19</td>
                                            <td>3</td>
                                            <td>R57</td>
                                            <td><a class="btn btn-warning">edit</a> <a class="btn btn-danger">remove</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Coke</td>
                                            <td>R22</td>
                                            <td>2</td>
                                            <td>R44</td>
                                            <td><a class="btn btn-warning">edit</a> <a class="btn btn-danger">remove</a></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">

                            <a href="scanner.php" style="width: 100%;" class="btn btn-success">Add new item</a>
                            <br>
                            <br>
                            <h2 class="card-title">Cart Summary</h2> 
                            <hr>
                            <p class="card-text">Your Total: R167</p>
                            <p class="card-text">Total VAT : R26.55</p>
                            <p class="card-text">VAT excl  : R167</p>
                            <p class="card-text">Discount  : R16.70</p>
                            <hr>
                            <p class="card-text" style="font-weight: bold;">Amount Payable: R167</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr> 

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a class="btn btn-dark" style="width: 100%; height: 50px;text-align: center2" href="#">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>

        </main>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="DataTables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>

    </body>

</html>