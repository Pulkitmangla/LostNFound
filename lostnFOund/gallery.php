<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Database</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/details.css" type="text/css">
</head>

<body>
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
				<li class="selected">
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
			<div class="body" id="gallery">
					<div class="form-style-5">
					<h1>Enter The Details</h1>
					<table>
					<form method="get"  enctype="multipart/form-data" action="Database.php"> 
					<tr>
					<td>Name:</td>
					<td><input type="text" name="name" required></td>
					</tr>
					<tr>
					<td>Registration Number</td>
					<td><input type="text" name="regno" required></td>
					</tr>
					<tr>
					<td>Email Id:</td>
					<td><input type="Email" name="email" required></td>
					</tr>
					<tr>
					<td>Phone No. :</td>
					<td><input type="text" name="phone" required></td>
					</tr>
					<tr>
					<td>Name of the Lost Item:</td>
					<td><input type="text" name="lost_name" required></td>
					</tr>
					<tr>
					<td>Color: </td>
					<td><input type="text" name="color_item" required></td>
					</tr>
					<tr>
					<td>Category:</td>
					<td><select>
						<option selected disabled>Choose One</option>
						<option>Electronics</option>
						<option>Books</option>
						<option>Identity</option>
						<option>Others</option>
					</select></td>
					</tr>
					<tr>
					<td>Description:</td>
					<td><textarea name="description" rows="8" cols="60" required></textarea></td>
					</tr>
					<tr>
					<td>Image of the Lost Item:</td>
					<td><input type="file" name="pic" value="fileupload" id="fileupload"  accept="image/*">
					</td>	
					</tr>
					<tr>
					<td>Date of Losing:</td>
					<td> <input type="Date" name="date_lost" required></td>
					</tr>
					<tr>
					<td>Place Where The Item was Lost: </td>
					<td> <input type="text" name="place_lost" required></td>
					</tr>
					<tr>
					<td><input type="submit" name="submit" style="margin-left:100px"></td>
					<td><input type="reset" style="margin-left:180px"></td>
					</tr>	
					</form>
					</table>
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