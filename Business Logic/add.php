<?php
if (isset($_POST["add"])) {
    include_once 'CrudController.php';
    $crudcontroller = new CrudController();
    $result = $crudcontroller->add($_POST);
    header("Location: indexCart.php");
}
?>
<html>
<head>
<title>CRUD</title>
<!--      
delete Bootstrap --> 
<link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">

<!--      
delete above bootstrap--> 


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link href="css/dashboard.css" rel="style sheet" type="text/css"/>


<script src="crudEvent.js"></script>

</head>
<body>

    <div class="row">

        <div class="form-container">
            <form method="POST">
                <div class="form-group">
                    <div class="row">
                        <label>Title</label> <input type="text"
                            name="title" id="title" class="form-control"
                            required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label>Description</label>
                        <textarea class="form-control" id="description"
                            name="description" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label>URL</label> <input type="text" name="url"
                            id="url" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label>Category</label> <input type="text"
                            name="category" id="category"
                            class="form-control" required>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <button class="btn btn-primary" name="add">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

</body>
</html>