<?php
	include_once'confiq.php';
?>
<html>
	<head>
	   <title>SMAK</title>
	   <link rel="stylesheet" href="../css/sathu.css">
	   <script type="text/javascript" src="../javascript/sathu.js"></script>
	</head>
	<body>
	<header>
    <div class="logo"> 
       <img src="../images/logo.png" height="50px" alt="">
     </div>
    <nav>
       <ul>
          <li><a href="../html/home.html">Home</a></li>
            <li><a href="../html/newservicerequest.html">New Service Request</a></li>
            <li><a href="../html/payment.html">Payment</a></li>
            <li><a href="../html/contactus.html">Contact Us</a></li>
            
          </div>
       </ul>
    </nav> 
</header>
<br></br><br><br>
<form action="" method="post">
	<label></label>
	<input type="text"  placeholder="Enter email address" name="mmail">
	<label></label>
	<input type="password"  placeholder="Enter Password" name="ppwd">
	<input type="submit" value="submit" name="submit">
	
	<center><h1>PROFILE DETAILS</h1></center>
		<hr style="width:50%;margin-left:300px;margin-top:40px;disply:block;height:2px;border:2px solid #3b444b;">
		</br><br><br>
	
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			// username and password sent from form 
			
			$myusername = mysqli_real_escape_string($conn,$_POST['mmail']);
			$mypassword = mysqli_real_escape_string($conn,$_POST['ppwd']); 
			
			$sql = "SELECT * FROM details WHERE email = '$myusername' and password = '$mypassword'";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			
			$count = mysqli_num_rows($result);

			
		    $sql = "SELECT * FROM details WHERE email = '$myusername' and password = '$mypassword'";
			$results=$conn->query($sql);
			if($results->num_rows>0){
				while($row=$results->fetch_assoc()){
					echo $row["name"]."<br>";
					echo $row["email"]."<br>";
					echo $row["phno"]."<br>";
					echo $row["gender"]."<br>";
					echo $row["address"]."<br>";
					echo $row["dob"]."<br>";
				}
			}
			
			$conn->close();

			
			
			// If result matched $myusername and $mypassword, table row must be 1 row
			  
			if($count == 1) {
			  
			   $_SESSION['login_user'] = $myusername;
			   
			   
			}else {
				echo "<script> alert('Your Login Name or Password is invalid'); </script>";
			}
		}
			   
		?>
<footer>

	<div class="footer">
		<div class="inner-footer">


			<div class="footer-items">
				<img src="../images/Flogo.png" height="50" alt="">
			    <p>
			        SMAK Customer Support helps you to manange your service requests and interact with the us to
				    resolve your problems.faster and quality service, Customers are backbone of our business,and there's more to the story.Take a look
				    at what else you can do with the SMAK customer support.
				</p>
			</div>

			<div class="footer-items">
				<h2 class="head">Quick Links</h2>
					<div class="border"></div>
					<ul>
						<a href="../html/home.html"><li>Home</li></a>
						<a href="../html/contactus.html"><li>Contact Us</li></a>
						<a href="../html/aboutus.html"><li>About Us</li></a>
					</ul>
			</div>

			<div class="footer-items">
				<h2 class="head">Legal</h2>
					<div class="border"></div>
					<ul>
						<a href=""><li>Privacy Policy</li></a>
						<a href="../html/termsandcondition.html"><li>Terms and Condition</li></a>
						<a href=""><li>Contract</li></a>
					</ul>
			</div>

			<div class="footer-items">
			
				<h2 class="head">Contact US</h2>
					<div class="border"></div>

					<div class="contact">
					<div class="place">
						<img src="../images/location.png"  alt=""> 
						<span>No.100, Kandy Road, Malabe</span>
					 </div>
		 
					 <div class="phone">
						<img src="../images/mobile.png"  alt=""> 
						<span>0770555586</span>
					 </div>
		 
					 <div class="mail">
						<img src="../images/mail.png"  alt=""> 
						<span>smakcustomersupport@gmail.com</span>
					 </div>
					</div>
				
		    </div>


		<div class="footer-bottom">
			<ul>
				<div class="social">
					<a href="https://www.facebook.com"><img src="../images/facebook.png" height="25" width="25t"></a>
					<a href="https://www.instagram.com"><img src="../images/instagram.png" height="25" width="25t"></a>
					<a href="https://www.linkedin.com"><img src="../images/linkedin.png" height="25" width="25t"></a>
					<a href="https://twitter.com"><img src="../images/twitter.png"  height="25" width="25t"></a>
					<a href="https://accounts.snapchat.com"><img src="../images/snapschat.png"  height="25" width="25t"></a>
					<a href="https://www.whatsapp.com"><img src="../images/whatsapp.png" height="25" width="25t"></a>
				</div>
			</ul>

			<h1> Copyrights 2020 &copy;SMAK. All Rights resrved.</h1>
			
		</div>
		


	    </div>
    </div>

			
	

 </footer>
	</body>
</html>