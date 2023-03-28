<?php
    include_once'confiq.php';
?>
<?php
    
    $name=$_POST["forgotuse"];

    $sql="INSERT INTO forgot2(code)VALUES('$name')";
    
	if(mysqli_query($conn,$sql)){
		echo"<script>alert('Record inserted suceesfully')</script>";
		header("location:../html/fogot4.html"); 
	}
	else{
		echo"<script>alert('Error in inserting records')</script>".$conn->error;
	}
	mysqli_close($conn);
?>