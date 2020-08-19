<html>
<head>
<link rel= "stylesheet" type="text/css" href="confirmation.css" />

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>CONFIRMATION PAGE</title>
</head>
<body>
<?php
session_start();
?>
<br><br><br><br>
<center><h1>CONFIRM YOUR DETAILS BEFORE SUBMITTING</h1>


<img src="<?php echo $_SESSION['passport']; ?>" alt="my passport" height="150" width="200"></img>

<table cellpadding="3" cellspacing"1" border="1" width="80%">
<tr><td class="tab"><label>SURNAME:</label></td> <td class="tab"><label> <?php echo $_SESSION['surname']; ?></label>    </td> </tr>
<tr><td class="tab1"><label>FIRST NAME:</label></td> <td class="tab">  <label><?php echo $_SESSION['firstname']; ?> </label>  </td> </tr>
<tr><td class="tab"><label>MID-NAME:</label></td> <td class="tab"> <label><?php echo $_SESSION['midname']; ?> </label>   </td> </tr>
<tr><td class="tab1"><label>EMAIL:</label></td> <td class="tab">  <label><?php echo $_SESSION['email']; ?> </label>  </td> </tr>
<tr><td class="tab"><label>PHONE NO:</label></td> <td class="tab">  <label><?php echo $_SESSION['phone']; ?> </label>  </td> </tr>
<tr><td class="tab1"><label>DATE OF BIRTH:</label></td> <td class="tab"> <label><?php echo $_SESSION['dd'] ."&nbsp;". $_SESSION['mm'] ."&nbsp;". $_SESSION['yyyy'] ; ?> </label>   </td> </tr>
<tr><td class="tab"><label>STATE OF ORIGIN:</label></td> <td class="tab"> <label><?php echo $_SESSION['state']; ?> </label>   </td> </tr>
<tr><td class="tab1"><label>LOCAL GOVERNMENT AREA:</label></td> <td class="tab"><label> <?php echo $_SESSION['lga']; ?></label>    </td> </tr>
<tr><td class="tab"><label>SEX:</label></td> <td class="tab"> <label><?php echo $_SESSION['sex']; ?> </label>   </td> </tr>
<tr><td class="tab1"><label>MARITAL STATUS:</label></td> <td class="tab"> <label><?php echo $_SESSION['status']; ?> </label>   </td> </tr>
<tr><td class="tab"><label>RELIGION:</label></td> <td class="tab">  <label><?php echo $_SESSION['religion']; ?> </label>  </td> </tr>
<tr><td class="tab1"><label>PHYSICAL DISABILITY:</label></td> <td class="tab"> <label><?php echo $_SESSION['disability']; ?> </label>   </td> </tr>
<tr><td class="tab"><label>PERMANENT ADDRESS:</label></td> <td class="tab"> <label><?php echo $_SESSION['perm']; ?> </label>   </td> </tr>
<tr><td class="tab1"><label>RESIDENTIAL ADDRESS:</label></td> <td class="tab">  <label><?php echo $_SESSION['reside']; ?> </label>  </td> </tr>
<tr><td class="tab"><label>OTHER PERSONAL DETAILS</label></td>  </tr>
<tr><td class="tab1"><label>FATHERS NAME:</label></td> <td class="tab"> <label><?php echo $_SESSION['faname']; ?> </label>   </td> </tr>
<tr><td class="tab"><label>MOTHERS NAME:</label></td> <td class="tab">  <label> <?php echo $_SESSION['moname']; ?></label>  </td> </tr>
<tr><td class="tab4"><label>TO CONTACT IN CASE OF EMERGENCY:</label></td> </tr>
<tr><td class="tab"><label>NEXT OF KIN NAME:</label></td> <td class="tab">  <label><?php echo $_SESSION['nok']; ?> </label>  </td> </tr>
<tr><td class="tab1"><label>NEXT OF KIN PHONE NUMBER:</label></td> <td class="tab">   <label> <?php echo $_SESSION['nokpho']; ?></label> </td> </tr>
<tr><td class="tab"><label>RELATIONSHIP WITH NOK:</label></td> <td class="tab"> <label><?php echo $_SESSION['rship']; ?> </label>   </td> </tr>

<tr><td class="tab4"><label class="edu">EDUCATIONAL BACKGROUND</label></td> </tr>

