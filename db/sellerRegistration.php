<?php

if(isset($_POST['submit']))
{
    require_once('../db/connection.php');
    $data_name=$_POST['sellerName'];
    $data_email=$_POST['sellerEmail'];
    $data_phone=$_POST['sellerPhone'];
    
    $string="abcd1234sed";
    $password=str_shuffle($string);
    
    $sql="INSERT INTO seller (seller_name,seller_email,seller_phone,seller_password) VALUES('$data_name','$data_email','$data_phone','$password');";
    
    if($conn->query($sql)===TRUE)
    {
       // echo "submited";
         echo "<script>alert('Registered Succesfully');
                window.location.href='../sell/sellFront.php';</script>";
    }
    else
    {
         echo "<script>alert('Email ID already used try with different Email Id');
                window.location.href='../sell/sellFront.php';</script>";
        //echo "not";
    }
}

?>