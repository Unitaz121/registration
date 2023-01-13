<?php

include('includes/config.php');
include('includes/db.php');

if(isset($_GET['token'])){ // if email is verified, token converts from 0 to 1 then access is granted 
    $token = $_GET['token'];
    $query = "update users set status='1' where token='$token'";
    if($db->query($query)){
        header("Location:index.php?success=Account Activated!!");
        exit();
    }
    
}

?>