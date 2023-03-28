<?php
	include_once'confiq.php';
?>
<?php
	$name=$_POST["cid"];
	$email=$_POST["phone"];
	$date=$_POST["date"];
	$message=$_POST["message"];
	
	$sql="INSERT INTO request(name,email,date,message)VALUES('$name','$email','$phone','$message')";
	
	if(mysqli_query($conn,$sql)){
		echo"<script>alert('Record inserted suceesfully')</script>";
		header("location:../html/home.html"); 
	}
	else{
		echo"<script>alert('Error in inserting records')</script>".$conn->error;
	}
	mysqli_close($conn);
?>