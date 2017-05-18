<?php


$name=$regno=$email=$phone=$color=$des=$date="";
$name=test_input($_POST["name"]);
$regno=test_input($_POST["regno"]);
$email=test_input($_POST["email"]);
$phone=test_input($_POST["phone"]);
$name_lost=test_input($_POST["lost_name"]);
$color=test_input($_POST["color_item"]);
$des=test_input($_POST["description"]);
$date_lost=test_input($_POST["date_lost"]);
$place_lost=test_input($_POST["place_lost"]);

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

    $fileCount = count (glob ('Upload/*'))+1;
    $info = pathinfo($_FILES['pic']['name']);
    $ext = $info['extension']; // get the extension of the file
    $newname = "$fileCount.".$ext; 
    $target = 'Upload/'.$newname;
    $result = move_uploaded_file( $_FILES['pic']['tmp_name'], $target);
    $img = resize_image($target, 536, 420);
    imagejpeg($img,$target);
    
   if ($result) {
      $sql = "INSERT INTO Person_Details(Name,Registration_No,Email,Phone,Name_item,color,description,date_lost,place_lost,Pic_name) VALUES ('$name', '$regno', '$email','$phone','$name_lost','$color','$des','$date_lost','$place_lost','$newname')";
      if ($conn->query($sql) === TRUE) {
        page_redirect();
      } 
      else {
        echo "<br>Error inserting values in table: " . $conn->error;
      }
    }
      else {
        echo '<script>alert("Failed to upload your image")</script>';
    }

  function page_redirect(){
    echo '<script>alert("Details Submitted");</script>';
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.'http://localhost/lostnfound/gallery.php'.'">';
    exit; 
  }

  function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }

    function resize_image($file, $w, $h, $crop=FALSE) {
        list($width, $height) = getimagesize($file);
        $r = $width / $height;
        if ($crop) {
            if ($width > $height) {
                $width = ceil($width-($width*abs($r-$w/$h)));
            } else {
                $height = ceil($height-($height*abs($r-$w/$h)));
            }
            $newwidth = $w;
            $newheight = $h;
        } else {
            if ($w/$h > $r) {
                $newwidth = $h*$r;
                $newheight = $h;
            } else {
                $newheight = $w/$r;
                $newwidth = $w;
                }
            }
        $src = imagecreatefromjpeg($file);
        $dst = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

        return $dst;
    }     
?>
