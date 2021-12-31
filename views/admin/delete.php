<?php
    require_once('../../php/session_header.php');
?>
<!DOCTYPE html>
<html lang="en">
<title>Foods</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="../../assets/css/upload.css">

<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-dark-grey w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>XYZ<br>Restaurant</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="allFoods.php" class="w3-bar-item w3-button w3-hover-white" id="ix">All Foods</a> 
    <a href="acceptPayment.php"  class="w3-bar-item w3-button w3-hover-white" id="ix2">Accept Payment</a> 
    <a href="upload.php" class="w3-bar-item w3-button w3-hover-white" id="ix3">Upload</a> 
    <a href="contacts.php" class="w3-bar-item w3-button w3-hover-white" id="ix4">Contacts</a> 
    <a href="../../php/logout.php" class="w3-bar-item w3-button w3-hover-white" id="ix5">logout</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>XYZ Restaurant</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="menuList">
    <h1 class="w3-xxxlarge w3-text-grey"><b>Delete Food.</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
    <br>
    <br>
    <br>
    <br>
    <div class="form-group" align="center">
      <img src="../../assets/img/food7.jpg" alt="food" height="280px">
    </div>
    <div class="form-row" align="center">
    <div class="col">
      <h1>Name:</h1>
    </div>
    <div class="col">
      <h1>Price:</h1>
    </div>
    </div>
    <div class="form-row" align="center">
    <div class="col">
      <h3>Type:</h3>
    </div>
    <div class="col">
      <h3>Discount:</h3>
    </div>
    </div>
    <div class="form-row" align="center">
    <div class="col">
        <h3>Is Featured:</h3>
    </div>
    <div class="col">
        <h3>Is Available:</h3>
    </div>
    </div>
    <hr>
    <br>
    <br>
    <h5 align="center" style="color: red;">Are you sure that you want to delete it?</h5>
    
  <div class="form-group" align="center">
    <input type="button" class="btn btn-outline-danger btn-lg" value="Delete">
  </div>
  </div>
</div>

<!-- W3.CSS Container -->

<script src="../../assets/js/home.js"></script>
</body>
</html>
