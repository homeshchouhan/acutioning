<?php

session_start();
if(isset($_SESSION['seller_id']))
{
    if(isset($_GET['id']))
    {
          $id=$_GET['id'];
        require('../db/connection.php');
        $sql="DELETE FROM item WHERE item_id=$id";
        if($conn->query($sql)===TRUE)
        {
            header('Location:../item/showSellerItem.php');
        }
//echo $id;
    }
  

}
else
{
    header('Location:../sell/sellFront.php');
}

?>