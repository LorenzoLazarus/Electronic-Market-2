<?php include 'aNavbar.php'; ?>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link href="css/dashboard.css" rel="stylesheet" type="text/css"/>
        <title>eCommerce |Manager Accounts</title>
    </head>
    <body id="wrapper">

        <main role="main" >

            <h3>Clients</h3>
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
                            <td>Lorenzo</td>
                            <td>Lazarus</td>
                            <td>1234567891234</td>
                            <td>2 Test st</td>
                            <td>0681263258</td>
                            <td>2Test@gmail.com</td>
                        </tr>
                        <tr>

                        </tr>
                        <tr>

                        </tr>
                        <tr>

                        </tr>
                        <tr>

                        </tr>
                    </tbody>
                </table>
            </div>

            <br><br>

            <div class="col-4 col-12-xsmall">
                <input type="submit" name="AddManager" value="Add Manager" class="fit primary" />
            </div>
            
            <br><br>

            <div class="col-4 col-12-xsmall">
                <input type="submit" name="UpdateManager" value="Update Manager" class="fit primary" />
            </div>

            <br><br>

            <div class="col-4 col-12-xsmall">
                <input type="submit" name="AddManager" value="Delete Manager" class="fit primary" />
            </div>

        </main>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="DataTables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>

    </body>

</html>
