<?php 
	require_once('../php/session_header.php');
	require_once('../services/consumerService.php');

	//payment
	if(isset($_POST['payment'])){
		$c_id 	    = $_POST['c_id'];
		$f_id 	    = $_POST['f_id'];
		$n_unit     = $_POST['n_unit'];
		$price 	    = $_POST['price'];
		$p_method 	= $_POST['p_method'];
		$phone 	    = $_POST['phone'];
        
		if(empty($c_id) || empty($f_id) || empty($n_unit) || empty($price) || empty($p_method) || empty($phone)){
			header('location: ../views/consumer/payment.php?error=null_value');
		}else{
			$payment = [
				'c_id'      => $c_id,
				'f_id'      => $f_id,
				'n_unit'    => $n_unit,
				'price'     => $price,
				'p_method'  => $p_method,
				'phone'     => $phone
			];

			$status = insertPayment($payment);

			if($status){
				header('location: ../views/consumer/index.php?success=done');
			}else{
				header('location: ../views/consumer/payment.php?error=db_error');
			}
		}
	}

?>