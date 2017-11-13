<?php
session_start();
if(isset($_SESSION['seller_id']))
{
    if(isset($_GET['id']))
    {
        echo "hw";
        require('../db/connection.php');
        $item_id=$_GET['id'];
        $sql="SELECT * FROM item WHERE item_id=$item_id";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        echo "ha";
        $buyer_id=$row['item_buyer_id'];
        $buyer_price=$row['item_buyer_price'];
        echo $buyer_id;
        $sql="SELECT * FROM user WHERE user_id=$buyer_id;";
        $result=$conn->query($sql);
        //$row=$result->fetch_assoc();
        //echo $row['user_fname'];
        
    }
    
    else if(isset($_GET['confrm']))
    {
       // echo "hello";
       $id=$_GET['confrm'];
        require('../db/connection.php');
        $sql="UPDATE item SET item_status=2 WHERE item_id=$id";
        if($conn->query($sql)===TRUE)
        {
            echo "<script> alert('Item selled');
                window.location.href='../sell/sellerProfile.php';</script>";
        }
    }
    elseif(isset($_GET['remove']))
    {
        $id=$_GET['remove'];
        require('../db/connection.php');
        $sql="UPDATE item SET item_status=0,item_buyer_id=0 WHERE item_id=$id";
        if($conn->query($sql)===TRUE)
        {
            echo "<script> alert('Item Not Selled');
                window.location.href='../sell/sellerProfile.php';</script>";
        }
    }
}
else
{
    header('Location:../sell/sellFront.php');
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
         function orderConfrm(confrm){
             location.href="itemBuyer.php?confrm="+confrm;
         }
    function orderRemove(remove){
             location.href="itemBuyer.php?remove="+remove;
         }
   
</script>  
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
                       <a href="../sell/sellerProfile.php" style="color:black;">Home </a> &#124;  &#124;
                      <a href="../item/showSellerItem.php" style="color:black;">Placed Items  </a> &#124; &#124;
                <a href="../logout/logout.php" style="color:black;">Log Out</a></div>
              </div>
          
 </div>       
   
      
      
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <?php  
                $row=$result->fetch_assoc();
                        
                      //  echo $row['user_fname'];
                    echo ' 
                    <div class="col-md-4" style="background-color:#f5f5f0;margin-top:5%;">
                            
                               <p> <h5>Buyer Name: '.$row["user_fname"].'</h5>
                                <h5>Email: '.$row["user_email"].'</h5>
                                <h5>Mobile Number: '.$row["user_phone"].'</h5>
                                <h5>Price Set By Buyer: Rs. '.$buyer_price.'/</h5>
                    ';
                        echo '
                    <a href="#" class="btn btn-primary " role="button" aria-pressed="true" onclick="orderConfrm('.$item_id.')" style="margin-bottom:3%;" >Agree</a>
                        '; 
                        
                         echo '
                    <a href="#" class="btn btn-primary " role="button" aria-pressed="true" onclick="orderRemove('.$item_id.')" style="margin-bottom:3%;" >Not Agree</a>
                   </div>
                        '; 
    ?>

      </div>
    </div>