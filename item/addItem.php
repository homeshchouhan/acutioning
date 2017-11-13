<?php
session_start();
if(isset($_SESSION['seller_id']))
{
   $id=$_SESSION['seller_id'];
   // echo $id;
        if(!empty($_GET['name']))
        {
            $_SESSION['category']=$_GET['name'];
        }
        else if(isset($_POST['submit']))
        {
            $name=$_POST['itemName'];
            $discription=$_POST['itemDiscription'];
            $price=$_POST['itemBidPrice'];
            $category=$_SESSION['category'];
            
            require('../db/connection.php');
            
            $sql="INSERT INTO item (item_name,item_discription,item_category,item_bid_price,item_seller_id) VALUES('$name','$discription','$category',$price,$id);";
            
            if($conn->query($sql)===TRUE)
            {
                echo "<script>alert('recored is submmitted');
                        window.location.href='../sell/sellerProfile.php';</script>";
            }
        }
    
}
else
{
    header('Location:../login/sellerLogin.php');
    //echo "helo";
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
    <div class="container" style="margin-top:4%;">
        <form class="modal-content animate" action="../item/addItem.php" method="POST">
    <div class="container">
      <h3>Add Item</h3>
        <hr>
                  <div class="form-group">
                      <div class="form-group">
                    <label for="itemName">Name</label>
                    <input type="text" class="form-control" id="itemName" name="itemName" placeholder="Item Name" required>
                  </div>
                      <div class="form-group">
                    <label for="itemDiscription">Discription</label>
                    <input type="text" class="form-control" id="itemDiscription" name="itemDiscription" placeholder="Discription" required>
                  </div>
                      
                    <label for="userPhone">Set Bid Price</label>
                    <input type="number" class="form-control" id="itemBidPrice" name="itemBidPrice" aria-describedby="emailHelp" placeholder="Price" required>
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





      

