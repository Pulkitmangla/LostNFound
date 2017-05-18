<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact Us</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
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
				<li>
					<a href="gallery.php">DATABASE</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
				<li class="selected">
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div>
			<div class="body" id="contact">
				<div id="sidebar">
					<div class="body">
						<img src="images/contact.jpg" alt="Img">
						<div class="contact">
							<p>
								For More Information Please Call: <b>09789267588</b> Or you can visit us at: <b>BOYS HOSTEL,B-BLOCK	<br>2ND FLOOR</b> Or just Email us instead at: <b class="email">lostnfound@gmail.com</b>
							</p>
						</div>
					</div>
				</div>
				<div id="main">
					<h1>Contact</h1>
					<p>
						Please for any queries feel free to Contact Us.
						Your suggestions are valued. 
					</p>
					<form action="contactdb.php" method="post">
						<label>Name</label>
						<input type="text" name="name" required>
						<label>Email Address</label>
						<input type="email" name="email" required>
						<label>Contact Number</label>
						<input type="text" name="phone" required>
						<label>Message</label>
						<textarea name="message" required></textarea>
						<input type="submit" value="Send Message" class="btn1">
					</form>
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