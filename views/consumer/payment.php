<?php
  require_once('../../php/session_header.php');
	require_once('../../service/consumerService.php');

  if (isset($_GET['id'])) {
    $food = getByID($_GET['id']);	
  }else{
    header('location: ../menuList.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<title>Payment</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="../../assets/css/menu.css">

<body>
  <div align="center">
    <h1>Payment</h1>
    <hr>
    <br>
    <br>
    <br>
  </div>
  <div class="form-group" align="center">
    <img src="../../assets/img/<?=$food['img']?>" height="300px" width="340px" alt="food">
    <br>
    <br>
    <h4>Food Name: <?=$food['name']?></h4>
    <h4>Price: <?=$food['price']?></h4>
    <h4>Availability: <?=$food['isAvailable']?></h4>
  </div>
  <form action="../../php/consumerController.php" method="post"> 
  <div class="form-group" align="center">
    <select class="form-group col-md-6" name="n_unit" id="slcet">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
    <select class="form-group col-md-6" name="p_method" id="slcet">
      <option value="Bkash">Bkash</option>
      <option value="Nogat">Nogat</option>
      <option value="Rocket">Rocket</option>
    </select>
  </div>
  <div class="form-group" align="center">
    <input type="text" id="phone" name="phone"placeholder="Enter your account number...">
    <input type="hidden" name="c_id"  value="<?=$_SESSION['id']?>">
    <input type="hidden" name="f_id"  value="<?$_GET['id']?>">
    <input type="hidden" name="price"  value="<?=$food['price']?>">
  </div>
  <div class="form-group" align="center">
    <input type="button" class="btn btn-outline-info btn-lg" name="payment" value="Confirm">
  </div>
  </form>
  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
