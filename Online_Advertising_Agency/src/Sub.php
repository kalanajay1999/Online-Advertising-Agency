<?php
	include 'config2.php';
?>

<?php
	
	$email=$_POST["email"];
	
	
	$sql ="insert into email(Email)values('$email')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Record inserted') </script>";
		header("Location:Index.html");
	}
	else{
		echo "<script>alert('Error inserting') </script>";
	}
	
	mysqli_close($conn);
?>