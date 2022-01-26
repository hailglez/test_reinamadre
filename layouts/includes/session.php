<?php
session_start();
if($_SESSION['email']){
    
}else{
    header('Location:../index.php');
}
?>

