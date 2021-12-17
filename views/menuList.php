<?php
	require_once('../service/userService.php');
?>
<!DOCTYPE html>
<html lang="en">
<title>Restaurant</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="../assets/css/menu.css">

<body>
  <div align="center">
    <h1>Menu List</h1>
  <input type="text" name="search" placeholder="Search..." id="myInput">
  </div>
  
  

  <table class="table" id="myTable" align="center">
          
          <?php
		      $menu = getmenu();
		      for ($i=0; $i != count($menu); $i++) {  ?>
            <tr align="center">
              <td rowspan="3" height="255px" width="205px"><img src="../assets/img/<?=$menu[$i]['img']?>" height="250px" width="200px" alt=""></td>
              <td>Available: <?=$menu[$i]['isAvailable']?></td>
              <td>Discount: <?=$menu[$i]['discount']?>%</td>
            </tr>
            <tr align="center">
              <td>Price: <?=$menu[$i]['price']?>tk</td>
              <td>Name: <?=$menu[$i]['name']?></td>
            </tr>
            <tr align="center">
              <td>Type: <?=$menu[$i]['type']?></td>
              <td><a href="./consumer/payment.php">Order Now</a></td>
            </tr>
          <?php } ?>
          
          </table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
