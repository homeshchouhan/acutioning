<?php

session_start();

if(isset($_SESSION['seller_id']) and isset($_SESSION['seller_name']))
{
    if(!empty($_SESSION['seller_id']))
    {
        //echo $_SESSION['seller_id'];
    }
    else
    {
        header('Location:../sell/sellFront.php');
        //echo "helo1";
        exit;
    }
}
else
{
    header('Location:../sell/sellFront.php');
    //echo "helo1";
    exit;
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
                    
                <img src="../img/auction1.jpg" class="w3-circle" alt="Norway" style="width:30%;margin-top:2%;"><h2>Sell Here</h2>
                    </div>  
                </div>
                  
              </div>
              <div class="col-md-5" style="margin-top:1%;">
                  <div class="row">
                    <h3>Welcome: <?php echo '<h2 style="text-transform:uppercase;"><br> '.$_SESSION['seller_name'].' ' ?></h3>   
                  </div>
                 
              </div>
             
             </div>
           <div class="row" style="background-color:blue;">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-10">
                      <a href="../sell/sellerProfile.php" style="color:black;">Home </a>
                      &#124;  &#124;
                      <a href="../item/showSellerItem.php" style="color:black;">Placed Items  </a> &#124;  &#124;
                <a href="../logout/logout.php" style="color:black;">Log Out</a></div>
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
                   
                 <a href="../item/addItem.php?name=tool"><img src="../img/tools.png" class="w3-circle" alt="Norway" style="width:100%;margin-top:4%;"></a> 
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
                 
                 <a href="../item/addItem.php?name=vechile"><img src="../img/selling_vehicle.png" class="w3-circle" alt="Norway" style="width:100%;margin-top:6%;"></a> 
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





      
