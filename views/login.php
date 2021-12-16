<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'null_value'){
			echo "Username/Password field can't left empty...";
		}

		if($_GET['error'] == 'invalid_user'){
			echo "Invalid username or Password";
		}

		if($_GET['error'] == 'invalid_request'){
			echo "You have to login first...";
		}

	}else if(isset($_GET['success'])){
		
		if($_GET['success'] == 'registration_done'){
			echo "Registration Done! Now you can login...";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="../assets/css/login.css">
</head>
<body class="main-bg">
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        <!-- Icon -->
        <div class="fadeIn first">
          <img src="../assets/img/img5.png" id="icon" alt="User Icon" />
        </div>
        <!-- Login Form -->
        <form method="post">
          <input type="text" id="login" class="fadeIn second" name="email" placeholder="Login" required>
          <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required>
          <input type="submit" class="fadeIn fourth" value="Log In">
        </form>
        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="#">Forgot Password?</a>
        </div>
      </div>
    </div>
</body>
</html>