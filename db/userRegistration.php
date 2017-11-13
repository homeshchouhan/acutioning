<?php

if(isset($_POST["submit"]))
{
    //echo "helo";
    require('../db/connection.php');
    
    $fname=$_POST['userFname'];
    $lname=$_POST['userLname'];
    $email=$_POST['userEmail'];
    $phone=$_POST['userPhone'];
    $dob=$_POST['userDob'];
    
    $random="asbcgb12380";
    
     $user_password=str_shuffle($random);
    
    $sql="INSERT INTO user(user_fname,user_lname,user_email,user_phone,user_dob,user_password) VALUES('$fname','$lname','$email','$phone','$dob','$user_password');";
    
    if($conn->query($sql)===TRUE)
    {
        //echo "submitted";
        echo "<script>alert('Registered Succesfully');
                window.location.href='../index.php';</script>";
    }
    else
    {
         echo "<script>alert('Email Id already in use try with different email');
                window.location.href='../index.php';</script>";
       // echo "error";
    }
}
else
{
     echo "<script>alert('Something went wrong try again');
                window.location.href='../index.php';</script>";}

?>

