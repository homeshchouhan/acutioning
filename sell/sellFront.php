<?php
session_start();
if(isset($_SESSION['seller_id']))
{
    header('Location:../sell/sellerProfile.php');
    exit();
}
else
{
   // echo "not set0";
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
      
      
  </head>
    
  <body>
      <div class="container-fluid" >
          <div class="row" style="background-color:blue;">
              <div class="col-md-7">
                  <div class="col-sm-6">
                         <div class="w3-container" >
                    
                <img src="../img/auction1.jpg" class="w3-circle" alt="Norway" style="width:35%;margin-top:2%;"><h2>Sell Here</h2>
                    </div>  
                </div>
                  
              </div>
              <div class="col-md-5" style="margin-top:1%;">
                  <div class="row">
                    <p>Login</p>
                      <a href="" style="margin-left:50%;color:red;">Forgot Password</a>
                  </div>
                  <form action="../login/sellerLogin.php" method="POST" style="margin-bottom:1%;">
                    <input type="text" name="seller_name" placeholder="user name">
                      <input type="password" name="seller_password" placeholder="password">
                      <button type="submit" name="login" style="background-color:yellow;">Login</button>
                  </form>
              </div>
             </div>
          
          <div class="row" style="background-color:yellow;">
               <div class="col-md-3" style="margin-top:3%;">
              <h2 style="margin-bottom:-2%;margin-left:5%;">STAY HOME AND</h2> <br> 
                <h2 style="margin-bottom:-2%;margin-left:8%;">SELL ONLINE</h2> <br>   
                
                   <h5 style="margin-left:8%;">YOU'RE TOO PRETTY <br>
                  <h5 style="margin-left:6%;">TO HAVE TO LOOK FOR<br>
                        <h5 style="margin-left:9%;"> A PARKING SPOT</h5></h5>
                 </h5>
                   </div>
                <div class="col-md-5" style="margin-top:3%;">
                 <img src="../img/selling.jpg" style="width:100%;"> 
                  </div>
              
              <div class="col-md-4" style="margin-top:2%; margin-bottom:2%;">
                  <form class="modal-content animate" action="../db/sellerRegistration.php" method="POST">
                <div class="container"  style="margin-bottom:2%;">
                        <h3>Register Yourself</h3> 
                  
                      <div class="form-group">
                    <input type="text" class="form-control" id="sellerName" name="sellerName" placeholder="Name" required>
                  </div>
                      <div class="form-group">
                    <input type="email" class="form-control" id="sellerEmail" name="sellerEmail" placeholder="Email" required>
                  </div>
                      <div class="form-group">
                    <input type="number" class="form-control" id="sellerPhone" name="sellerPhone" aria-describedby="emailHelp" placeholder="Mobile Number" required>
                  </div>
                 
                <button type="submit" name="submit">Submit</button>
            
            </div>
                  </form>
        </div>       
    </div>

          
          <div class="row" style="background-color:blue;">
               <div class="col-md-12">
                lpu
              </div>
            
          </div>
 </div>
      
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-4" style="background-color:#f5f5f0;margin-top:2%;height:380px;">
                <div class="w3-container">
                 
                 <a href="../item/addItem.php?name=house"><img src="../img/house1.jpg" class="w3-circle" alt="Norway" style="width:100%;margin-top:5%;"></a> 
                    </div>
              </div>
              <div class="col-xl-4"  style="background-color:#f5f5f0;margin-top:2%;height:380px;">
                <div class="w3-container" >
                 
                 <a href="../item/addItem.php?name=electronic"><img src="../img/electronics.jpg" class="w3-circle" alt="Norway" style="width:100%;margin-top:6%;"></a> 
                    </div>
              </div>
              <div class="col-xl-4"  style="background-color:#f5f5f0;margin-top:2%; height:380px;">
                <div class="w3-container" >
                   
                 <a href="../item/addItem.php?name=tools"><img src="../img/tools.png" class="w3-circle" alt="Norway" style="width:100%;margin-top:4%;"></a> 
                    </div>
              </div>
      </div>
    </div>
     
<div class="container-fluid">
    <div class="row">
      <div class="col-md-4" style="background-color:#f5f5f0;margin-top:2%;height:380px;">
                <div class="w3-container">
                 
                 <a href="../item/addItem.php?name=furniture"><img src="../img/furniture.jpg" class="w3-circle" alt="Norway" style="width:100%;margin-top:5%;"></a> 
                    </div>
              </div>
              <div class="col-xl-4"  style="background-color:#f5f5f0;margin-top:2%;height:380px;">
                <div class="w3-container" >
                 
                 <a href="../item/addItem.php?name=vechiles"><img src="../img/selling_vehicle.png" class="w3-circle" alt="Norway" style="width:100%;margin-top:6%;"></a> 
                    </div>
              </div>
              <div class="col-xl-4"  style="background-color:#f5f5f0;margin-top:2%; height:380px;">
                <div class="w3-container" >
                   
                 <a href="../item/addItem.php?name=tool"><img src="../img/tools.png" class="w3-circle" alt="Norway" style="width:100%;margin-top:4%;"></a> 
                    </div>
              </div>
      </div>
    </div>

      


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>





      
