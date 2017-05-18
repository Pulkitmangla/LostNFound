<?php

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

$sql="SELECT * FROM `person_details` where id=1";

$result=$conn->query($sql);
$row=mysqli_fetch_assoc($result);

$det="The contact Details are:<br>$row[Name]<br>$row[Registration_No]<br>$row[Email]<br>$row[Phone]<br>$row[Name_item]<br>$row[color]<br>$row[description]<br>$row[date_lost]<br>$row[place_lost]<br>ThankYou<br>Team Lost&Found";

    function prompt(){
        echo("<script type='text/javascript'> var answer = prompt('"Enter Your Email Id:"'); </script>");

        $answer = "<script type='text/javascript'> document.write(answer); </script>";
        return($answer);
    }

    $mal=prompt();

// send email
mail($mal,"pulkitmangla@gmail.com","Contact Details:Lost&Found",$det);

?>