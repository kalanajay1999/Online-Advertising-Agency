<?php
	include_once 'config.php';
?>
<?php
	$name= $_POST["uname"];
	$address= $_POST["uaddress"];
	$contactNum= $_POST["unumber"];
	$email= $_POST["uemail"];
	$identityNum=$_POST["uid"];
	$adType=$_POST["adType"];
	$audience=$_POST["adAudience"];
	$time=$_POST["adDays"];
	$budget=$_POST["adBudget"];
	$description=$_POST["adTxt"];
	
	$sql ="insert into createad(Name,Address,Contact_Number,Email,Identity_Num,Ad_Type,Audience,Time,Budget,Description)values('$name','$address','$contactNum','$email','$identityNum','$adType','$audience','$time''$budget','$description','')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Record inserted') </script>";
		header("Location:Index.html");
	}
	else{
		echo "<script>alert('Error inserting') </script>";
	}
	
	mysqli_close($conn);
?>