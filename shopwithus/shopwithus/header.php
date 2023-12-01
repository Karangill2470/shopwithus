<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shop With Us</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/x-icon" href="images/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/mystyle.css">
</head>
<body>

<div class="jumbotron text-center" style="margin:0">
  <!-- <h1>My First Bootstrap Page</h1> -->
  <img src="images/logo.png" alt="">
  <p>Shop with us to feel the difference of prices</p> 
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">ShopWithUs</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <?php 
        if(isset($_SESSION['username'])) 
        {
            ?>
            <li><a href="welcome.php">Home</a></li>
            <li><a href="registers.php">All Registered User</a></li>
            <li><a href="product_insertion.php">Add Product</a></li>
            <li><a href="product_show.php">All Products</a></li>
            <li><a href="logout.php">Logout</a></li>
            <?php
        }
        else
        {
            ?>
            <li class="active"><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="register.php">Registration</a></li>
        <li><a href="login.php">Login</a></li>
            <?php
        }
        ?>
        
      </ul>
    </div>
  </div>
</nav>
