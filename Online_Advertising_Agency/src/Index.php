
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
	<li class="menu"><a href="#">Home</a></li>
	<li class="menu" id="main" onclick="errorButton2()"><a href="#">View Ad</a></li>
	<li class="menu" id="main" onclick="errorButton2()"><a href="#">Create Ad</a></li>
	<li class="menu" id="main" onclick="errorButton2()"><a href="#">Publish Ad</a></li>
	<li class="menu" id="main" onclick="errorButton2()"><a href="#">Sign In</a></li>
	 <li class="menu"><a href="Register.html">Register</a></li>
	<li class="menu" id="main" onclick="errorButton2()"><a href="#">Contact Us</a></li>
	<li class="menu" id="main" onclick="errorButton2()"><a href="#">About Us</a></li>

	<div class="search">
	 <input type="text" placeholder="Search.." name="Search">
	 </div>
	 <div align="right">
	 <form method="post" name="searchForm">
	<button type="submit" name="search"  style="width:5%;text-align:center;margin: 3px;background-color: black;color: white;padding: 12px ;cursor: pointer;">Search</button>
	</form>
	</div>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online advertising agency";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID,First_name,Last_name FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["ID"]. " - Name: " . $row["First_name"]. " " . $row["Last_name"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</ul>
	


<img src="Images/main.jpg" align="center" width="100%" alt="main image" title="home">
<hr id="test"/>
<a href="#">
<img src="Images/payment.png" align="left" width="15%" alt="payment" title="payment image" id="main" onclick="errorButton2()" >
</a>
<button type="button" id="sButton" class="subscribe" onclick="errorButton()"><a href="#">Subscribe to Newsletter</button>
	 

</body>

</html>