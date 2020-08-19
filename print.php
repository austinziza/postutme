<?php session_start(); ?>

<html>
<head>
<title> PRINT SLIP</title>
<link rel= "stylesheet" type="text/css" href="print.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>


<body>





<?php
if (isset($_POST['submit'])){
	$email = $_POST['email'];
	$examdate = "7th SEPTEMBER 2020" ;	


    $con = mysqli_connect("localhost", "root", "", "post"); 
if  (!$con){
   die("failed to connect to data base" . mysqli_connect_error);
}

else{
	
 
 $email = mysqli_escape_string($con, $email);

 
 
 
 
 
 


 
 
 $sql = "SELECT * FROM bio JOIN education ON bio.email = education.email JOIN ssce ON education.email = ssce.email WHERE bio.email = '$email'";
 
 $result = mysqli_query($con,$sql);
 $row = mysqli_num_rows($result);
 
 if ($row == 1){
	
	while($row = mysqli_fetch_assoc($result)){
		$seatno = $row['id'];
		$passport = $row['passport'];
		$surname = $row['surname'];
		$firstname = $row['firstname'];
		$midname = $row['midname'];
		$email = $row['email'];
		$phone = $row['phone'];
		$dd = $row['day'];
		$mm = $row['month'];
		$yyyy = $row['year'];
		$state = $row['state'];
		$lga = $row['lga'];
		$sex = $row['sex'];
		$status = $row['mstatus'];
		$religion = $row['religion'];
		$disability = $row['disability'];
		$perm = $row['permanent'];
		$reside = $row['residential'];
		$faname = $row['father'];
		$moname = $row['mother'];
		$nok = $row['nok'];
		$nokpho = $row['nok_phone'];
		$rship = $row['relationship'];
		$jambreg = $row['jamb_reg'];
		$jambscore = $row['jamb_score'];
		$school = $row['school'];
		$course = $row['course'];
		$primary = $row['primary_school'];
		$pstart = $row['p_started'];
		$pend = $row['p_ended'];
		$secondary = $row['secondary'];
		$sstart = $row['s_started'];
		$send = $row['s_ended'];
		$reg_no = $row['reg_no'];
		$examtype = $row['exam_type'];
		$examyear = $row['exam_year'];
		$examno = $row['exam_no'];
		$firstsub = $row['first_subject'];
		$firstgrade = $row['first_grade'];
		$secondsub = $row['second_subject'];
		$secondgrade = $row['second_grade'];
		$thirdsub = $row['third_subject'];
		$thirdgrade = $row['third_grade'];
		$fourthsub = $row['fourth_subject'];
		$fourthgrade = $row['fourth_grade'];
		$fifthsub = $row['fifth_subject'];
		$fifthgrade = $row['fifth_grade'];
		$sixthsub = $row['sixth_subject'];
		$sixthgrade = $row['sixth_grade'];
		$seventhsub = $row['seventh_subject'];
		$seventhgrade = $row['seventh_grade'];
		$eightsub = $row['eight_subject'];
		$eightgrade = $row['eight_grade'];
		$ninthsub = $row['ninth_subject'];
		$ninthgrade = $row['ninth_grade'];
		$date = $row['date'];
		
		
		
		
	}
	
 }
 
 
}
mysqli_close($con);
}



?>

<div id="myprint">
<br><br><br><br><br><br>
<center>
<h1>ENUGU STATE UNIVERSITY OF SCIENCE AND TECHNOLOGY</h1>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo $passport ; ?>" alt="passport" width="250" height="220"></img></center><br>


<table width="80%">
<tr>
<td><label> SEAT NUMBER  </label>  </td> <td><label> <?php  echo $seatno; ?>    </label> </td> <td><label> EXAM DATE </label></td> <td><label>  <?php echo $examdate; ?>  </label></td>
<td><label> REGISTRATION NUMBER:</label></td><td><label><?php echo $reg_no; ?> </label></td>

</tr>


<table width="80%">
<tr>
<td><label> SURNAME:</label> </td><td><label><?php echo $surname;?></label></td>
</tr>
<tr>
<td><label> FIRSTNAME:</label></td><td> <label><?php echo $firstname;?></label></td>
</tr>
<tr><td>
<label> MIDNAME:</label></td> <td><label><?php echo $midname;?></label></td></tr>

<tr><td><label> EMAIL:</label></td><td><label><?php echo $email;?></label></td></tr>
<tr><td><label> PHONE:</label></td><td><label><?php echo $phone;?></label></td></tr>
<tr><td><label> DATE OF BIRTH:</label> </td><td><label><?php echo $dd ."/". $mm . "/" . $yyyy ;  ?></label></td></tr>
<tr><td><label> STATE:</label> </td><td><label><?php echo $state;?></label></td></tr>
<tr><td><label> LGA:</label></td><td> <label><?php echo $lga;?></label></td></tr>
<tr><td><label> SEX:</label></td><td> <label><?php echo $sex;?></label></td></tr>

