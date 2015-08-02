<? include ('../../resources/configuration/setup.php'); ?>

<?php

if (!loggedin()){
	header('location: Service_provider.php');
}else{
	$massage ="";
	$isPublished = FALSE;

	
	if (isset($_POST['name']) && isset($_POST['contactNum']) && isset($_POST['emailAddress']) && isset($_POST['scope']) && isset($_POST['charges']) && isset($_POST['spec']) && isset($_POST['category']) ){
		$name = $_POST['name'];
		$contact = $_POST['contactNum'];
		$emailAdd = $_POST['emailAddress'];
		$scope = $_POST['scope'];
		$charges = $_POST['charges'];
		$spec = $_POST['spec'];
		$category = $_POST['category'];
		$userid = $_SESSION['user_id'];
		
		echo $name." ".$contact." ".$emailAdd." ".$scope." ".$charges." ".$spec." ".$category.$_SESSION['user_id'];
		
		
		if (!empty($name) && !empty($contact) && !empty($emailAdd) && !empty($scope) && !empty($charges) && !empty($spec) && !empty($category)){
		$query_register = "INSERT INTO `services` VALUES ('','".mysqli_real_escape_string($dbc,$userid)."','".mysqli_real_escape_string($dbc,$name)."', '".mysqli_real_escape_string($dbc,$contact)."','".mysqli_real_escape_string($dbc,$emailAdd)."','".mysqli_real_escape_string($dbc,$scope)."','".mysqli_real_escape_string($dbc,$charges)."','".mysqli_real_escape_string($dbc,$spec)."','".mysqli_real_escape_string($dbc,$category)."')";
			if (mysqli_query($dbc, $query_register)){
				echo "ok";
				$isPublished = TRUE;
			}else{
				$massage  = "Sorry, we couldn/'t publish services at this time.Try again later.";
				}
		}else{
			$massage = "All fields are required and Category must select.";
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
		<?php include ('../../'.TEMPLATES.'back_navigation_bar.php'); ?>


		<?php if(!$isPublished) {?>
		<div class="container"
		  <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Publish Services</strong>
                    </h2>
                    <hr>
                    <form  action='Publish_services_form.php' method="post">
                    
                    	<div class="row">
                			<div class="form-group col-lg-12 ">
                			</div>
	                		<div class="form-group col-lg-4 col-lg-offset-4 ">
	                          	<P align="center"><?php echo "<span style='color:#FF0000'>$massage" ?></P>
	                        </div>
	                    </div>
                    	
                    	<div class="row">
                            <div class="form-group col-lg-4 col-lg-offset-1">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                             <div class="form-group col-lg-7">
                                <label></label>
                                <p class="help-block">Set some help text</p>
                            </div>
                            
                		</div>
                		
                		<div class="row">
                            <div class="form-group col-lg-4 col-lg-offset-1">
                                <label>Contact Number</label>
                                <input type="text" name="contactNum" class="form-control">
                            </div>
                             <div class="form-group col-lg-7">
                                <label></label>
                                <p class="help-block">Set some help text</p>
                            </div>
                		</div>
                		
                		<div class="row">
                            <div class="form-group col-lg-4 col-lg-offset-1">
                                <label>Email Address</label>
                                <input type="text" name="emailAddress" class="form-control">
                            </div>
                             <div class="form-group col-lg-7">
                                <label></label>
                                <p class="help-block">Set some help text</p>
                            </div>
                		</div>
                		
                		<div class="row">
                            <div class="form-group col-lg-4 col-lg-offset-1">
                                <label>Scope of service</label>
                                <input type="text" name= "scope" class="form-control">
                            </div>
                             <div class="form-group col-lg-7">
                                <label></label>
                                <p class="help-block">Set some help text</p>
                            </div>
                		</div>
                		
                		
                		
                		<div class="row">
                            <div class="form-group col-lg-4 col-lg-offset-1">
                                <label>Charges</label>
                                <input type="text" name="charges" class="form-control">
                            </div>
                             <div class="form-group col-lg-7">
                                <label></label>
                                <p class="help-block">Set some help text</p>
                            </div>
                		</div>
                		
                		
                		<div class="row">
                            <div class="form-group col-lg-4 col-lg-offset-1">
                                <label>specialization</label>
                                <input type="text" name="spec" class="form-control">
                            </div>
                             <div class="form-group col-lg-7">
                                <label></label>
                                <p class="help-block">Set some help text</p>
                            </div>
                		</div>
                		
                		<div class="row">
                            <div class="form-group col-lg-4 col-lg-offset-1">
                                <label>Select your Services category</label><br>
                                <select name="category">
									<option value="">Select a category...</option>
									<option value="caterers">caterers</option>
									<option value="sounds">sounds</option>
									<option value="bands">bands</option>
									<option value="decorators">decorators</option>
								</select>
                            </div>
                             <div class="form-group col-lg-7">
                                <label></label>
                                <p class="help-block">Set some help text</p>
                            </div>
                		</div>

   		
                		<div class="row">
                			<div class="form-group col-lg-12 ">
                			</div>
	                		<div class="form-group col-lg-4 col-lg-offset-4 ">
	                                <!--<input type="hidden" name="save" value="contact">-->
	                                <button type="submit" class="btn btn-primary btn-block">Publish</button>
	                        </div>
	                    </div>
                    </form>
                    </div>
                </div>
            </div>
    	</div>
    	
    	<?php } else{?>
		<div class="container"
		  <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>You're Services Published..</strong>
                    </h2>
                    <hr>
                    <div class="form-group col-lg-4 col-lg-offset-4">
                    		<p align="center"><label>Click here to go Home</label></p>
                            <form action="Service_provider.php" role = "form">
    						<button type="submit" class = "btn btn-success  btn-block " > Home</button>
					</form>
					</div>
                </div> 
            </div>
        </div>
     </div>
    		
    	<?php } ?>
		
		<?php include ('../../'.TEMPLATES.'footer.php'); ?>
		<!-- jQuery -->
		<script src="../JS/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="../JS/bootstrap.min.js"></script>
	</body>
</html>