<tr><td class="tab"><label>JAMB REG NO:</label></td> <td class="tab"> <label><?php echo $_SESSION['jambreg']; ?> </label>   </td> </tr>
<tr><td class="tab1"><label>JAMB SCORE:</label></td> <td class="tab"> <label><?php echo $_SESSION['jambscore']; ?> </label>   </td> </tr>
<tr><td class="tab"><label>SCHOOL:</label></td> <td class="tab">  <label> <?php echo $_SESSION['school']; ?></label>  </td> </tr>
<tr><td class="tab1"><label>COURSE:</label></td> <td class="tab">  <label><?php echo $_SESSION['course']; ?> </label>  </td> </tr>
<tr><td class="tab"><label>PRIMARY SCHOOL:</label></td> <td class="tab">   <label><?php echo $_SESSION['primary']; ?> </label> </td> </tr>
<tr><td class="tab1"><label>YEAR STARTED:</label></td> <td class="tab"> <label><?php echo $_SESSION['pyearstart']; ?> </label>   </td> </tr>
<tr><td class="tab"><label>YEAR ENDED:</label></td> <td class="tab">  <label><?php echo $_SESSION['pyearend']; ?> </label>  </td> </tr>
<tr><td class="tab1"><label>SECONDARY SCHOOL:</label></td> <td class="tab">  <label> <?php echo $_SESSION['secondary']; ?></label>  </td> </tr>
<tr><td class="tab"><label>YEAR STARTED:</label></td> <td class="tab"> <label><?php echo $_SESSION['syearstart']; ?> </label>   </td> </tr>
<tr><td class="tab1"><label>YEAR ENDED:</label></td> <td class="tab"> <label> <?php echo $_SESSION['syearend']; ?></label>   </td> </tr>
<tr><td class="tab"><label>EXAMINATION TYPE:</label></td> <td class="tab">  <label><?php echo $_SESSION['examtype']; ?> </label>  </td> </tr>
<tr><td class="tab1"><label>EXAMINATION YEAR:</label></td> <td class="tab">  <label><?php echo $_SESSION['examyear']; ?> </label>  </td> </tr>
<tr><td class="tab"><label>EXAMINATION NUMBER</label></td> <td class="tab">  <label><?php echo $_SESSION['examno']; ?> </label>  </td> </tr>
</table>
<br><br>
<table cellpadding="3" cellspacing="1" border="2" width="70%">

<tr><th class="tab4"><label >SUBJECT</label></th><th class="tab4"><label >GRADE</label></th></tr>
<tr><td class="tab2"><label><?php echo $_SESSION['firstsub']; ?> </label></td> <td class="tab3">  <label><?php echo $_SESSION['firstgrade']; ?>  </label>  </td> </tr>
<tr><td class="tab3"><label><?php echo $_SESSION['secondsub']; ?> </label></td> <td class="tab2"> <label><?php echo $_SESSION['secondgrade']; ?>  </label>   </td> </tr>
<tr><td class="tab2"><label><?php echo $_SESSION['thirdsub']; ?> </label></td> <td class="tab3">  <label><?php echo $_SESSION['thirdgrade']; ?>  </label>  </td> </tr>
<tr><td class="tab3"><label><?php echo $_SESSION['fourthsub']; ?> </label></td> <td class="tab2">  <label> <?php echo $_SESSION['fourthgrade']; ?> </label>  </td> </tr>
<tr><td class="tab2"><label><?php echo $_SESSION['fifthsub']; ?> </label></td> <td class="tab3"> <label><?php echo $_SESSION['fifthgrade']; ?>  </label>   </td> </tr>
<tr><td class="tab3"><label><?php echo $_SESSION['sixthsub']; ?> </label></td> <td class="tab2"> <label> <?php echo $_SESSION['sixthgrade']; ?> </label>   </td> </tr>
<tr><td class="tab2"><label><?php echo $_SESSION['seventhsub']; ?> </label></td> <td class="tab3">  <label><?php echo $_SESSION['seventhgrade']; ?>  </label>  </td> </tr>
<tr><td class="tab3"><label><?php echo $_SESSION['eightsub']; ?> </label></td> <td class="tab2">  <label><?php echo $_SESSION['eightgrade']; ?>  </label>  </td> </tr>
<tr><td class="tab2"><label><?php echo $_SESSION['ninthsub']; ?> </label></td> <td class="tab3">  <label> <?php echo $_SESSION['ninthgrade']; ?> </label>  </td> </tr>



