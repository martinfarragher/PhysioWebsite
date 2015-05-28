
		
		
	<?php

require 'connect.php';
	
if (isset($_POST['day']) && isset($_POST['time'])&& isset($_POST['comment'])){ //checks to see if each field is submitted
	$day = $_POST['day'];
	$time = $_POST['time'];
	$comment = $_POST['comment'];

if (!empty($day)&&!empty($time)&&!empty($comment)){ //checks if all fields have been filled in
	
			$query = "INSERT INTO appoint (id, day, time, comment, user_link) VALUES('','".mysql_real_escape_string($day)."',
			'".mysql_real_escape_string($time)."','".mysql_real_escape_string($comment)."','')";
			if ($query_run = mysql_query($query)){
				header('Location: successfulregister.php');
			}else{
				include ('noregister.php');
			}
	
}else{
	echo 'All fields are required';
	include ('noregister.php');

}
}


?>	
		
		

<form action="makeappoint.php" method="POST">
<br>
	<h3>Make appointment</h3>

Preferred Day:<br> 
<select name="day" maxlength="20" value="<?php if (isset($day)) {echo $day;} ?>">
  <option value="Any">Any</option>
  <option value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option value="Wednesday">Wednesday</option>
  <option value="Thursday">Thursday</option>
  <option value="Friday">Friday</option>
  <option value="Saturday">Saturday</option>
</select><br><br>


Preferred Time:<br> 
<select name="time" maxlength="20" value="<?php if (isset($time)) {echo $time;} ?>">
  <option value="Any">Any</option>
  <option value="9:00 am">9:00 am</option>
  <option value="9:30 am">9:30 am</option>
  <option value="10:00 am">10:00 am</option>
  <option value="10:30 am">10:30 am</option>
  <option value="11:00 am">11:00 am</option>
  <option value="11:30 am">11:30 am</option>
  <option value="12:00 am">12:00 am</option>
  <option value="12:30 am">12:30 am</option>
  <option value="1:00 pm">1:00 pm</option>
  <option value="1:30 pm">1:30 pm</option>
  <option value="2:00 pm">2:00 pm</option>
  <option value="2:30 pm">2:30 pm</option>
  <option value="3:00 pm">3:00 pm</option>
  <option value="3:30 pm">3:30 pm</option>
  <option value="4:00 pm">4:00 pm</option>
  <option value="4:30 pm">4:30 pm</option>
  <option value="5:00 pm">5:00 pm</option>
  <option value="5:30 pm">5:30 pm</option>
</select><br><br>

Comment on Injury:<br />
  <textarea name="comment" id="comment" maxlength="100" value="<?php if (isset($comment)) {echo $comment;} ?>"></textarea><br />

<br><input type="submit" value="Book Now">
	<div id="emailText"/> <br>
	



</form>
    