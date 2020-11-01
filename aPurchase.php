<?php include 'aNavbar.php'; ?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="css/dashboard.css" rel="stylesheet" type="text/css" />
    <title>Purchase</title>
</head>

<body id="wrapper">

    <main role="main">

        <h3>Purchase</h3>
        <hr>
        <div class="table-responsive">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="mt-2 mb-2 text-primary">All Purchase</h4>
                </div>
                <div class="col-lg-6">
                    <button type="button" class="btn btn-primary m-1 float-right" data-toggle="modal" data-target="#addModal"><i class="fas fa-user-plus fa-lg"></i>&nbsp;&nbsp;Add New Purchase</button>
                    <!--<a href="#" class="btn btn-success m-1 float-right"><i class="fas fa-table fa-lg">&nbsp;&nbsp;Export to Excel</i></a>-->
                </div>
            </div>

            <table id="datatable" style="border-radius: 5px" class="table table-dark table-hover">
                <thead>
                    <tr style="border-bottom: gold 1px solid">
                        <th scope="col">#</th>
                        <th scope="col">Receipt Number</th>
                        <th scope="col">Date</th>
                        <th scope="col">Cost</th>

                        <?php
                        
                        if (true){
                            while($row = mysqli_fetch_assoc($result)) {
                                 echo "Receipt Number: " . $row["ReceiptNumber"]. " - Date: " . $row["Date"]. " Cost" . $row["Cost"]. "<br>";
                                }
                            } else {
                                 echo "0 results";
                                }
                        ?>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Shoes</td>
                        <td>R150.00</td>
                        <td>1</td>
                        <td><Good/td>
                        <td>
                            <a href="#" title="View Details" class="text-success"><i class="fas fa-info-circle fa-md"></i></a>&nbsp;&nbsp;
                            <a href="#" title="Edit" class="text-primary"><i class="fa-edit fa-lg"></i></a>&nbsp;&nbsp;
                            <a href="#" title="Delete" class="text-danger"><i class="fas fa-trash-alt fa-md"></i></a>

                        </td>
                    </tr>
                    <tr>

                    </tr>
                </tbody>
            </table>
        </div>


        <div class="modal fade" id="addModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">New Purchase</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="" method="post" id="form-data">
                            <div class="form-group">
                            <a href="scanner.php">Scanner</a>
                            </div>
                        </form>
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
    
        

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>



    <!-- Data Tables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $("table").DataTable();
        });

    </script>


</body>

</html>

