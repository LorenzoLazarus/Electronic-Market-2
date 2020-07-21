<?php include 'uNavbar.php'; ?>
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

            <h3>My Account</h3>
            <hr>
            <div class="table-responsive">
                <table id="datatable" style="border-radius: 5px" class="table table-dark table-hover">
                    <thead >
                        <tr style="border-bottom: gold 1px solid">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">ID Number</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Arco</td>
                            <td>Theres</td>
                            <td>1234567891234</td>
                            <td>1 Test st</td>
                            <td>0787919374</td>
                            <td>Test@gmail.com</td>

                    </tbody>
                </table>
            </div>
            
            <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">                    
                            <div class="container">
                                <header>
                                    <h2>Add a product</h2>
                                    <p>Please Select the product you want to update.</p>
                                </header>
                                <form method="post" action="Includes/" class="cta">
                                    <div class="row gtr-uniform gtr-50">
                                        <div class="col-8 col-12-xsmall"><input type="text" name="Name" placeholder="Name" /></div>
                                        <br><br>
                                        <div class="col-8 col-12-xsmall"><input type="text" name="Surname" placeholder="Surname" /></div>
                                        <br><br>
                                        <div class="col-8 col-12-xsmall"><input type="text" name="ID" placeholder="ID Number" /></div>
                                        <br><br>
                                        <div class="col-8 col-12-xsmall"><input type="text" name="Address" placeholder="Adrress" /></div>
                                        <br><br>
                                        <div class="col-8 col-12-xsmall"><input type="text" name="Phone" placeholder="Phone" /></div>
                                        <br><br>
                                        <div class="col-8 col-12-xsmall"><input type="text" name="Email" placeholder="Email" /></div>
                                        
                                        <div class="col-4 col-12-xsmall">
                                            <input type="submit" name="UpdateAccount" value="Update My Account" class="fit primary" />
                                        </div>
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

</body>

</html>