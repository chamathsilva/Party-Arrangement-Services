<? include ('../../resources/configuration/setup.php'); ?>



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
		<?php include ('../../'.TEMPLATES.'back_navigation_bar.php'); ?>
		
   		<!--<div class="address-bar"><?php echo "Hello"." ".getField("username",$dbc); ?></div> -->
   
   		<div class="container"
		  <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong> <?php echo "Hello"." ".getField("username",$dbc); ?> </strong>
                    </h2>
                    <hr>
                    
                    <div class="row">
                            <div class="col-lg-4 ">
                                <label>Your current services</label>
                                <?php
                                $userid = $_SESSION['user_id'];
                                $query = "SELECT * FROM `services` WHERE `userid` = '$userid'";
								if ($query_result = mysqli_query($dbc, $query)){
									if (mysqli_num_rows($query_result) == NULL){
										echo "You have no Services Publish yet";
									}else{
										echo '<ol>';
										while ($query_row = mysqli_fetch_assoc($query_result)) {
											echo '<li>'.$query_row['name'].'</li>';
										}
										echo '</ol>';
									}
								}
                                ?>
                            </div>
                    
                    		<div class="form-group col-lg-4 col-lg-offset-4">
                    			<p align="center"><label>Click here to publish new service</label></p>
                            	<form action="Publish_services_form.php" role = "form">
    							<button type="submit" class = "btn btn-success  btn-block " >Publish</button>
								</form>
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
