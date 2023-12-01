<?php
session_start();
include "connect.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Profile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/admin_profile.css?v=<?php echo time(); ?>">
</head>

<body>

<?php
include "header1.php";
?>



<?php
// include "ConnectionFile.php";

if(isset($_POST['Click']))
{
    $id = $_POST['ID'];


    $price=$_POST['Price'];
    $course=$_POST['Course'];
    

    $old=$_POST['oldimage'];
    // unlink("images/$old");
    $newimage=$_FILES['newimage']['name'];
    // print_r($_FILES['newimage']);

    
    // echo "ID: " . $id . "<br>";
    // echo "Price: " . $price . "<br>";
    // echo "Course: " . $course . "<br>";
    // echo "Old Image: " . $old . "<br>";
    // echo "New Image: " . $newimage . "<br>";

    // include "12_connect.php";

    if(strlen($newimage)>0)
    {
        if(strlen($old)>0)
        {
            unlink("images/$old");
        }
        if(move_uploaded_file($_FILES['newimage']['tmp_name'],"images/".$newimage))
        {
            echo "uploaded success";
        }
        $query = "UPDATE membership SET Price='$price', Course='$course', Image='$newimage' WHERE ID='$id'";
    }
    else
    {
        $query = "UPDATE membership SET Price='$price', Course='$course' WHERE ID='$id'";
    }

    if(!$con)
    {
        die(mysqli_connect_error());
    }
    if(mysqli_query($con,$query))
    {
        mysqli_close($con);
        header("Location:membership_show.php");
    }
    else
    {
        echo mysqli_error($con);
    }
}

?>



<?php
    $price=$_GET['Price'];
    
    // include "ConnectionFile.php";
    $query="select * from membership where Price='$price'";
    $result=getInfo($query);
    while ($row=mysqli_fetch_array($result))
    {
    ?>
    
    
    <div id="div2">
        <div  id="heading2">
            <h1>
                Edit
            </h1>
        </div>
</div>
     
    <table border="1" id="table1">
    
    <form action="" method="post" enctype="multipart/form-data">
    
        <tr>
            <th>Info</th>
            <th>Details</th>
            <th>Image</th>
        </tr>
            <tr>
                <td>ID:</td>
                <td>
                    <input type="text" name="ID" value="<?php echo $row['ID']; ?>" readonly>
                </td>
                
                <td rowspan="6"><img width="600" height="500" src="images/<?php echo $row['Image'] ?>" alt=""></td>
            
            </tr>
                 
            <tr>
                <td>Price:</td>
                <td>
                    <input type="text" name="Price" value="<?php echo $price ?>">
                </td>
            </tr>

            <tr>
                <td>Course:</td>
                <td>
                    <input type="text" name="Course" value="<?php echo $row['Course']?>">
                </td>
            </tr>

            <tr>
                <td>Old Img:</td>
                <td>
                    <input type="text" readonly name="oldimage" value="<?php echo $row['Image']?>">
                </td>
            </tr>
            
            <tr>
                <td>New Image:</td>
                <td align="RIGHT">
                    <input type="file" name="newimage" >
                </td>
            </tr>
                
            
            <tr>
                <td colspan="2">
                    <a><input type="submit" name="Click" value="Update"></a>
                    <a href="membership_show.php"><input type="button" value="Back"></a>
                </td>
                
            </tr>
            
    </form>
    </table>
<?php } ?>



<?php
include "footer.php";
?>




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>