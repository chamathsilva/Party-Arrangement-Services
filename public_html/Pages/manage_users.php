<? include ('../../resources/configuration/setup.php'); ?>

<?php  $id = 888; 
$name = "chamath"

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
		<?php include ('../../'.TEMPLATES.'back_navigation_bar.php'); ?>
		
   		<!--<div class="address-bar"><?php echo "Hello"." ".getField("username",$dbc); ?></div> -->
   
   		<div class="container"
		  <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong> Manage users </strong>
                    </h2>
                    <hr>
                    
                    
                    <?php 
                    	$query = "SELECT * FROM `users`";
						if ($query_result = mysqli_query($dbc, $query)){
									if (mysqli_num_rows($query_result) == NULL){
										echo 'No Users;';
									}else{
										while ($query_row = mysqli_fetch_assoc($query_result)) {
											$id = $query_row['id'];
											$name = $query_row['username'];
											?>
							<div class="row">   	
                    		<div class="form-group col-lg-4">
                    			<p><?php echo $name; ?></p>
                    		</div>
                        	<div class="form-group col-lg-4">
                            	<form action="update_user.php?id = 5" role = "form" method="post">
    							
    							<button type="submit"  class = "btn btn-success  btn-block " formaction="update_user.php?id=<?php echo $id ?>">Update</button>								
							</div> 
							<div class="form-group col-lg-4">
								
								<button type="submit"  class = "btn btn-success  btn-block " formaction="delete_user.php?id=<?php echo $id ?>">Delete</button>	
							</div>
							</form>                                              
                   	</div>
                   	
                   	<?php

										}										
									}
								}
                         ?>
                         
                         
                         	<div class="row">   	
                    		<div class="form-group col-lg-4">
                    		</div>
                        	<div class="form-group col-lg-4">
                            	<form action="admin_home.php" role = "form" method="post">
    							
    							<button type="submit"  class = "btn btn-warning btn-block " >Back</button>								
							</div> 
						
							</form>                                              
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
