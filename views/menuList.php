<?php
	require_once('../service/userService.php');
?>
<!DOCTYPE html>
<html lang="en">
<title>Restaurant</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="../assets/css/menu.css">

<body>
  <div align="center">
    <h1>Menu List</h1>
    <input type="text" name="search" placeholder="Search..." id="myInput">
  </div>

  <table class="table table-hover table-light" id="myTable" align="center">
  <?php
	$menu = getmenu();
	for ($i=0; $i != count($menu); $i++) {  ?>
    <tr align="center">
      <td rowspan="3" height="255px" width="205px" scope="row"><img src="../assets/img/<?=$menu[$i]['img']?>" height="250px" width="200px" alt=""></td>
      <td>Available: <?=$menu[$i]['isAvailable']?></td>
      <td>Discount: <?=$menu[$i]['discount']?>%</td>
    </tr>
    <tr align="center">
      <td>Price: <?=$menu[$i]['price']?>tk</td>
      <td>Name: <?=$menu[$i]['name']?></td>
    </tr>
    <tr align="center">
      <td>Type: <?=$menu[$i]['type']?></td>
      <td><a href="./consumer/payment.php" id="ord">Order Now</a></td>
    </tr>
  <?php } ?>
  </table>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
