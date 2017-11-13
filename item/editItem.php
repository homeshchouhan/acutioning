<?php
session_start();
if(isset($_SESSION['seller_id']))
{
    if(isset($_GET['id']))
    {
       // echo "helo";
        require('../db/connection.php');
        $id=$_GET['id'];
        $sql="SELECT * FROM item WHERE item_id=$id;";
        $result=$conn->query($sql);
       $row=$result->fetch_assoc();
        //echo $row['item_name'];
       // echo $id;
    }
    elseif(isset($_POST['submit']))
    {
        $id=$_GET['name'];
        echo $id;
        $name=$_POST['itemName'];
        $discription=$_POST['itemDiscription'];
        $price=$_POST['itemBidPrice'];
        
        require('../db/connection.php');
        $sql="UPDATE item SET item_name='$name',item_discription='$discription',item_bid_price=$price WHERE item_id=$id;";
        
        if($conn->query($sql)===TRUE)
        {
            echo "<script>alert ('Item details updated');
                    window.location.href='../sell/sellerProfile.php';</script>";
            exit();
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
   
     
<div class="container" style="margin-top:4%;">
        <form class="modal-content animate" action="../item/editItem.php?name=<?php echo $id;?>" method="POST">
    <div class="container">
      <h3>Edit Item Details</h3>
        <hr>
        <?php  ?>
                 <div class="form-group">
                      <div class="form-group">
                    <label for="itemName">Name</label>
                    <input type="text" class="form-control" id="itemName" name="itemName" value="<?php echo $row['item_name'];?>" required>
                  </div>
                      <div class="form-group">
                    <label for="itemDiscription">Discription</label>
                    <input type="text" class="form-control" id="itemDiscription" name="itemDiscription" value="<?php echo $row['item_discription']?> " required>
                  </div>
                      
                    <label for="itemBidPrice">Set Bid Price</label>
                    <input type="number" class="form-control" id="itemBidPrice" name="itemBidPrice"  value=<?php echo $row['item_bid_price']?>  required>
                  </div>
                <button type="submit" name="submit">Submit</button>
            
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