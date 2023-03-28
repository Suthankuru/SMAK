<?php
    include_once'confiq.php';
?>
<?php
    
    $name=$_POST["cname"];

    $sql="INSERT INTO forgot3(password)VALUES('$name')";
    
	if(mysqli_query($conn,$sql)){
		echo"<script>alert('Record inserted suceesfully')</script>";
		header("location:../html/login.html"); 
	}
	else{
		echo"<script>alert('Error in inserting records')</script>".$conn->error;
	}
	mysqli_close($conn);
?>