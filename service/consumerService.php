<?php
	require_once('../../db/db.php');

	function getById($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM foods WHERE id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	
	function insertPayment($payment){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
		
		$sql = "INSERT INTO `payment` VALUES ('','{$payment['c_id']}','{$payment['f_id']}','{$payment['n_unit']}','{$payment['price']}','{$payment['p_method']}','{$payment['phone']}','no')";
	
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>