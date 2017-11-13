<?php
session_start();
if(isset($_SESSION['user_id']) and isset($_SESSION['user_fname']))
{
    
}
else
{
    header('Location:../index.php');
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
          
        <div class="card" style="border:none;">
            <div class="card-header" style="background-image: url('../img/buy.jpg'); margin-top:2%;">
                <div class="row">
                    <div class="col-sm-6">
                         <div class="w3-container" >
                    
                <img src="../img/auction1.jpg" class="w3-circle" alt="Norway" style="width:30%;margin-top:2%;"><h2 style="color:white;">Acution Shop<br> </h2><h4 style="color:white;">Buy Here</h4>
                    </div> 
                         
                  
                  <div class="col-sm-10" style="color:red; margin-left:50%;margin-top:-5%;">
                       <a href="../user/userProfile.php" style="color:red;" >Home </a> &#124;  &#124;
                      <a href="../item/placedOrder.php" style="color:red;">Order Placed </a> &#124; &#124;
                <a href="../logout/logout.php" style="color:red;">Log Out</a></div>
                </div>
                    <div class="col-sm-5">
                        <h3 style="color:white;">Welcome:</h3>
                        <div class="row">
                          
                            <div class="col-sm-5" style="text-transform:uppercase;color:white;margin-left:23%;">
                                
                               <h3 ><?php echo $_SESSION['user_fname'] ;?> </h3>
                                    
                            </div>
                        </div>
                            
                    
                    </div>
                    <div class="col-sm-1">
                        <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                          <a class="nav-link active" href="../logout/logout.php"  style="margin-top:4%; border:0px;">Log Out</a>
                    
                  </li>
                        </ul>
                </div>
               
            </div>
               
           </div>
        </div>
             
 </div>
      <h3 style="background-color:red; color:white; text-align:center; margin-top:1%;"> BUY NOW OR CRY LATER!!! CHOICE IS YOURS!!!</h3>
<div class="container-fluid">
    <div class="row">
      <div class="col-md-4" style="background-color:#f5f5f0;margin-top:2%;height:380px;">
                <div class="w3-container">
                 
                 <a href="../item/showUserItem.php?name=house"><img src="../img/house1.jpg" class="w3-circle" alt="Norway" style="width:100%;margin-top:5%;"></a> 
                    </div>
              </div>
              <div class="col-xl-4"  style="background-color:#f5f5f0;margin-top:2%;height:380px;">
                <div class="w3-container" >
                 
                 <a href="../item/showUserItem.php?name=electronic"><img src="../img/electronics.jpg" class="w3-circle" alt="Norway" style="width:100%;margin-top:6%;"></a> 
                    </div>
              </div>
              <div class="col-xl-4"  style="background-color:#f5f5f0;margin-top:2%; height:380px;">
                <div class="w3-container" >
                   
                 <a href="../item/showUserItem.php?name=tool"><img src="../img/tools.png" class="w3-circle" alt="Norway" style="width:100%;margin-top:4%;"></a> 
                    </div>
              </div>
      </div>
    </div>
     
<div class="container-fluid">
    <div class="row">
      <div class="col-md-4" style="background-color:#f5f5f0;margin-top:2%;height:380px;">
                <div class="w3-container">
                 
                 <a href="../item/showUserItem.php?name=furniture"><img src="../img/furniture.jpg" class="w3-circle" alt="Norway" style="width:100%;margin-top:5%;"></a> 
                    </div>
              </div>
              <div class="col-xl-4"  style="background-color:#f5f5f0;margin-top:2%;height:380px;">
                <div class="w3-container" >
                 
                 <a href="../item/showUserItem.php?name=vehicle"><img src="../img/buy_car.jpg" class="w3-circle" alt="Norway" style="width:100%;margin-top:6%;"></a> 
                    </div>
              </div>
              <div class="col-xl-4"  style="background-color:#f5f5f0;margin-top:2%; height:380px;">
                <div class="w3-container" >
                   
                 <a href="../item/showUserItem.php?name=tool"><img src="../img/tools.png" class="w3-circle" alt="Norway" style="width:100%;margin-top:4%;"></a> 
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
