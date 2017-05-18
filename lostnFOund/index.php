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

$sql="SELECT Pic_name FROM `person_details` where id=(SELECT MAX(id) FROM person_details)";

$result=$conn->query($sql);
$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Lost & Found</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
</head>
<body>
	<div id="header">
		<div>
			><div id="logo">
				<a href="index.php"><img src="images/lost.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li class="selected">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>

				<li>
					<a href="gallery.php">DATABASE</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div>
			<div class="body">
				<div id="adbox">
					<!-- SELECT Pic_name FROM `person_details` where id=(SELECT MAX(id) FROM person_details)-->
					<?php echo "<img src='Upload/$row[Pic_name]'>"; ?>
					 <span class="info"> <a href="blog.php" class="btn1">View Details</a> </span>
					<div class="details">
						<h1>You Lose<br> We Help in Finding<br> </h1>
						<p>
							We help in providing a platform for you to find lost things and help others in finding them by publishing about a thing you found.
						</p>
					</div>
				</div>
				<ul id="featured">
					<li style="width: 25%;">
						<div>
							<img src="images/phone.jpg" alt="Img" class="img-responsive"> <a href="blog.php"></a>
						</div>
						<div class="details">
							<h4>Electronics</h4>
							<p>
								Oftenly we end up losing our electronic things such as headphones,phones,etc.
							</p>
						</div>
					</li>
					<li style="width: 25%;" class="bedroom">
						<div>
							<img src="images/book.jpg" alt="Img" class="img-responsive"> <a href="blog.php"></a>
						</div>
						<div class="details">
							<h4>Books</h4>
							<p>
								Books are again sometimes lost.We help You to get Your Books back. 
							</p>
						</div>
					</li>
					<li style="width: 25%;" class="kitchen">
						<div>
							<img src="images/id.jpg" alt="Img" class="img-responsive"> <a href="blog.php"></a>
						</div>
						<div class="details">
							<h4>Identity</h4>
							<p>
								Most Important thing of Our College is Our ID Card and Wallet.
							</p>
						</div>
					</li>
					<li style="width: 25%;" class="extra">
						<div>
							<img src="images/shoe.jpg" alt="Img" class="img-responsive"> <a href="blog.php"></a>
						</div>
						<div class="details">
							<h4>Other</h4>
							<p>
									Help Youreself and others in finding things they lose time to time.
							</p>
						</div>
					</li>
				</ul>
				<div class="contact">
					<p>
						For Inquiries Please Call: <b>009790458633</b> Or you can visit us at: <b>BOYS HOSTEL,B-BLOCK	<br>2ND FLOOR</b>
					</p>
				</div>
				<div class="blog">
					<h4>From the Blog</h4>
					<div>
						<img src="images/beat.jpg" alt="Img"> <span>April 16, 2023</span>
						<p>
							Rahul's Gear
						</p>
						<a href="blog.php" class="more">Read More</a>
					</div>
					<div>
						<img src="images/air.jpg" alt="Img"> <span>April 15, 2023</span>
						<p>
							NIke-Air Max<br>
							
						</p><p></p>
						<a href="blog.php" class="more">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<div id="links">
				<div class="showroom">
					<h4>Download Our App</h4>
					<a href="gallery.php"><img src="images/home.png" alt="Img"></a>
					<p>
						 <a href="blog.php">lostnfound@gmail.com</a>
					</p>
				</div>
				<div>
					<h4>Recent Blog Posts</h4>
					<ul class="posts">
						<li>
							<span class="time">Apr 16</span>
							<p>
								<a href="blog.php">Titan Watch &amp;Sid found a titan watch in the footballl field.</a> Maybe you’re looking for something diferent, something special.
							</p>
						</li>
						<li>
							<span class="time">Apr 15</span>
							<p>
								<a href="blog.php">Maria Lost his Mobile in the cafetaria.</a> Thank You lostnfound for helping me find my mobile.
							</p>
						</li>
						<li>
							<span class="time">Apr 14</span>
							<p>
								<a href="blog.php">Looking for the Owner</a> I found a apple ipod in mba block.Owner please contact
							</p>
						</li>
					</ul>
				</div>
				<div>
					<form action="#" method="post" id="newsletter">
						<h4>Join Our Newsletter</h4>
						<input type="text" value="Enter Email Address Here For Updates" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						<input type="submit" value="Sign up" class="btn2">
					</form>
					<div id="connect">
						<h4>Social Media</h4>
						<a href="https://www.facebook.com/pages/LostnFound/389588924528997" target="_blank" class="facebook"></a> <a href="https://plus.google.com/106891388122667854725" target="_blank" class="googleplus"></a> <a href="https://twitter.com/hettiegwatson" target="_blank" class="twitter"></a>
					</div>
				</div>
			</div>
			<ul class="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="gallery.php">Database</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
			<p id="footnote">
				© Copyright 2023. All Rights Reserved.
			</p>
		</div>
	</div>