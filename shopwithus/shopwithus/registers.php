
<?php
        include "header.php";
        
    include "checksession.php";
    include "dbconn.php";
    $query = "SELECT * from register";
    $result = getTable($query);
?>
<div class="container table-responsive">
  <table class="table">
    <thead>
        <tr>
            <th>User ID</th>
            <th>UserName</th>
            <th>Password</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
<?php
    while ($row =mysqli_fetch_array($result)) 
    {
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td><?php echo $row['address'] ?></td>
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
