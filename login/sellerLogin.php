<?php

if(isset($_POST['login']))
{
    $data_email=$_POST['seller_name'];
    $data_password=$_POST['seller_password'];
    
   //echo $data_email;
   // echo $data_password;
    
    require_once('../db/connection.php');
    
    $sql="SELECT * FROM seller WHERE seller_email='$data_email';";
    
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    
    $password=$row['seller_password'];
    $id=$row['seller_id'];
    $name=$row['seller_name'];
    //echo $password;
    if($data_password===$password)
    {
        session_start();
        $_SESSION['seller_id']=$id;
        $_SESSION['seller_name']=$name;
        header("Location:../sell/sellerProfile.php");
        exit();
       // echo "welcome";
    }
    else
    {
        echo "<script> alert('Wrong user name or Password try again');
                        window.location.href='../login/sellerLogin.php';</script>";
        exit();
    }
}

?>


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

/* Center the image and position the close button */

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

      </style>
  </head>
    
  <body>
      <div class="container-fluid" >
          
        <form class="modal-content animate" action="../login/sellerLogin.php" method="POST">
    <div class="container">
      <h3>Seller Login</h3> 
                  <div class="form-group">
                      <div class="form-group">
                    <label for="sellerName">User Name/ Email</label>
                    <input type="text" class="form-control" id="sellerName" name="seller_name" placeholder="User Name" required>
                  </div>
                      <div class="form-group">
                    <label for="sellerPassword">Password</label>
                    <input type="password" class="form-control" id="seller_password" name="seller_password" placeholder="Password" required>
                  </div>
                  
                 
                <button type="submit" name="login">LogIn</button>
            
    </div>
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





      
