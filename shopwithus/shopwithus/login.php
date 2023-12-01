<?php include "header.php" ?>
<div class="container" >
<form method="post">
    <h1>Login Form</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" required name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" required class="form-control" id="exampleInputPassword1" placeholder="Password">
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
$username=$_POST['username'];
$password=$_POST['password'];
include "dbconn.php";
$result=getTable("select * from login where username='$username' and password='$password'");
if(mysqli_num_rows($result)>0)
{
	$_SESSION['username']=$username;
	 header("Location:welcome.php");
     //echo "correct information ";
}
else
{
	echo "<span class='error'>incorrect information</span>";
	//header("Location:login.php");
}
}
?>

</h2>
</div>
<?php include "footer.php" ?>