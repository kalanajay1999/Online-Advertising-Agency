<!DOCTYPE html>
<html>

<head>
	<title>Online Advertising Agency</title>
	<link rel="stylesheet" type="text/css" href="styles/ad.css">
	<script src="js/javaScript.js"></script>
	
</head>

<body bgcolor="#e7ebfd" >
<img src="Images/logo.png" width="10%" align="left" alt="logo" title="Logo">
<a href="Register.html">
<img src="Images/profile.png" width="5%" align="right" alt="profile" title="Profile">
</a>
<h1 class="header ">AD Plus Online Advertising Agency</h1>

<hr id="test"/>
<br>
<ul class="menu">
	<li class="menu"><a href="Index.html">Home</a></li>
	<li class="menu"><a href="ViewAd.html">View Ad</a></li>
	<li class="menu"><a href="Create ad.html">Create Ad</a></li>
	<li class="menu"><a href="assignment2.html">Publish Ad</a></li>
	<li class="menu"><a href="signin.php">Sign In</a></li>
	 <li class="menu"><a href="Register.html">Register</a></li>
	 <li class="menu"><a href="payment details.html">Payment Details</a></li>
	<li class="menu"><a href="Contact Us.html">Contact Us</a></li>
	<li class="menu"><a href="About us.html">About Us</a></li>

	<div class="search">
	 <input type="text" placeholder="Search.." name="searchText">
	 </div>
	 <div align="right">
	 <form method="post" action="Search.php">
	<button type="submit" name="search"  style="width:5%;text-align:center;margin: 3px;background-color: black;color: white;padding: 12px ;cursor: pointer;">Search</button>
	</form>
	</div>
</ul>
<br><br>
	<form  style="width:60%;background-color:#d1e0e0;border:1px solid blue;padding-left:50px;padding-bottom:20px;padding-right:50px;" action="Sub.php" target="_self" method="POST" ">
			<br>
			<label>Subscribe to Newsletter</label><br>
	<input type="email" id="email" name="email" style="width:90%;padding: 13px 21px;border: 2.2px solid green;border-radius: 5px;box-sizing: border-box; margin: 10px 0;" pattern="[a-zA-Z0-9_*+-$%^&!]+@[a-zA-Z0-9]\.[a-z]{2,3}" placeholder="Enter your email" required><br><br>
	<input type="submit" id="btn1" name="btn3" style="padding: 10px 30px;cursor: pointer;background-color: green;color: black;" value="Subscribe Now" >
	</form>
	<br><br><br><br><br><br><br>
<hr id="test"/>
<a href="#">
<img src="Images/payment.png" align="left" width="15%" alt="payment" title="payment image" id="main" onclick="errorButton2()" >
</a>
<button type="button" id="sButton" class="subscribe" ><a href="#">Subscribe to Newsletter</button>
	 

</body>

</html>