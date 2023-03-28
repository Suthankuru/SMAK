<?php
	include_once'confiq.php';
?>
<?php
	$name=$_POST["name"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$message=$_POST["msg"];
	
	$sql="INSERT INTO feedback(name,email,phno,message)VALUES('$name','$email','$phone','$message')";
	
	if(mysqli_query($conn,$sql)){
		echo"<script>alert('suceesfull')</script>";
		header("location:../html/home.html");
	}
	else{
		echo"script>alert('unsuceesfull')</script>".$conn->error;
	}
	mysqli_close($conn);
?>