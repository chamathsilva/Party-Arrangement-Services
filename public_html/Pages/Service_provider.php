<?php include ('../../resources/configuration/setup.php'); ?>

<?php

if (loggedin()){
	header('location: Service_provider_home.php');
}

$ph_username = "";
$ph_password = "";

if (isset($_POST['username']) && isset($_POST['passsword'])){
	$username = $_POST['username'];
	$password = $_POST['passsword'];
	
	if ( !empty($username) && !empty($password)){
		$password_hash = md5($password);
		$query = "SELECT `id` FROM `users` WHERE `username` = '$username' AND `password` = '$password_hash'";
		if ($query_result = mysqli_query($dbc, $query)){
			$query_num_rows = mysqli_num_rows($query_result);
			
			if ($query_num_rows == 0){
				$ph_username = "Invalid username/password combination.";
		
			}else{
				$query_row = mysqli_fetch_assoc($query_result);
				$user_id = $query_row['id'];
				$_SESSION['user_id'] = $user_id;
				header('location: Service_provider_home.php');
			}
		}else{
			echo mysqli_error($dbc);
		}
	}else{
		$ph_username = "You must supply a username";
		$ph_password = "You must supply a password";
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
	<title>Party Arrangement Services | Services</title>
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
		<div class="brand"> <h1>Publish Services</h1></div>
		
		<div class="container"
		  <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Sign in</strong>
      
                    </h2>
                    <hr>
                    
                    <form action="Service_provider.php" method="post" role="form">
                        <div class="row">
                            <div class="form-group col-lg-4 col-lg-offset-4">
                                <label>User Name</label>
                                <input type="email" name="username" class="form-control">
                                
                            </div>
                            <div class="form-group col-lg-4">
                            	<?php echo "<span style='color:#FF0000'><br><br>$ph_username" ?>
                            </div>
                		</div>
                        <div class="row">
                            <div class="form-group col-lg-4 col-lg-offset-4">
                                <label>Passowrd</label>
                                <input type="password" name="passsword" class="form-control" >
                            </div>
                            <div class="form-group col-lg-4">
                            	<?php echo "<span style='color:#FF0000'><br><br>$ph_password" ?>
                            </div>
                      	</div>
                    	 <div class="row">
                            <div class="form-group col-lg-1 col-lg-offset-5 ">
                                <!--<input type="hidden" name="save" value="contact">-->
                                <button type="submit" class="btn btn-default">Sign in</button>
                            </div>
                     </form>
                            <div class="form-group col-lg-2">
                            <form action="Service_provider_registration.php" role = "form">
    							<button type="submit" class = "btn btn-success" > Sign up </button>
							</form>
							</div>
							</div>
                        </div>
                </div>
            </div>
        </div>
     </div>
     
		<?php include ('../../'.TEMPLATES.'footer.php'); ?>
		<!-- jQuery -->
		<script src="../JS/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="../JS/bootstrap.min.js"></script>
	</body>
</html>
