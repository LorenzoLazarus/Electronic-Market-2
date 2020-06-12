<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eCommerce | Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

      <link rel="stylesheet" href="css/main.css">
    
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    
  
</head>
<style>

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  margin-left: 38%;
  padding: 20px;
  border: 1px solid #888;
  width: 35%;
  border-radius: 10px;
  text-align: center;
  font-size: 16px;
}
.modal-header {
  padding: 2px 16px;
  background-color: white;
  color: black;
}
.modal-header2 {
  padding: 2px 16px;
  background-color: white;
  color: black;
}

.modal2 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content2 {
  background-color: #fefefe;
  margin: auto;
  margin-left: 38%;
  padding: 20px;
  border: 1px solid #888;
  width: 35%;
  border-radius: 10px;
  text-align: center;
  font-size: 16px;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

/* The Close Button */
.close2 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.close2:hover,
.close2:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.txt2{
    text-decoration: none;
    color: black;
    font-weight: bold;
}
.txt2:hover{
    color: #0092ef;
}
</style>
<body  >

    <div class="main" style="margin: auto;">
        
           
        
        
        <div class="container2">
<div class="card card-3" >
                <div class="card-3 card-heading appointment-form"> 
                
                    <div class="card-3" style="background-color: none;" >
                        <h1 id="myBtn">About us</h1>
                 
                        </div>
                           <br>
                        <div class="card-3" style="background-color: none;" >
                        <h1 id="myBtn2">Our Services</h1>

                    </div>
                    
                </div>
            </div>
    </div>
        
        <div class="container m-l-150 " style="margin-bottom: 180px;">
            
              
        
            
    <form method="POST" class="appointment-form" id="appointment-form" >
        <h2 style="text-align: center">Account Registration Form</h2>
                <div class="form-group-1">
                    <input type="text" name="Name" id="Name" placeholder="Name" required />
                    <input type="text" name="Surname" id="Surname" placeholder="Surname" required />
                    <input type="text" name="Address" id="Address" placeholder="Address" required />
                    <input type="email" name="Email" id="email" placeholder="Email" required />
                    <input type="number" name="ContactNo" id="phone_number" placeholder="Contact Number" required />
                    <input type="text" name="ID" id="phone_number" placeholder="ID Number" required />
                    <input type="text" name="Username" id="Name" placeholder="Username" required />
                    <input type="password" name="Password" id="Name" placeholder="Password" required />
                </div>
               
                
                <div class="form-submit text-center">
                    <input type="submit" name="submit" id="submit" class="submit" value="Register For Account" />
                    <div class="text-center p-t-50" style="color: black">
						<span class="txt1">
							Already have an account?
						</span>

                    <a class="txt2" href="../Login/Login.php">
							Log in
						</a>
					</div>
                </div>
                
                 </form>
        </div>


<!-- About Us -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
      <div class="modal-header">
      <span class="close">&times;</span>
      <h2>About us</h2>
    </div>
    
    <p style="color: black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum 
          </p>
  </div>

</div>
<!-- Services -->
<div id="myModal2" class="modal2">

  <!-- Modal content -->
  <div class="modal-content2">
      <div class="modal-header2">
      <span class="close2">&times;</span>
      <h2>Our Services</h2>
    </div>
  
    <p style="color: black">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        
    </p> 
        
  </div>

</div>

    </div>
    
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script>
// Get the modal
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
///// 2
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}

</script>

</body>
</html>