<?php
header('Content-Type: text/xml'); //needed for generating xml with php
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo '<response>'; //in between is what the javascript file is going to see
	$email = $_GET['email']; //used to store 
	if($email=='') //if email empty
		echo 'Enter email';
	elseif(filter_var($_GET['email'],FILTER_VALIDATE_EMAIL)){  //if email email has@. symbols
		echo " Correct email "; }
		else{
			echo " Wrong email address ";
		}
		
echo '</response>';

?>

