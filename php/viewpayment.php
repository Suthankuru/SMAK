<?php
include_once 'confiq.php';
?>

 


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/viewpayment.css">  
        <title> </title>
    </head>

<body>

<header>
		<div class="logo"> 
		
		   <img src="../images/logo.png" height="50px" alt="">
		   
		 </div>
		<nav>
		   <ul>
			<li hidden><a href=></a></li>
			<li hidden><a href=></a></li>
			<li hidden><a href=></a></li>
			<li hidden><a href=></a></li>
			
			<li><a href=><b> Customers Payment Profiles </b></a></li>
			  
		   </ul>
		</nav> 
    </header>
    
    <br>
   


    <table>
        <tr>
            <th> Email Address </th>
            <th> First Name </th>
            <th> Last Name </th>
            <th> Bill Number </th>
            <th> Mobile Number  </th>
            <th> Card Name </th>
            <th> Card Name   </th>
            <th> Expiry Month  </th>
            <th> Expiry Year </th>
            <th> CVV </th>
        </tr>
        
        <?php

        $sql = "SELECT * from payment ";
        $result = $conn-> query($sql);
        
        if ($result-> num_rows > 0){
            while ($row =$result-> fetch_assoc()) {
                echo "<tr><td>". $row["email_address"] ."</td><td>". $row["first_name"] ."</td><td>". $row["last_name"]. "</td><td>". $row["bill_number"]. "</td><td>". $row["mobile_number"]. "</td><td>". $row["card_name"]. "</td><td>". $row["card_number"]. "</td><td>". $row["exp_month"]. "</td><td>". $row["exp_year"]. "</td><td>". $row["cvv"]. "</td><td>" ;
            }
        }

        else{
            echo "0 Results";
        }

        echo "</table>";

        $conn->close();
        
        ?>



     
</body>

</html> 