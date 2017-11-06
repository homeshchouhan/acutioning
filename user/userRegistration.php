<?php

if(isset($_POST["submit"]))
{
    //echo "helo";
    require('../db/connection.php');
    
    $fname=$_POST['userFname'];
    $lname=$_POST['userLname'];
    $email=$_POST['userEmail'];
    $phone=$_POST['userPhone'];
    $dob=$_POST['userDob'];
    
    $random="asbcgb12380";
    
     $user_password=str_shuffle($random);
    
    $sql="INSERT INTO user(user_fname,user_lname,user_email,user_phone,user_dob,user_password) VALUES('$fname','$lname','$email','$phone','$dob','$user_password');";
    
    if($conn->query($sql)===TRUE)
    {
        echo "submitted";
    }
    else
    {
        echo "error";
    }
}
else
{
    echo "not";
}

?>


<!--
<!doctype html>
<html lang="en">
  <head>
    <title>Acutioning Shop</title>
    <!-- Required meta tags -->
<!--
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
      <div class="container" style="margin-top:3%;">
          
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-4" >
                        <h3>User Registration</h3>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-sm-2">
                      
                    </div>
                </div>
            <div class="col-md-8" style="background-color:white; margin-top:2%; margin-left:3%;">
               <form  method="post" action="#">
                  <div class="form-group">
                      <div class="form-group">
                    <label for="userFname">First Name</label>
                    <input type="text" class="form-control" id="userFname" fname="userFname" placeholder="First Name">
                  </div>
                      <div class="form-group">
                    <label for="userLname">Last Name</label>
                    <input type="text" class="form-control" id="userLname" lname="userLname" placeholder="Last Name">
                  </div>
                      <div class="form-group">
                    <label for="userEmail">Email</label>
                    <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="Email">
                  </div>
                    <label for="userPhone">Phone Number</label>
                    <input type="number" class="form-control" id="userPhone" name="userPhone" aria-describedby="emailHelp" placeholder="Mobile Number">
                  </div>
                  <div class="form-group">
                    <label for="userDob">Date Of Birth</label>
                    <input type="date" class="form-control" id="userDob" name="userDob" >
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                      Check me out
                    </label>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
            </div>
              <div class="card-body">
                <h4 class="card-title">Special title treatment</h4>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
    </div>
          </div>
-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <!--
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>

-->

