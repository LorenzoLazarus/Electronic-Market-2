<?php

?>
  <head>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <style>
      #logout.nav-link:hover{
          color: red;
      }
  </style>
  <body>
		
      <div class="wrapper d-flex align-items-stretch" style="background-color: #whitesmoke">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(Media/default_user.jpg);"></a>
                                <hr style="border: solid 0.6px #ff8417">
                                <span style="text-align: center;"><h1 style="font-size: 35px;color: whitesmoke;font-weight: bold;">eCommerce</h1></span>                                                                    					
                                <hr style="border: solid 0.6px #ff8417">
                                 <hr style="border: solid 0.5px #ff8417">
                                <span style="text-align: center;"><h1 style="font-size: 25px;color: #ff8417;">User</h1></span>                                                                    					
                                <hr style="border: solid 0.5px #ff8417">
                                <br>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
                      <a href="uDashboard.php" >Home</a>
	            
	          </li>
                  <li>
                    <a href="#">Manage My Account</a>
                </li> 
                <li>
                    <a href="#">My purchase history</a>
                </li>
                   
                  <li>
	              <a href="#Stock" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Our products</a>
                      <ul class="collapse list-unstyled" id="Stock">
                <li>
                    <a href="#">View all products</a>
                </li>               
                <li>
                    <a href="#">View my Most popular products</a>
                </li>                                                
	            </ul>
	          </li>	  
                   <li>
                       <a href="#">View Purchase History</a>              
	          </li>                  
	          <li>
                      <a href="#">FAQ</a>
	          </li>                                     
	        </ul>
                                
                                <br>
                                <br>
                                <br>
                                
	      </div>
    	</nav>

        <!-- Page Content  -->
      <div  id="content" class="p-4 p-md-5">

          <nav style="border-radius: 20px;" class="navbar navbar-light navbar-expand-lg  bg-secondary">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
              
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a style="color: whitesmoke;" id="logout" class="nav-link" href="Login/Login.php">Logout</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>

      
       
        
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
