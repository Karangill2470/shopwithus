<?php 
$id=$_GET['id'];
include "dbconn.php";
$query = "select * from product where id=$id";
$image=getImage($query);
unlink("pimage/$image");
$query = "delete from product where id=$id";
insertTable($query);
header("Location:product_show.php");
?>