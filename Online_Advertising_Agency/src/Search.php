<?php
	include 'config.php';
?>
<!DOCTYPE html>
<html>

<head>
	<title>Search Results</title>
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
	<form method="post" action="Search.php">
	<div class="search">
	 <input type="text" placeholder="Search.." id="searchText" name="searchText">
	 </div>
	 <div align="right">
	 
	<button type="submit" name="search"  style="width:5%;text-align:center;margin: 3px;background-color: black;color: white;padding: 12px ;cursor: pointer;">Search</button>
	</form>
	</div>
</ul>
<h2>Search Results</h2>


<?php


	require 'config.php';
	readData();
	function readData(){
	global $conn;
	$sql = "SELECT ID , First_name FROM register";
	$result=$conn->query($sql);
	
	if($result->num_rows>0){
		
		while($row=$result->fetch_assoc()){
			echo "<BR/>ID:". $row["ID"]."-".$row["First_name"]."<BR/>";
		}
	}
	else{
		echo "no results";
	}
	
	
	
	
	$conn->close();
	}

?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<hr id="test"/>
<a href="#">
<img src="Images/payment.png" align="left" width="15%" alt="payment" title="payment image" id="main" onclick="errorButton2()" >
</a>
<button type="button" id="sButton" class="subscribe" onclick="errorButton()"><a href="Subscribe.php">Subscribe to Newsletter</button>
	 

</body>

</html>