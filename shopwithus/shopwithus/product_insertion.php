<?php
    include "header.php";
    include "checksession.php";
?>
<div class="container" >
<form method="post" enctype="multipart/form-data">
    <h1>Product Insertion Form</h1>
  <div class="form-group">
    <label for="name">Product Name</label>
    <input type="text" required name="name" class="form-control" id="name"  placeholder="Enter Product Name">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="integer" name="price" required class="form-control" id="price" placeholder="Enter Product Price">
  </div>
  <div class="form-group">
    <label for="image">Example file input</label>
    <input type="file" name="image" class="form-control-file" id="image">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<h2 class="success">

<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $price=$_POST['price'];
    $image=$_FILES['image']['name'];

    if(include "dbconn.php")
    {
        if(move_uploaded_file($_FILES['image']['tmp_name'],"pimage/".$image))
        {
            $query="insert into product(name,price,image) values('$name',$price,'$image')";
            echo insertTable($query,"Inserted Success!");
        }
        else
        {
            echo "<span class='error'>Upload Problem</span>";
        }
    }
    else{
        echo "<span class='error'>Including Problem</span>";
    }
}
?>
</h2>
</div>
    <?php
    include "footer.php";
    ?>
