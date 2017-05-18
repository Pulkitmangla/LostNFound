<!DOCTYPE html>
<html>
<head>

	<title>Blog</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<style>
  		.carousel-inner > .item > img,
  		.carousel-inner > .item > a > img {
      		width: 50%;
      		margin: auto;
  		}
  </style>
</head>

<body>
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
?>

	<div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><img src="images/lost.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li >
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="gallery.php">DATABASE</a>
				</li>
				<li class="selected">
					<a href="blog.php">Blog</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
	<div class="body">
		<div class="container"><br>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  			<!-- Indicators -->
  			<ol class="carousel-indicators">
  				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  				<li data-target="#myCarousel" data-slide-to="1"></li>
  				<li data-target="#myCarousel" data-slide-to="2"></li>
  				<li data-target="#myCarousel" data-slide-to="3"></li>
  				</ol>

  				<!-- Wrapper for slides -->
  				<div class="carousel-inner" role="listbox">
    				<div class="item active">
    					<?php $result=$conn->query("SELECT * FROM `person_details` where id=7");
						$row=mysqli_fetch_assoc($result);
						echo "<img src='Upload/$row[Pic_name]' style='width=50%'>";
						?>
					<div class="carousel-caption">
						<table no-border >
    				<tr align="left">
    					<td>Name of Item Lost:</td>
    					<td><?php $result=$conn->query("SELECT * FROM `person_details` where id=7");
						$row=mysqli_fetch_assoc($result);
						echo "$row[Name_item]"?></td>
					</tr>

					<tr align="left">
						<td>Color:</td>
						<td><?php $result=$conn->query("SELECT * FROM `person_details` where id=7");
						$row=mysqli_fetch_assoc($result);
						echo "$row[color]"?></td>
					</tr>

					<tr align="left">
						<td>Place Where the item was lost:</td>
						<td><?php $result=$conn->query("SELECT * FROM `person_details` where id=7");
						$row=mysqli_fetch_assoc($result);
						echo "$row[place_lost]"?></td>
					</tr>
		
					<tr align="left">
						<td>Description:</td>
						<td><?php $result=$conn->query("SELECT * FROM `person_details` where id=7");
						$row=mysqli_fetch_assoc($result);
						echo "$row[description]"?></td>
						</tr>
						<tr>
						<td><a href="email.php" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-barcode"></span> Contact Owner</a></td>
						</tr>
					</table>
					</div>
    			</div>

    			 <div class="item">
    			 	<?php $result=$conn->query("SELECT * FROM `person_details` where id=6");
						$row=mysqli_fetch_assoc($result);
						echo "<img src='Upload/$row[Pic_name]' style='width=50%'>";
						?>
    			 <div class="carousel-caption">
						<table no-border >
    				<tr align="left">
    					<td>Name of Item Lost:</td>
    					<td><?php $result=$conn->query("SELECT * FROM `person_details` where id=2");
						$row=mysqli_fetch_assoc($result);
						echo "$row[Name_item]"?></td>
					</tr>

					<tr align="left">
						<td>Color:</td>
						<td><?php $result=$conn->query("SELECT * FROM `person_details` where id=6");
						$row=mysqli_fetch_assoc($result);
						echo "$row[color]"?></td>
					</tr>

					<tr align="left">
						<td>Place Where the item was lost:</td>
						<td><?php $result=$conn->query("SELECT * FROM `person_details` where id=6");
						$row=mysqli_fetch_assoc($result);
						echo "$row[place_lost]"?></td>
					</tr>
		
					<tr align="left">
						<td>Description:</td>
						<td><?php $result=$conn->query("SELECT * FROM `person_details` where id=6");
						$row=mysqli_fetch_assoc($result);
						echo "$row[description]"?></td>
						</tr>
						<tr>
						<td><a href="email.php" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-barcode"></span> Contact Owner</a></td>
						</tr>
					</table>
					</div>
    			</div>

    			<div class="item">
    			 	<?php $result=$conn->query("SELECT * FROM `person_details` where id=3");
						$row=mysqli_fetch_assoc($result);
						echo "<img src='Upload/$row[Pic_name]' style='width=50%'>";
						?>
    			 <div class="carousel-caption">
						<table no-border >
    				<tr>
    					<td>Name of Item Lost:</td>
    					<td><?php $result=$conn->query("SELECT * FROM `person_details` where id=3");
						$row=mysqli_fetch_assoc($result);
						echo "$row[Name_item]"?></td>
					</tr>

					<tr>
						<td>Color:</td>
						<td><?php $result=$conn->query("SELECT * FROM `person_details` where id=3");
						$row=mysqli_fetch_assoc($result);
						echo "$row[color]"?></td>
					</tr>

					<tr>
						<td>Place Where the item was lost:</td>
						<td><?php $result=$conn->query("SELECT * FROM `person_details` where id=3");
						$row=mysqli_fetch_assoc($result);
						echo "$row[place_lost]"?></td>
					</tr>
		
					<tr>
						<td>Description:</td>
						<td><?php $result=$conn->query("SELECT * FROM `person_details` where id=3");
						$row=mysqli_fetch_assoc($result);
						echo "$row[description]"?></td>
						</tr>
						<tr>
						<td><a href="email.php" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-barcode"></span> Contact Owner</a></td>
						</tr>
					</table>
					</div>
    			</div>
    		</div>

    		<!-- Left and right Controls -->

    		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  			</a>
  			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  			</a>
  			<br>
  			<br>
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
						 <a href="index.php">lostnfound@gmail.com</a>
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