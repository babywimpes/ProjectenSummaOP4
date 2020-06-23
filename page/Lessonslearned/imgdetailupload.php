<?php
include "../../incl/connect.php";
session_start();
$photoid = $_COOKIE['photoid'];
$comment =$_COOKIE['owncomment'];


$sql = "UPDATE userimage SET selfComment='$comment' WHERE photoID='$photoid' ";
$result = $conn->query($sql);
echo $conn->error;

header('Location:imgdetail.php')
?>