<?php

session_start();

if(isset($_SESSION['user_id']) and isset($_SESSION['user_fname'])) 
{
            require('../db/connection.php'); 
            if(isset($_GET['name']))
            {
                $item_id=$_GET['name'];
                $sql="UPDATE item SET item_buyer_id=0 WHERE item_id=$item_id";
                if($conn->query($sql)===TRUE)
                {
                    echo" <script> alert('Item removed from cart');</script>";
                }
                    
            }
            
            $id=$_SESSION['user_id'];
            $sql="SELECT * FROM item WHERE item_buyer_id=$id";
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
            }
           
            else
            {
                echo"<script> alert('No order placed yet');
                    window.location.href='../user/userProfile.php';
                </script>";
                }
}
else
{
    //echo "helo";
   header('Location:../login/userLogin.php');
    exit();
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
      
<script>
         function BuyItem(id){
             location.href="buyItem.php?id="+id;
         }
    function removeItemCart(name){
             location.href="placedOrder.php?name="+name;
         }
</script>  
  </head>
    
  <body>
      <div class="container-fluid" >
              
                      <div class="card" style="border:none;">
            <div class="card-header" style="background-image: url('../img/buy.jpg'); margin-top:2%;">
                <div class="row">
                    <div class="col-sm-7">
                         <div class="w3-container" >
                <img src="../img/auction1.jpg" class="w3-circle" alt="Norway" style="width:30%;margin-top:2%;"><h2 style="color:white;">Acution Shop<br> </h2><h4 style="color:white;">Buy Here</h4>
                        </div>  
                        <div class="col-sm-10" style="color:red; margin-left:50%;margin-top:-5%;">
                       <a href="../user/userProfile.php" style="color:red;" >Home </a> &#124;  &#124;
                      <a href="../item/placedOrder.php" style="color:red;">Order Placed </a> &#124; &#124;
                <a href="../logout/logout.php" style="color:red;">Log Out</a></div>
                    </div>
                    <div class="col-md-4" style="margin-top:1%;">
                  <div class="row" style="color:white;">
                    <h3>Welcome: <?php echo '<h2 style="text-transform:uppercase;"><br> '.$_SESSION['user_fname'].' ' ?></h3>   
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
      
<div class="container-fluid">
    <div class="row">
        <?php  
 
                while($row=$result->fetch_assoc())
                {
                    echo ' 
                    <div class="col-md-4" style="background-color:#f5f5f0;margin-top:1%;">
                            
                               <p> <h5>Item Name: '.$row["item_name"].'</h5>
                                <h5>Discription: '.$row["item_discription"].'</h5>
                                <h5>Bid Price: Rs. '.$row["item_bid_price"].'/</h5>
                                <h5>Category: '.$row['item_category'].'</h5>
                    ';
                    $seller_id=$row['item_seller_id'];
                    $sql_seller="SELECT * FROM seller WHERE seller_id=$seller_id";
                    $result_seller=$conn->query($sql_seller);
                    $row_seller=$result_seller->fetch_assoc();
                    
                    echo '
                            <p> <h5>Seller Name: '.$row_seller["seller_name"].'</h5>
                                <h5>Email: '.$row_seller["seller_email"].'</h5>
                                <h5>Mobile Number: '.$row_seller["seller_phone"].'</h5>
                    ';
                    $status=$row['item_status'];
                    if($status==2)
                    {
                        echo '<h5 style="color:green;">Status: Received<h5>';
                        
                    }
                    else
                    {
                        echo '<h5 style="color:blue;">Status: Added to Cart<h5>';
                        echo'<a href="#" class="btn btn-primary " role="button" aria-pressed="true" onclick="BuyItem('.$row["item_id"].')" style="margin-bottom:3%;" >Buy Now</a>
                        
                        <a href="#" class="btn btn-primary " role="button" aria-pressed="true" onclick="removeItemCart('.$row["item_id"].')" style="margin-bottom:3%;" >Remove From Cart</a>
                        ';
                    }
                   echo '  </div>'; 
                }
    ?>

      </div>
    </div>
     



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
