<?php

#Data base connection
$dbc = mysqli_connect('localhost','root','root', 'Party_Arrangement_Services') or die('Could not connect'.mysqli_connect_error());

#Constants:
DEFINE('TEMPLATES','resources/templates/');
DEFINE('CONFIG','resources/configuration/')
 
?>