<?php
if(isset($_POST["submit"]))
{
    $user_id=$_POST['userName'];
    $user_password=$_POST['userPassword'];
    
    require ("../db/connection.php");
    
    $sql="SELECT * FROM user WHERE user_email='$user_id' AND user_password='$user_password' ;";
    
    if($conn->query($sql)===TRUE)
    {
        echo "welcome";
    }
    else
    {
        echo "no record";
    }
        
    
}
?>