<?php include ('resources/configuration/setup.php'); ?>

<form action "index2.php" method = "GET">
	Select type :
	<select name = "uh">
	<option value="1aaa"> Option 1</option>		
	<option value="2bb">Option 2</option>	
	</select><br><br>
	<input type="submit" value="Submit" />
	
</form>

<!--
<?php 

	if (isset($_GET['uh']) && !empty($_GET['uh'])){
		echo $uh = $_GET['uh'];
	}else{
		echo 'some thing worng';
	}


?> -->

<?php

	#echo md5("admin");
	echo md5("chamath");



?>