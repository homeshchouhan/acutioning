<?php
if(isset($_POST["submit"]))
{
    $user_id=$_POST['userName'];
    $user_password=$_POST['userPassword'];
    
    require ("../db/connection.php");
    
    $sql="SELECT * FROM user WHERE user_email='$user_id'";
    $result=$conn->query($sql);
    
    $row=$result->fetch_assoc();
    $password=$row['user_password'];
    $id=$row['user_id'];
    $fname=$row['user_fname'];
    $lname=$row['user_lname'];
   // echo $password;
    
    if($password===$user_password)
    {
        session_start();
        $_SESSION['user_id']=$id;
        $_SESSION['user_fname']=$fname;
        $_SESSION['user_lname']=$lname;
        if(isset($_SESSION['category']))
        {
            $name=$_SESSION['category'];
             header('Location:../item/showUserItem.php?name='.$name.'');
            exit();
        }
        else
        {
             header('Location:../user/userProfile.php');
            exit();
        }
       
        //echo "welcome";
    }
    else
    {
        echo "<script> alert('Wrong user name or Password try again');
                        window.location.href='../login/userLogin.php';</script>";
        exit();
    }
        
    
}
else if(isset($_GET['name']))
{
    session_start();
    $name=$_GET['name'];
    //echo $name;
    $_SESSION['category']=$name;
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
          
        <form class="modal-content animate" action="../login/userLogin.php" method="POST">
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
                  
                 
                <button type="submit" name="submit">LogIn</button>
            
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
