<?php
include_once'process.php';
?>
<?php
   $NAME = $_POST["field1"];
   $ADDRESS = $_POST["field2"];
   $EMAIL = $_POST["field3"];
   $PHONE = $_POST["field4"];
   
   
  $sql = "insert into item(id,name, address, email, phone)values('','$NAME','$ADDRESS','$EMAIL','$PHONE')";
  
  if(mysqli_query($conn,$sql)){
	  echo "<script>alert('Record insert successfully')</script>";
	  header("Location:index.html");
  }
  else{
  echo "<script>alert('Record insert unsuccessfully')</script>";
  }
  mysqli_close($conn);
  ?>