<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "a_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT users.id, users.email, users.password, users.name, users.mobile, appoint.id, appoint.day, appoint.time, appoint.comment, appoint.user_link 
FROM users, appoint
WHERE users.id=user_link";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <strong>Email: </strong>" . $row["email"]. " <strong>- Name </strong> " . $row["name"]. " <strong>- Mobile </strong>". $row["mobile"]. " <strong>- Time </strong> " . $row["time"]. " <strong>- Day </strong> " . $row["day"]. " <strong>- Comment </strong> " . $row["comment"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>