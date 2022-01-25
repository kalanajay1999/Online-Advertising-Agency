<?php
	include_once 'config3.php';
?>

<?php
	$name= $_POST["hname"];
	$number= $_POST["num"] ;
	$expiry= $_POST["date"] ;
	$cvc= $_POST["cvc"];
	
	
	$sql = "insert into payment(card_holder_name,card_number,expiry,cvc)values('$name','$number','$expiry','$cvc')";

	if(mysqli_query($conn,$sql)){
		echo"<script>alert ('Record inserted successfully')</script>";
		header("Location:index.html");
	}
	else{
		echo"<script>alert ('Error in inserting records')</script>";
	}
	
	mysqli_close($conn);


?>