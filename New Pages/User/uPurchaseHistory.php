<?php include 'uNavbar.php'; ?>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link href="css/dashboard.css" rel="stylesheet" type="text/css"/>
        <title>eCommerce | Purchase history</title>
    </head>
    <body id="wrapper">

        <main role="main" >

            <h3>My Purchase history</h3>
            <hr>
            <div class="table-responsive">
                <table id="datatable" style="border-radius: 5px" class="table table-dark table-hover">
                    <thead >
                        <tr style="border-bottom: gold 1px solid">
                            <th scope="col">#</th>
                            <th scope="col">Receipt Number</th>
                            <th scope="col">Date</th>
                            <th scope="col">Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>3215446</td>
                            <td>12 April 2020</td>
                            <td>R561.95</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>665487</td>
                            <td>20 April 2020</td>
                            <td>R1245.65</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>998745</td>
                            <td>15 May 2020</td>
                            <td>R26.57</td>
                        </tr>

                    </tbody>
                </table>
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