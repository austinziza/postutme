<?php session_start(); ?>
<html>
<head>
<title> REGISTRATION SUCCESSFULL !!!!!!</title>
<link rel= "stylesheet" type="text/css" href="registration_successfull.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<br><br><br>
<center>
<h1>ENUGU STATE UNIVERSITY OF SCIENCE AND TECHNOLOGY</h1>



<p>CONGRATS</p>
<p>REGISTRATION SUCCESSFULL !!!!!!</p>
<br><br><br>
<p> YOUR REGISTRATION NUMBER IS</p>

<?php

$email = $_SESSION['email'];

$con = mysqli_connect("localhost", "root", "", "post"); 
if  (!$con){
   die("failed to connect to data base" . mysqli_connect_error);
}

else{
 
 
 $sql = "SELECT * FROM `education` WHERE email =  '$email' ";
		
		
		$result = mysqli_query($con, $sql);
		$rows = mysqli_num_rows($result);
		if ($rows == 1) {
			while($rows = mysqli_fetch_assoc($result) ){
				echo "<p>";
				echo $rows['reg_no'];
				echo "</p>";
				
			}
		}
 
}





?>

<form name=register action ="print1.php" method="post" enctype="multipart/form-data" >
<input type="submit" name="submit" value="PRINT" />
</form>



 

</body>
</html>