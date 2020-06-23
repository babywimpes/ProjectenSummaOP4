<?php
session_start();
    if(isset($_SESSION['username'])){
        header('Location: allimg.php');
    }
    else{
        header('Location: ../login.php');
    }
?>