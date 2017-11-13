<?php
session_start();
if(isset($_SESSION['user_id']) and isset($_SESSION['user_fname']))
{
    if(isset($_GET['id']))
    {
        require('../db/connection.php');
        $item_id=$_GET['id'];
        $sql="SELECT * FROM item WHERE item_id=$item_id";
        $result=$conn->query($sql);
        $row_item=$result->fetch_assoc();
        
        $item_seller_id=$row_item['item_seller_id'];
        
        $sql="SELECT * FROM seller WHERE seller_id=$item_seller_id";
        $result=$conn->query($sql);
        $row_seller=$result->fetch_assoc();
    }
    elseif(isset($_GET['name']) and isset($_POST['buy']))
    {
        echo "helo";
          $price=$_POST['userPrice'];
        $item_id=$_GET['name'];
            echo $price;
        $buyer_id=$_SESSION['user_id'];
        require('../db/connection.php');
        
        $sql="UPDATE item SET item_buyer_id=$buyer_id,item_buyer_price=$price, item_status=1 WHERE item_id=$item_id; ";
            
            if($conn->query($sql)===TRUE)
            {
                echo" <script>alert ('order placed succesfully we will contact you soon');
                window.location.href='../user/userProfile.php';
                </script>";
            }
        else
        {
             echo" <script>alert ('Some error occur Please try again');
                window.location.href='../user/userProfile.php';
                </script>";
        }
        
    }
    else if(isset($_GET['nameItem']))
    {
            $buyer_id=$_SESSION['user_id'];
            $item_id=$_GET['nameItem'];
        
            require('../db/connection.php');
        
        $sql="UPDATE item SET item_buyer_id=$buyer_id WHERE item_id=$item_id; ";
            
            if($conn->query($sql)===TRUE)
            {
                echo" <script>alert ('Item added to cart');
                window.location.href='../user/userProfile.php';
                </script>";
            }
        else
        {
             echo" <script>alert ('Some error occur Please try again');
                window.location.href='../user/userProfile.php';
                </script>";
        }
    }
}
else
{
    header('Location:../index.php');
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
      
    function addItemCart(id){
             location.href="buyItem.php?nameItem="+id;
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
        </div>   
                 
            </div>
                      </div>
    </div>
      
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <?php  
                echo ' 
                    <div class="col-md-4" style="background-color:#f5f5f0;margin-top:6%;">
                            
                               <p> <h5>Item Name: '.$row_item["item_name"].'</h5>
                                <h5>Discription: '.$row_item["item_discription"].'</h5>
                                <h5>Bid Price: Rs. '.$row_item["item_bid_price"].'/</h5>
                                <h5>Category: '.$row_item['item_category'].'</h5>
                    ';
                        
                    echo '<h4> Seller Details:</h4>';
                    echo'
                            <p> <h5>Seller Name: '.$row_seller["seller_name"].'</h5>
                                <h5>Email: '.$row_seller["seller_email"].'</h5>
                                <h5>Mobile Number: '.$row_seller["seller_phone"].'</h5>
                    ';
                    ?>
                   <h5 style="color:green;margin-top:5%;">Set A Price on Which You want to Buy this Item in Rupess:-</h5>
               
  
                <form class="modal-content animate" action="../item/buyItem.php?name=<?php echo $item_id;?>" method="POST"
                      style="border:none;background-color:#f5f5f0;">

                  <div class="form-group">
                      <div class="form-group">
                    <input type="number" class="form-control"  name="userPrice" placeholder="Enter Your Price" required>
                  </div>   
                       <button class="btn btn-primary " role="button"  type="submit" name="buy">Buy Now</button>
                         
                        <a href="#" class="btn btn-primary " role="button" aria-pressed="true" onclick="addItemCart(<?php echo $row_item["item_id"];?>)"  >Add To Cart</a>

                </div>
        </form>
    </div>
      </div>
     



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
