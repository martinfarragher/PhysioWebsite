<!DOCTYPE html>
<html>
  

<head>
    
	<meta charset="utf-8">
	
	<script type="text/javascript" src="typing.js"></script>
    

	<title>Hanly Physiotherapy |news</title>
    
	<link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
  

<body onload="process()"> 
    
	<header>
      
		<a href="index.html" id="logo">
        
			<h1>Hanly Physiotherapy</h1>
        
			<h2>"Quality care from the people who care"</h2>
      </a>
      

<nav>
        
	<ul>
        <li><a href="index.php">home</a></li>
		<li><a href="services.php">services</a></li>
		<li><a href="register.php" class="selected">register</a></li>
		<li><a href="contact.php">contact</a></li>
        
	</ul>
</nav>
    </header>
    

<div id="wrapper">
      

<section id="primary">
                
		<h3>Register</h3>
		
		
<?php

require 'connect.php';
	
if (isset($_POST['email']) && isset($_POST['firstname']) && isset($_POST['surname'])){ //checks to see if each field is submitted
	$email = $_POST['email'];
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];	
	
if (!empty($email)&&!empty($firstname)&&!empty($surname)){ //checks if all fields have been filled in
	if(strlen($email)>30||strlen($firstname)>40||strlen($surname)>40){
		echo 'Please keep to the maximum length of fields.';
	}else{
		$query = "SELECT email FROM users WHERE email ='$email'"; //checks if email already exits in database
		$query_run = mysql_query($query);
	
		if (mysql_num_rows($query_run)==1) { 
			echo 'The email <strong>'.$email.' </strong><br>already exists';
		}else{
			$query = "INSERT INTO users VALUES ('','".mysql_real_escape_string($email)."'
			,'".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($surname)."')";
			if ($query_run = mysql_query($query)){
				header('Location: successfulregister.php');
			}else{
				echo 'We couldn\'t register you at this time :(';
			}
		}
	}
	
	
}else{
	echo 'All fields are required';
}
}


?>

<form action="register.php" method="POST">
Email:<br> <input type="text" id="userInput" name="email" maxlength="30"  value="<?php if (isset($email)) {echo $email;} ?>"/><br><br> 
Firstname:<br> <input type="text" name="firstname" maxlength="40" value="<?php if(isset($firstname)){ echo $firstname;} ?>"><br><br>
Surname:<br> <input type="text" name="surname" maxlength="40" value="<?php if (isset($surname)) {echo $surname;} ?>"><br>
<br><input type="submit" value="Register">

</form>


	
        
				
</section>
      
<section id="secondary">
	<div id="inputText"/> 
 </section>

<footer>
        
	<a href="https://twitter.com/MartinFarragher?lang=en" target="_blank"><img src="img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
        
	<a href="https://www.facebook.com/martin.farragher.9" target="_blank"><img src="img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
        
	<p>&copy; 2015 www.hanlyphysiotherapy.ie</p>
      

</footer>

    </div>
  </body>
</html>
