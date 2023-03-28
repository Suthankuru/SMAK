<?php
	include_once'confiq.php';
?>
<?php
	$name=$_POST["name"];
	$email=$_POST["mail"];
	$phno=$_POST["num"];
	$gender=$_POST["gender"];
	$address=$_POST["address"];
	$dob=$_POST["date"];
	$password=$_POST["rpwd"];
	
	$sql="INSERT INTO details(name,email,phno,gender,address,dob,password)VALUES('$name','$email','$phno','$gender','$address','$dob','$password')";
	
	if(mysqli_query($conn,$sql)){
		echo"<script>alert('sucessfull')</script>";
		header("location:../html/signup2.html");
	}
	else{
		echo"<script>alert('unsucessfull')</script>".$conn->error;
	}
	mysqli_close($conn);
?>