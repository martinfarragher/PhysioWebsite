<!DOCTYPE html>
<html>
  

<head>
    
	<meta charset="utf-8">
    
	<title>Hanly Physiotherapy |home</title>
    
	<link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
  

<body>
    
	<header>
      
		<a href="index.html" id="logo">
        
		<h1>Hanly Physiotherapy</h1>
        
		<h2>"Quality care from the people who care"</h2>
      </a>
      
<nav>
        
	<ul>
          
		<li><a href="index.php">home</a></li>
		<li><a href="services.php">services</a></li>
		<li><a href="register.php">register</a></li>>
		<li><a href="contact.php">contact</a></li>>
		<li><a href="appointment.php" class="selected">appointment</a></li>>
        
	</ul>
     
</nav>
    
	</header>
	
	     <div id="wrapper">
     
	 <section id="primary">
	 
 <?php
	require 'core.inc.php';
	require 'connect.php';
	
	if(loggedin()){
		$name = getuserfield('name');
		echo 'You\'re logged in '.$name.' <br><a href="logout.php">Log Out</a>';
		include 'makeappoint.php';
	}else{
		include 'loginform.inc.php';
	}
	
?>
 
		
      </section>

<footer>
        
	<a href="https://twitter.com/MartinFarragher?lang=en" target="_blank"><img src="img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
        
	<a href="https://www.facebook.com/martin.farragher.9" target="_blank"><img src="img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
	        
	<p>&copy; 2015 www.hanlyphysiotherapy.ie</p>
      

</footer>
    

</div>
  

</body>
</html>
