
    <?php
        include "header.php";
        
    include "checksession.php";
    include "dbconn.php";
    $query = "SELECT * from product";
    $result = getTable($query);
?>
<div class="container table-responsive">
  <table class="table">
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
<?php
    while ($row =mysqli_fetch_array($result)) 
    {
        $image=$row['image'];
        $id=$row['id'];
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><img class='product_img' src='pimage/<?php echo $image; ?>'/></td>
            <td>
                <a href="edit.php?id=<?php echo $id?>">Edit</a>
                <a href="delete.php?id=<?php echo $id?>">Delete</a>
            </td>
        </tr>
        <?php
    }
?>
    </tbody>
</table>
</div>

    <?php
    include "footer.php";
    ?>
