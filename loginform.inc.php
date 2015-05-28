<?php

if (isset($_POST['email'])&& isset($_POST['password'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$password_hash = md5($password);
	
	
	if (!empty($email) && !empty($password)){
		
		$query = "SELECT id FROM users WHERE email ='".mysql_real_escape_string($email)."' AND password='".mysql_real_escape_string($password_hash)."'";
		if ($query_run = mysql_query($query)){
			$query_num_rows = mysql_num_rows($query_run);
			
			if ($query_num_rows==0){
				echo 'Invalid email/password combination.';
			}	else if ($query_num_rows==1){
				$user_id = mysql_result($query_run, 0, 'id');
				$_SESSION['user_id'] = $user_id;
				header('Location: appointment.php');
				}
		}
	}else{
			echo 'You must supply a Email and Password.';
		}	
	}

?>

<form action="<?php $current_file; ?>" method="POST">

<input type="text" name="email" value="Email" onfocus="if (this.value == 'Email') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Email';}"><br> 
<input type ="password" name="password" value="Password" onfocus="if (this.value == 'Password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password';}"><br>
<input type="submit" class="button button-primary" value="Log In">
</form>