<tr><td><label> MARITAL STATUS:</label></td><td><label><?php echo $status;?></label></td></tr>
<tr><td><label> RELIGION:</label></td><td> <label><?php echo $religion;?></label></td></tr>
<tr><td><label> PHYSICAL DISABILITY:</label></td><td> <label><?php echo $disability;?></label></td></tr>
<tr><td><label> PERMANENT ADDRESS:</label></td><td> <label><?php echo $perm;?></label></td></tr>
<tr><td><label> RESIDENTIAL ADDRESS:</label></td><td> <label><?php echo $reside;?></label></td></tr>
<tr><td><label> FATHER'S NAME:</label></td><td> <label><?php echo $faname;?></label></td></tr>
<tr><td><label> MOTHER'S NAME:</label></td><td> <label><?php echo $moname;?></label></td></tr>
<tr><td><label> NEXT OF KIN NAME:</label> </td><td><label><?php echo $nok;?></label></td></tr>
<tr><td><label>NEXT OF KIN PHONE:</label></td><td> <label><?php echo $nokpho;?></label></td></tr>
<tr><td><label> RELATIONSHIP WITH NOK:</label> </td><td><label><?php echo $rship;?></label></td></tr>

</table>
<br><br><br><br><br><br><br><br><br>
<center><h2>EDUCATIONAL BACKGROUND</h2></center>
<table width="80%">
<tr><td><label> JAMB REG NO:</label></td><td><label><?php echo $jambreg;?></label></td></tr>
<tr><td><label> JAMB SCORE:</label></td><td> <label><?php echo $jambscore;?></label></td></tr>
<tr><td><label> SCHOOL:</label></td><td> <label><?php echo $school;?></label></td></tr>
<tr><td><label> COURSE:</label></td><td> <label><?php echo $course;?></label></td></tr>
<tr><td><label> PRIMARY:</label></td><td> <label><?php echo $primary;?></label></td></tr>
<tr><td><label> YEAR STARTED:</label></td><td> <label><?php echo $pstart;?></label></td></tr>
<tr><td><label> YEAR ENDED:</label></td><td> <label><?php echo $pend;?></label></td></tr>
<tr><td><label> SECONDARY:</label> </td><td><label><?php echo $secondary;?></label></td></tr>
<tr><td><label>YEAR STARTED:</label></td><td> <label><?php echo $sstart;?></label></td></tr>
<tr><td><label> YEAR ENDED:</label> </td><td><label><?php echo $send;?></label></td></tr>

<tr><td><label> EXAM TYPE:</label></td><td><label><?php echo $examtype;?></label></td></tr>
<tr><td><label> EXAM YEAR:</label></td><td> <label><?php echo $examyear;?></label></td></tr>
<tr><td><label> EXAM NUMBER:</label></td><td> <label><?php echo $examno;?></label></td></tr>

</table>
<br><br><br>

<table width="80%" border="1" cellpadding="0" cellspacing="0" >
<tr>
<th>SUBJECT</th>
<th>  GRADE  </th>
</tr>
<tr><td><label> <?php echo $firstsub;?></label></td><td> <label><?php echo $firstgrade;?></label></td></tr>
<tr><td><label> <?php echo $secondsub;?></label></td><td> <label><?php echo $secondgrade;?></label></td></tr>
<tr><td><label> <?php echo $thirdsub;?></label></td><td> <label><?php echo $thirdgrade;?></label></td></tr>
<tr><td><label> <?php echo $fourthsub;?></label></td><td> <label><?php echo $fourthgrade;?></label></td></tr>
<tr><td><label> <?php echo $fifthsub;?></label></td><td> <label><?php echo $fifthgrade;?></label></td></tr>
<tr><td><label> <?php echo $sixthsub;?></label></td><td> <label><?php echo $sixthgrade;?></label></td></tr>
<tr><td><label> <?php echo $seventhsub;?></label></td><td> <label><?php echo $seventhgrade;?></label></td></tr>
<tr><td><label> <?php echo $eightsub;?></label></td><td> <label><?php echo $eightgrade;?></label></td></tr>
<tr><td><label> <?php echo $ninthsub;?></label></td><td> <label><?php echo $ninthgrade;?></label></td></tr>

</table>
 
 <p align="right"> time registered&nbsp; -<?php echo $date; ?> </p>


</div>
<center><input  type="button" value="PRINT" onclick="printDiv('myprint')" /> </center>


<center><a href="home.php"> GO BACK TO HOME PAGE TO REPRINT</a></center>
<br>
<center><a href="index.php"> GO BACK TO REGISTRATION PAGE</a></center>

<script>
function printDiv(myprint){
	var printContents = document.getElementById(myprint).innerHTML;
	var originalContent = document.body.innerHTML;
	document.body.innerHTML = printContents;
	window.print();
	document.body.innerHTML = originalContent;
	
}

</script>





</body>
</html>		



