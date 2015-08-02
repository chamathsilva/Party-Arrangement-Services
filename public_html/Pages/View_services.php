<? include ('../../resources/configuration/setup.php'); ?>
<?php 
   $id = $_GET['id'];
   $query = "SELECT * FROM `services` WHERE `id` = '$id'";
   if ($query_result = mysqli_query($dbc, $query)){
		$query_row = mysqli_fetch_assoc($query_result);
	   
	   	$name = $query_row['name'];
		$contact = $query_row['contactNo'];
		$emailAdd = $query_row['email'];
		$scope = $query_row['scope'];
		$charges = $query_row['charge'];
		$spec = $query_row['spec'];
	}else{
		$sdsfdsfds= "sdfdsfds";
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
		
		<div class="container"
		  <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong><h2><?php echo $name; ?></h2></strong>
                    </h2>
                    <hr>
                    
                    
                    <div class="row">                   
                    	<div class="col-lg-4 ">                    	
                    		<label><h4>Contact numbers</h4></label>                    		                    		
                    	</div>
                    	<div class="col-lg-4 ">                   		
                    		<label><h4><?php echo $contact; ?></h4></label>                   		
                    	</div>
                   	</div>   
                   	
                   	<div class="row">                   
                    	<div class="col-lg-4 ">                    	
                    		<label><h4>Scope of services</h4></label>                    		                    		
                    	</div>
                    	<div class="col-lg-4 ">                   		
                    		<label><h4><?php echo $scope; ?></h4></label>                   		
                    	</div>
                   	</div>    
                   	
                   	<div class="row">                   
                    	<div class="col-lg-4 ">                    	
                    		<label><h4>E-mail addresses</h4></label>                    		                    		
                    	</div>
                    	<div class="col-lg-4 ">                   		
                    		<label><h4><?php echo $emailAdd; ?></h4></label>                   		
                    	</div>
                   	</div>    
                   	
                   	
                   	<div class="row">                   
                    	<div class="col-lg-4 ">                    	
                    		<label><h4>Charges </h4></label>                    		                    		
                    	</div>
                    	<div class="col-lg-4 ">                   		
                    		<label><h4><?php echo $charges; ?></h4></label>                   		
                    	</div>
                   	</div>   
                   	
                   	
                   	<div class="row">                   
                    	<div class="col-lg-4 ">                    	
                    		<label><h4>Specialization </h4></label>                    		                    		
                    	</div>
                    	<div class="col-lg-4 ">                   		
                    		<label><h4><?php echo $spec; ?></h4></label>                   		
                    	</div>
                   	</div>   
                   	
                   	
                   	   <div class="form-group col-lg-4 col-lg-offset-4">
                    		<p align="center"><label></label></p>
                            <form action="../../index.php" role = "form">
    						<button type="submit" class = "btn btn-success  btn-block " > Back</button>
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
