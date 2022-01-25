<?php
	include 'config.php';
?>

<?php
	$firstName= $_POST["fname"];
	$lastName= $_POST["fname2"];
	$gender= $_POST["gender"];
	$dob= $_POST["dob"];
	$mobileNum=$_POST["mobile"];
	$address=$_POST["Addr"];
	$email=$_POST["emailAd"];
	$password=$_POST["pwd"];
	
	$sql ="insert into register(First_name,Last_name,Gender,Date_of_Birth,Mobile_number,Address,Email_Address,Password)values('$firstName','$lastName','$gender','$dob','$mobileNum','$address','$email','$password')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Record inserted') </script>";
		header("Location:Index.html");
	}
	else{
		echo "<script>alert('Error inserting') </script>";
	}
	
	mysqli_close($conn);
?>