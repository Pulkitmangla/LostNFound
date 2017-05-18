<?php

$name=test_input($_POST["name"]);
$email=test_input($_POST["email"]);
$phone=test_input($_POST["phone"]);
$message=test_input($_POST["message"]);

$servername = "localhost";
$username = "root";
$password = "";
$db ="myDB";
// Create connection
$conn = new mysqli($servername, $username, $password,$db) or die($conn);
// Check connection
if ($conn->connect_error) {
    die("Connection failed:<br>" . $conn->connect_error);
} 

$sql = "INSERT INTO Contact_us(Name,Email,Phone,Message) VALUES ('$name','$email','$phone','$message')";

if ($conn->query($sql) === TRUE) {
	page_redirect();
	} 
	else {
    echo "<br>Error inserting values in table: " . $conn->error;
}

 function page_redirect()
 {
 	echo '<script>alert("Details Submitted");</script>';
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.'http://localhost/lostnfound/contact.php'.'">';
   exit; 
 }

function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
         
?>