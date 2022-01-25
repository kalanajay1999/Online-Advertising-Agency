<?php
	include_once 'config.php';
?>
<?php
	$budget= $_POST["tbudget"];
	$customers= $_POST["customers"];
	$location= $_POST["location"];
	$date= $_POST["rdate"];
	$email=$_POST["emailAdd"];
	$days=$_POST["pwd"];
	$other=$_POST["cpwd"];
	
	
	$sql ="insert into submit(Total_Budget,Target_Customers,Target_Locations,Releasing_Date,Email,Days_run,Other)values('$budget','$customers','$location','$date','$email','$days','$other')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Record inserted') </script>";
		header("Location:Index.html");
	}
	else{
		echo "<script>alert('Error inserting') </script>";
	}
	
	mysqli_close($conn);
?>