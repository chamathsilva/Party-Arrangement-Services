<? include ('../../resources/configuration/setup.php'); ?>

<?php

if (loggedin()){
	header('location: Service_provider_home.php');
}else{
	$massage ="";
	$username ="";
	$email = "";
	$isRegisterd = FALSE;

	
	if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['passwordconfirm']) ){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordConfirm = $_POST['passwordconfirm'];
		if (!empty($username) && !empty($email) && !empty($password) && !empty($passwordConfirm)){
			if ($password != $passwordConfirm){
				$massage = "Password do not match.";
			}else{
				$queryValidate = "SELECT `username` FROM `users` WHERE `username` = '$username'";
				if ($query_result = mysqli_query($dbc, $queryValidate)){
					if (mysqli_num_rows($query_result) == 1){
						$massage = 'The username '.$username.' already exists.';
					}else{
						$password_hash = md5($password);
						$query_register = "INSERT INTO `users` VALUES ('','".mysqli_real_escape_string($dbc,$username)."','".mysqli_real_escape_string($dbc,$email)."','".mysqli_real_escape_string($dbc,$password_hash)."','')";
						if (mysqli_query($dbc, $query_register)){
							$isRegisterd = TRUE;
						}else{
							$massage  = "Sorry, we couldn/'t register you at this time.Try again later.";
						}
					}
				}else{
					echo mysqli_error($dbc);
				}
			}
			
		}else{
			$massage = "All fields are required";
		}
		
	}
	
}

?>






<!DOCTYPE html>
<html lang="en">
	<head>
		
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Party Arrangement Services | About</title>
	<!-- Bootstrap Core CSS -->
	<link href="../CSS/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="../CSS/Party_Arrangment_Services.css" rel="stylesheet">
	<!--Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

	</head>
	<body>
		<div class="brand">Party Arrangment Services</div>
   		<div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>
		<?php include ('../../'.TEMPLATES.'navigation_bar.php'); ?>
		<div class="brand"> <h1>It's Free Register Now</h1></div>
		
		<?php 
		
		if (!$isRegisterd){
			include ('registrationform.inc.php'); 
		}else{?>
			
		<div class="container"
		  <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>You're registerd.</strong>
                    </h2>
                    <hr>
                    <div class="form-group col-lg-4 col-lg-offset-4">
                    		<p align="center"><label>Click here to sign in</label></p>
                            <form action="Service_provider.php" role = "form">
    						<button type="submit" class = "btn btn-success  btn-block " > Sign in</button>
					</form>
					</div>
                    
                    
                </div> 
            </div>
        </div>
     </div>
	<?php
	}
	?>
	
		
    	
		<?php include ('../../'.TEMPLATES.'footer.php'); ?>
		<!-- jQuery -->
		<script src="../JS/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="../JS/bootstrap.min.js"></script>
	</body>
</html>
