<?php
session_start();
if(isset($_SESSION['id'])){
    session_destroy();
    header('location: index.php');
}else{
    header('location: index.php');
}
?>