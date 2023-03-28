<?php
	include_once'confiq.php';
?>
<?php
	$name=$_POST["name"];
	$email=$_POST["email"];
	$phone=$_POST["phno"];
	$message=$_POST["msg"];
	
	$sql="INSERT INTO contact(name,email,phone,message)VALUES('$name','$email','$phone','$message')";
	
	if(mysqli_query($conn,$sql)){
		echo"<script>alert('Record inserted suceesfully')</script>";
		header("location:../html/home.html"); 
	}
	else{
		echo"<
		script>alert('Error in inserting records')</script>".$conn->error;
	}
	mysqli_close($conn);
?>