<!DOCTYPE html>
<html>
  
<head>
    
	<meta charset="utf-8">
	
	<script type="text/javascript" src="typing.js"></script>

    
	<title>Hanly Physiotherapy |home</title>
    
	<link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
  
 <body onload="process()">

<body>
    
	<header>
      
		<a href="index.html" id="logo">
		
       <h1>Hanly Physiotherapy</h1>
        
		<h2>"Quality care from the people who care"</h2>
      </a>
      
<nav>
        
	<ul>
          
		<li><a href="index.php">home</a></li>
		<li><a href="services.php" >services</a></li>
		<li><a href="register.php" class="selected">register</a></li>
		<li><a href="contact.php">contact</a></li>
		<li><a href="appointment.php">appointment</a></li>

	</ul>
      
</nav>
    
	</header>
    <div id="wrapper">
      

<section id="primary">

		<h3>Register to make appointment</h3>

       
	   <?php
require 'core.inc.php';
require 'connect.php';

if (!loggedin()){
	
if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['name'])&& isset($_POST['mobile'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_again = $_POST['password_again'];
	$password_hash = md5($password);
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	
if (!empty($email)&&!empty($password)&&!empty($password_again)&&!empty($name)&&!empty($mobile)){
	if(strlen($email)>30||strlen($name)>40){
		echo 'Please ahear to the maxlength of fields.';
	}else{
	if ($password!=$password_again){
		echo 'Passwords do not match';
	}else{
	if (strlen($password)<5){
		echo 'Password must be longer than 4 characters';
	}else{
	if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		echo 'Invalid email please try again';
	}else{
	if (strlen($mobile)<8 || strlen($mobile)>10){
		echo 'mobile is incorrect';
	}else{
		if (strlen($name)<2){
		echo 'You name must be longer than 2 letters?';
	}else{
		
		$query = "SELECT email FROM users WHERE email ='$email'";
		$query_run = mysql_query($query);
		
		if (mysql_num_rows($query_run)==1) {
			echo 'The email '.$email.' already exists';
		}else{
			$query = "INSERT INTO users VALUES ('','".mysql_real_escape_string($email)."','".mysql_real_escape_string($password_hash)."'
			,'".mysql_real_escape_string($name)."','".mysql_real_escape_string($mobile)."')";
			if ($query_run = mysql_query($query)){
				header('Location: successfulregister.php');
			}else{
				echo 'We couldn\'t register you at this time :(';
			}
		}
	}
	}
	}
	}
	}
	}
	
}else{
	echo 'All fields are required';
}
}


?>

<form action="register.php" method="POST">
Email:<br> <input type="text" id="userInput" name="email" maxlength="30"  value="<?php if (isset($email)) {echo $email;} ?>"><br><br>
Password:<br> <input type="password" name="password"><br><br>
Password again:<br> <input type="password" name="password_again"><br><br>
Name:<br> <input type="text" name="name" maxlength="40" value="<?php if(isset($name)){ echo $name;} ?>"><br><br>
Mobile:<br> <input type="text" name="mobile" maxlength="40" value="<?php if(isset($mobile)){ echo $mobile;} ?>"><br><br>

<br><input type="submit" value="Register">
</form>

<?php	
}else if(loggedin()){
	echo 'You\'re already registered and logged in.';
}

?>
	
      
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



