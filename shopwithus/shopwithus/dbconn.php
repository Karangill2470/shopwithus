<?php
$con=mysqli_connect("localhost","root","","startwithus");
if(!$con)
{
    die("connection failed");
}

function insertTable($query)
{
    global $con;
   if(!mysqli_query($con,$query))
   {
    return mysqli_error($con);
   }
    mysqli_close($con);
    return "Inserted Success";
}

function getTable($query)
{
    global $con;
   $result=mysqli_query($con,$query);
    return $result;    
}

function getImage($query)
{
    global $con;
   $result=mysqli_query($con,$query);    
    while($row=mysqli_fetch_array($result))
    {
        $image=$row['image'];
    }
    return  $image;
}
?>