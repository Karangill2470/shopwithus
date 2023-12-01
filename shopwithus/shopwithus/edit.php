
<?php
include "dbconn.php";

if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $oldimage=$_POST['oldimage'];
    $newimage=$_FILES['newimage']['name'];
    // if($_FILES['newimage']['name']=="")
    // {
    //     echo "Empty";
    // }
    // else{
    //     echo "Non Empty";
    // }
    if($_FILES['newimage']['name']!="")
        {
            unlink("pimage/$oldimage");
            if(move_uploaded_file($_FILES['newimage']['tmp_name'],"pimage/".$newimage))
            {
                $query="update product set name='$name',image='$newimage',price=$price where id=$id";
                insertTable($query,"Inserted Success!");
                header("Location:product_show.php");
                // echo insertTable($query,"Inserted Success!");
            }
            else
            {
                echo "<span class='error'>Upload Problem</span>";
            }
        }
        else
        {
            $query="update product set name='$name',price=$price where id=$id";
            insertTable($query,"Inserted Success!");
            header("Location:product_show.php");
        }
        
    }

?>
<?php
    include "header.php";
    include "checksession.php";
    
$id=$_GET['id'];
$query = "select * from product where id=$id";
$result=getTable($query);
if($row=mysqli_fetch_array($result))
{

?>
<div class="container" >
<form method="post" enctype="multipart/form-data">
    <h1>Product Updation Form</h1>
  <div class="form-group">
    <label for="name">Product Name</label>
    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    <input type="text" required name="name" value="<?php echo $row['name']; ?>" class="form-control" id="name"  placeholder="Enter Product Name">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="integer" name="price" value="<?php echo $row['price']; ?>" required class="form-control" id="price" placeholder="Enter Product Price">
  </div>
  <div class="form-group">
    <label for="image">Example file input</label>
    <input type="hidden" name="oldimage" value="<?php echo $row['image']; ?>">
    <input type="file" name="newimage" class="form-control-file" id="image">
  </div>
  <div class="form-group">
    <img src="pimage/<?php echo $row['image'] ?>" alt="">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<?php } ?>
</div>
    <?php
    include "footer.php";
    ?>
