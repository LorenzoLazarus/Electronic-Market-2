<?php include 'aNavbar.php'; ?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link href="css/dashboard.css" rel="stylesheet" type="text/css" />
    <title>eCommerce | Product Management</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css" />
</head>

<body id="wrapper">
    <main role="main">

        <h3>Product Management</h3>
        <hr>
        <div class="table-responsive" id="ShowProduct">


        </div>
        <!-- Add new product -->
        <div class="modal fade" id="addModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Product</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="" method="post" id="form-data">
                            <div class="form-group">
                                <input type="text" name="fname" class="form-control mt-3" placeholder="Product Name" required>
                                <input type="text" name="fdescription" class="form-control mt-3" placeholder="Product Description" required>
                                <input type="text" name="fqtyinStock" class="form-control mt-3" placeholder="Product Quantity" required>
                                <input type="text" name="freorderQuantity" class="form-control mt-3" placeholder="Reorder Quantity" required>
                                <input type="text" name="fprice" class="form-control mt-3" placeholder="Product Price" required>
                                <div class="form-group">
                                    <input type="submit" name="insert" id="insert" value="Add Product" class="btn btn-danger btn-block mt-4">
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>

        <!-- Edit product -->
        <div class="modal fade" id="editModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Product</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="" method="post" id="edit-form-data">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <input type="text" name="fname" class="form-control mt-3" id="fname" required>
                                <input type="text" name="fdescription" class="form-control mt-3" id="fdescription" required>
                                <input type="text" name="fqtyinStock" class="form-control mt-3" id="fqtyinStock" required>
                                <input type="text" name="freorderQuantity" class="form-control mt-3" id="freorderQuantity" required>
                                <input type="text" name="fprice" class="form-control mt-3" id="fprice" required>
                                <div class="form-group">
                                    <input type="submit" name="update" id="update" value="Update Product" class="btn btn-primary btn-block mt-4">
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </main>





    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



    <!-- Data Tables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            showAllProducts();

            function showAllProducts() {
                $.ajax({
                    url: "action.php",
                    type: "POST",
                    data: {
                        action: "view"
                    },
                    success: function(response) {
                        //console.log(response);
                        $("#ShowProduct").html(response);
                        $("table").DataTable({
                            order: [0, 'asc']
                        });
                    }
                });
            }
            //insert ajax request
            $("#insert").click(function(e) {
                if ($("#form-data")[0].checkValidity()) {
                    e.preventDefault();
                    $.ajax({
                        url: "action.php",
                        type: "POST",
                        data: $("#form-data").serialize() + "&action=insert",
                        success: function(response) {
                            Swal.fire({
                                title: 'User added succesfully!',
                                icon: 'success'
                            })
                            $("#addModal").modal('hide');
                            $("#form-data")[0].reset();
                            showAllProducts();
                        }
                    });
                }

            });
            //Edit Product
            $("body").on("click", ".editBtn", function(e) {
                e.preventDefault();
                edit_id = $(this).attr('id');
                $.ajax({
                    url: "action.php",
                    type: "POST",
                    data: {
                        edit_id: edit_id
                    },
                    success: function(response) {
                        data = JSON.parse(response);
                        $("#id").val(data.product_id);
                        $("#fname").val(data.product_name);
                        $("#fdescription").val(data.product_description);
                        $("fqtyinStock").val(data.quantitiy_in_stock)
                        $("freorderQuantity").val(data.reorder_quantity)
                        $("#fprice").val(data.product_price);

                    }
                });
            });
            //update ajax request
            $("#update").click(function(e) {
                if ($("#edit-form-data")[0].checkValidity()) {
                    e.preventDefault();
                    $.ajax({
                        url: "action.php",
                        type: "POST",
                        data: $("#edit-form-data").serialize() + "&action=update",
                        success: function(response) {
                            Swal.fire({
                                title: 'User updated succesfully!',
                                icon: 'success'
                            })
                            $("#editModal").modal('hide');
                            $("#edit-form-data")[0].reset();
                            showAllProducts();
                        }
                    });
                }

            });

            //delete ajax request
            $("body").on("click", ".delBtn", function(e) {
                e.preventDefault();
                var tr = $(this).closest('tr');
                del_id = $(this).attr('id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                         $.ajax({
                             url: "action.php",
                             type:"POST",
                             data:{del_id:del_id},
                             success:function(response){
                                 tr.css('background-color','#ff6666')
                                 Swal.fire(
                                 'Deleted!',
                                 'User deleted successfully!','success')
                                 showAllProducts();
                             }
                         });
                    }
                    
                });

            });
            //show user details
            $("body").on("click", ".infoBtn", function(e){
               e.preventDefault();
                info_id = $(this).attr('id');
                $.ajax({
                    url:"action.php",
                    type:"POST",
                    data:{info_id:info_id},
                    success:function(response){
                        //console.log(response);
                        data = JSON.parse(response);
                        Swal.fire({
                            title:'<strong>Product Info : ID('+data.product_id+')</strong>',
                            type: 'info',
                            html: '<b>Product Name :</b> '+data.product_name+'<br><b>Product Description :</b> '+data.product_description+'</br><b>Quantity in Stock :</b> '+data.quantitiy_in_stock+'<br><b>Reorder Quantity :</b> '+data.reorder_quantity+'<br><b>Price</b> R'+data.product_price,
                        });
                        
                    }
                    
                    
                });
                
            });
        });

    </script>
</body>

</html>
