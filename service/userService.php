<?php
	require_once('../db/db.php');

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

	function getByConId($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "SELECT * FROM foods WHERE id={$id}";
		$result = mysqli_query($conn, $sql);
		$food = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($food, $row);
		}

		return $food;
	}

	function getmenu(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from foods";
		$result = mysqli_query($conn, $sql);
		$menu = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($menu, $row);
		}

		return $menu;
	}


	function validate($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from users where email='{$user['email']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		if(count($user) > 0 ){
			return $user;
		}else{
			header('location: ../login.php?error=db_error');
		}
	}

	function insert($user){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}
		
		$sql = "INSERT INTO `users` VALUES ('','{$user['name']}','{$user['email']}','{$user['phone']}','{$user['img']}','{$user['password']}','consumer')";
	
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function insertMain($arrayKey){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "insert into main values('', '{$arrayKey['mainCurr']}','{$arrayKey['lineCurr1']}', '{$arrayKey['consumerCurr1']}', '{$arrayKey['lineCurr2']}', '{$arrayKey['consumerCurr2']}', '{$arrayKey['dateTime']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>