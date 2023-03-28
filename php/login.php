
<?php

include_once'confiq.php';



if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $myusername = mysqli_real_escape_string($conn,$_POST['mmail']);
   $mypassword = mysqli_real_escape_string($conn,$_POST['ppwd']); 
   
   $sql = "SELECT * FROM details WHERE email = '$myusername' and password = '$mypassword'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   
   
   $count = mysqli_num_rows($result);
   
   // If result matched $myusername and $mypassword, table row must be 1 row
	 
   if($count == 1) {
	 
	  $_SESSION['login_user'] = $myusername;
	  
	  header("location:../html/home.html");
   }else {
	   echo "<script> alert('Your Login Name or Password is invalid'); window.location.href = '../html/login.html'; </script>";
	  
	  
   }
}
?>
