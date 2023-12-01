<?php include "header.php"; ?>
<div class="container">
  <?php
  include "dbconn.php";
  $query = "SELECT * from product";
  $result = getTable($query);
  $x=1;
  ?>
<div class="row">
  <?php while($row=mysqli_fetch_array($result))
  {

  ?>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="pimage/<?php echo $row['image'] ?>">
        <img src="pimage/<?php echo $row['image'] ?>" alt="Lights" style="width:100%">
        <div class="caption">
          <p class="productname"><?php echo $row['name'] ?></p>
          <p class="price"><?php echo $row['price'] ?></p>
        </div>
      </a>
    </div>
  </div>
  <?php } ?>
  <!-- <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/nature.jpg">
        <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/fjords.jpg">
        <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div> -->
</div>
</div>
<?php include "footer.php"; ?>