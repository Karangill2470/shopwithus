<?php include "header.php" ?>
<div class="container" >
<form method="post">
    <h1>Registration Form</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" required name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" required class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword2">Name</label>
    <input type="text" name="name" required class="form-control" id="exampleInputPassword2" placeholder="Enter Name">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword3">Phone</label>
    <input type="text" name="phone" required class="form-control" id="exampleInputPassword3" placeholder="Enter Phone Number">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword4">Address</label>
    <textarea  name="address" required class="form-control" placeholder="Enter Your Address"></textarea>
  </div>
  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<h2>

<?php
if(isset($_POST['submit']))
{
$email=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
include "dbconn.php";
echo insertTable("insert into register(username,password,name,phone,address) values('$email','$password','$name','$phone','$address')");
}
?>

</h2>
</div>
<?php include "footer.php" ?>