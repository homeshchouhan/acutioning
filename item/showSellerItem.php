<?php

session_start();

if(isset($_SESSION['seller_id']) and isset($_SESSION['seller_name'])) 
{
    require('../db/connection.php');
    
    $id=$_SESSION['seller_id'];
    
    $sql="SELECT * FROM item WHERE item_seller_id=$id";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
    }
    else
    {
        echo "<script>alert('no record found');
            window.location.href='../sell/sellerProfile.php';</script>";
    }
}
else
{
    header('Location:../sell/sellfront.php');
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
         function editItem(id){
             location.href="editItem.php?id="+id;
         }
    function deleteItem(id){
             location.href="deleteItem.php?id="+id;
         }
    function itemBuyer(id){
             location.href="itemBuyer.php?id="+id;
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
                    $status=$row['item_status'];
                    if($status==0)
                    {
                        echo '<h5 style="color:green;">Status: Available<h5>';
                        
                        echo '
                    <a href="#" class="btn btn-primary " role="button" aria-pressed="true" onclick="editItem('.$row["item_id"].')" style="margin-bottom:3%;" >Change</a>
                    
                    <a href="#" class="btn btn-primary " role="button" aria-pressed="true" onclick="deleteItem('.$row["item_id"].')" style="margin-bottom:3%">Remove</a>
                        '; 
                    }
                    
                    elseif($status==1)
                    {
                        echo '<h5 style="color:red;">Status: Booked<h5>';
                        
                         echo '
                    <a href="#" class="btn btn-primary " role="button" aria-pressed="true" onclick="itemBuyer('.$row["item_id"].')" style="margin-bottom:3%;" >Buyer</a>
                        '; 
                    }
                    else
                    {
                        echo '<h5 style="color:red;">Status:Selled<h5>';
                        
                    }
                   echo ' </div> '; 
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
