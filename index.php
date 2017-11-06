<!doctype html>
<html lang="en">
  <head>
    <title>Acutioning Shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      
      
<style>
/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

    .nav-link{
        background-color: red;
    }
      </style>
  </head>
  <body>
      <div class="container">
          
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-4">
                        <h3>Acution Shop</h3>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-sm-2">
                        <ul class="nav nav-tabs card-header-tabs">
                    
                  <li class="nav-item">
                    <a class="nav-link active" href="#" onclick="document.getElementById('id01').style.display='block'" style="margin-top:4%; border:0px">Signup</a>
                  </li>
                      <li class="nav-item">
                          <a class="nav-link active" href="#" onclick="document.getElementById('id02').style.display='block'" style="margin-top:4%; border:0px;">Login</a>
                    
                  </li>
                        </ul>
                </div>
               
            </div>
              <div class="card-body">
                <h4 class="card-title"></h4>
                <p class="card-text">.</p>
                
              </div>
    </div>
  </div>
</div>  
      
      <!-- for user registration -->
      <div id="id01" class="modal">
  
  <form class="modal-content animate" action="user/userRegistration.php" method="POST">
    <div class="container">
      <h3>User Registration</h3> 
                  <div class="form-group">
                      <div class="form-group">
                    <label for="userFname">First Name</label>
                    <input type="text" class="form-control" id="userFname" name="userFname" placeholder="First Name" required>
                  </div>
                      <div class="form-group">
                    <label for="userLname">Last Name</label>
                    <input type="text" class="form-control" id="userLname" name="userLname" placeholder="Last Name" >
                  </div>
                      <div class="form-group">
                    <label for="userEmail">Email</label>
                    <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="Email" required>
                  </div>
                    <label for="userPhone">Phone Number</label>
                    <input type="number" class="form-control" id="userPhone" name="userPhone" aria-describedby="emailHelp" placeholder="Mobile Number" required>
                  </div>
                  <div class="form-group">
                    <label for="userDob">Date Of Birth</label>
                    <input type="date" class="form-control" id="userDob" name="userDob" required>
                  </div>
                 
                <button type="submit" name="submit">Submit</button>
            
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
      
  
<!-- for user Login -->      
<div id="id02" class="modal">
  
  <form class="modal-content animate" action="login/userLogin.php" method="POST">
    <div class="container">
      <h3>User Login</h3> 
                  <div class="form-group">
                      <div class="form-group">
                    <label for="userName">User Name/ Email</label>
                    <input type="text" class="form-control" id="userName" name="userName" placeholder="User Name" required>
                  </div>
                      <div class="form-group">
                    <label for="userPassword">Password</label>
                    <input type="password" class="form-control" id="userPassword" name="userPassword" placeholder="Password" required>
                  </div>
                  
                 
                <button type="submit" name="submit">Submit</button>
            
    </div>
        </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>





      