</table>

<form action="" method="post" name="register">
<input type="submit" name="submit" value="Register" size="14">
</form>
<?php
date_default_timezone_set("Africa/Lagos");
if(isset($_POST['submit'])) {
 $con =	mysqli_connect("localhost", "root", "", "post");
	if(!$con){
		die("failed to connect to database" . mysqli_connect_error);
	}
	
		
        $surname = mysqli_escape_string($con, $_SESSION['surname']);
		$surname = stripslashes($_SESSION['surname']);
		$surname = strip_tags($_SESSION['surname']);
		$firstname = mysqli_escape_string($con, $_SESSION['firstname']);
		$firstname = stripslashes($_SESSION['firstname']);
		$firstname = strip_tags($_SESSION['firstname']);
		$midname = mysqli_escape_string($con, $_SESSION['midname']);
		$midname = stripslashes($_SESSION['midname']);
		$midname = strip_tags($_SESSION['midname']);
		$email= mysqli_escape_string($con, $_SESSION['email']);
		$email = stripslashes($_SESSION['email']);
		$email = strip_tags($_SESSION['email']);
		
		$phone = mysqli_escape_string($con, $_SESSION['phone']);

		$phone = stripslashes($_SESSION['phone']);
		$phone = strip_tags($_SESSION['phone']);
		
		$perm = mysqli_escape_string($con, $_SESSION['perm']);
		$perm = stripslashes($_SESSION['perm']);
		$perm = strip_tags($_SESSION['perm']);
		
		$reside = mysqli_escape_string($con, $_SESSION['reside']);
		$reside = stripslashes($_SESSION['reside']);
		$reside = strip_tags($_SESSION['reside']);
		
		$faname = mysqli_escape_string($con, $_SESSION['faname']);
		$faname = stripslashes($_SESSION['faname']);
		$faname= strip_tags($_SESSION['faname']);
		
		$moname = mysqli_escape_string($con, $_SESSION['moname']);
		$moname = stripslashes($_SESSION['moname']);
		$moname = strip_tags($_SESSION['moname']);
		
		$nok = mysqli_escape_string($con, $_SESSION['nok']);
		$nok = stripslashes($_SESSION['nok']);
		$nok = strip_tags($_SESSION['nok']);
		
		$nokpho = mysqli_escape_string($con, $_SESSION['nokpho']);
		$nokpho = stripslashes($_SESSION['nokpho']);
		$nokpho = strip_tags($_SESSION['nokpho']);
		
		$jambreg = mysqli_escape_string($con, $_SESSION['jambreg']);
		$jambreg = stripslashes($_SESSION['jambreg']);
		$jambreg = strip_tags($_SESSION['jambreg']);
		$jambscore = mysqli_escape_string($con, $_SESSION['jambscore']);
		$jambscore = stripslashes($_SESSION['jambscore']);
		$jambscore = strip_tags($_SESSION['jambscore']);
		$primary = mysqli_escape_string($con, $_SESSION['primary']);
		$primary = stripslashes($_SESSION['primary']);
		$primary = strip_tags($_SESSION['primary']);
		$secondary = mysqli_escape_string($con, $_SESSION['secondary']);
		$secondary = stripslashes($_SESSION['secondary']);
		$secondary = strip_tags($_SESSION['secondary']);
		$examno = mysqli_escape_string($con, $_SESSION['examno']);
		$examno = stripslashes($_SESSION['examno']);
		$examno = strip_tags($_SESSION['examno']);
		
		$passport = $_SESSION['passport'];
		$dd = $_SESSION['dd'];
		$mm = $_SESSION['mm'];
		$yyyy = $_SESSION['yyyy'];
		$state = $_SESSION['state'];
		$lga = $_SESSION['lga'];
		$sex = $_SESSION['sex'];
		$status = $_SESSION['status'];
		$religion = $_SESSION['religion'];
		$disability =$_SESSION['disability'];
		$rship = $_SESSION['rship'];
		$school = $_SESSION['school'];
		$course = $_SESSION['course'];
		$pyearstart = $_SESSION['pyearstart'];
		$pyearend = $_SESSION['pyearend'];
		$syearstart =$_SESSION['syearstart'];
		$syearend = $_SESSION['syearend'];
		
		$cou = substr($course, 0, 3);
		$pho = substr($phone, 6, -2);
		$kpho =substr($nokpho, 6, -2);
		$join = $pho.$kpho;
		$rev = strrev($join);
		$shuf = str_shuffle($rev);
		
		$reg_no = "ESUT/" . $cou. "/2020/" . $shuf ;
		
		$examtype = $_SESSION['examtype'];
		$examno = $_SESSION['examno'];
		$examyear = $_SESSION['examyear'];
		$firstsub = $_SESSION['firstsub'];
		$secondsub = $_SESSION['secondsub'];
		$thirdsub = $_SESSION['thirdsub'];
		$fourthsub = $_SESSION['fourthsub'];
		$fifthsub = $_SESSION['fifthsub'];
		$sixthsub = $_SESSION['sixthsub'];
		$seventhsub = $_SESSION['seventhsub'];
		$eightsub = $_SESSION['eightsub'];
		$ninthsub = $_SESSION['ninthsub'];
		
		$firstgrade = $_SESSION['firstgrade'];
		$secondgrade = $_SESSION['secondgrade'];
		$thirdgrade = $_SESSION['thirdgrade'];
		$fourthgrade = $_SESSION['fourthgrade'];
		$fifthgrade = $_SESSION['fifthgrade'];
		$sixthgrade = $_SESSION['sixthgrade'];
		$seventhgrade = $_SESSION['seventhgrade'];
		$eightgrade = $_SESSION['eightgrade'];
		$ninthgrade = $_SESSION['ninthgrade'];
		  
		  $date = date('Y-m-d H:i:s');
		
		$query = "SELECT * FROM `bio` WHERE email =  '$email' ";
		
		
		
		
		
		
	    $sql = "	INSERT INTO `bio` (`id`, `passport`, `surname`, `firstname`, `midname`, `email`, `phone`, `day`, `month`, `year`, `state`, `lga`, `sex`, `mstatus`, `religion`, `disability`, `permanent`, `residential`, `father`, `mother`, `nok`, `nok_phone`, `relationship`) VALUES (NULL, '$passport', '$surname', '$firstname', '$midname', '$email', '$phone', '$dd', '$mm', '$yyyy', '$state', '$lga', '$sex', '$status', '$religion', '$disability', '$perm', '$reside', '$faname', '$moname', '$nok', '$nokpho', '$rship');";

		 $sql .= " INSERT INTO `education` (`id`, `jamb_reg`, `jamb_score`, `school`, `course`, `primary_school`, `p_started`, `p_ended`, `secondary`, `s_started`, `s_ended`, `reg_no`, `email`) VALUES (NULL, '$jambreg', '$jambscore', '$school', '$course', '$primary', '$pyearstart', '$pyearend', '$secondary', '$syearstart', '$syearend', '$reg_no', '$email');";
		 
		 $sql .= "INSERT INTO `ssce` (`id`, `exam_type`, `exam_year`, `exam_no`, `first_subject`, `first_grade`, `second_subject`, `second_grade`, `third_subject`, `third_grade`, `fourth_subject`, `fourth_grade`, `fifth_subject`, `fifth_grade`, `sixth_subject`, `sixth_grade`, `seventh_subject`, `seventh_grade`, `eight_subject`, `eight_grade`, `ninth_subject`, `ninth_grade`, `email`, `date`) VALUES (NULL, '$examtype', '$examyear', '$examno', '$firstsub', '$firstgrade', '$secondsub', '$secondgrade', '$thirdsub', '$thirdgrade', '$fourthsub', '$fourthgrade', '$fifthsub', '$fifthgrade', '$sixthsub', '$sixthgrade', '$seventhsub', '$seventhgrade', '$eightsub', '$eightgrade', '$ninthsub', '$ninthgrade', '$email', '$date');";
		 
		 
		 
		 $result = mysqli_query($con, $query);
		$rows = mysqli_num_rows($result);
		if ($rows > 0) {
			echo "EMAIL ALREADY EXIST PLEASE TRY USING ANOTHER EMAIL ADDRESS" ;
		}
else{
                  
		$result = mysqli_multi_query($con, $sql);
		if ($result){
		
			
			 echo  		'<script type="text/javascript">  window.location.href="registration_successfull.php"; </script>';
		}
		else{
			echo "failed to insert data";
		}
		
}
		
		
	
}

?>

</body>
</html>