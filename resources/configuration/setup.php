<?php
ob_start();
session_start();

#Data base connection
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = 'root';
$mysql_database = 'Party_Arrangement_Services';


$dbc = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database) or die('Could not connect'.mysqli_connect_error());



#if ($query_result = mysqli_query($dbc, "SELECT * FROM `users` WHERE `id` = '1'")){
	
	
	#if (mysqli_num_rows($query_result) == NULL){
		#echo 'No result found';
	#}else{
		#while ($query_row = mysqli_fetch_assoc($query_result)){
			#echo $query_row['id']." ".$query_row['username']." ".$query_row['email'].'<br>';
		#}
	#}
#}else{
	#echo mysqli_error($dbc);
#}

#login 

function loggedin(){
	if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		return true;
	}else{
		return false;
	}	
}

function getField($field,$dbc){
	$query = "SELECT `$field` FROM `users` WHERE `id` = '".$_SESSION['user_id']."'";
	if ($query_result = mysqli_query($dbc, $query)){
		$query_row = mysqli_fetch_assoc($query_result);
		 return $query_row['username'];
	}
}



#Constants:
DEFINE('TEMPLATES','resources/templates/');
DEFINE('CONFIG','resources/configuration/');
 
 
 
 
 
# pic up the error form last query run
# echo mysql_error();
 
?>