<?php
    include_once'confiq.php'
?>
<?php
    $name=$_POST["forgotuser"];

    $sql="INSERT INTO forgot(email)VALUES('$name')";
    
	if(mysqli_query($conn,$sql)){
		echo"<script>alert('Record inserted suceesfully')</script>";
		header("location:../html/forgot2.html"); 
	}
	else{
		echo"<script>alert('Error in inserting records')</script>".$conn->error;
	}
	mysqli_close($conn);
?>