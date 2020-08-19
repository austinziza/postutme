<?php session_start(); ?>
<html>
<head>
<title> css grid tutorial 2</title>

<link rel= "stylesheet" type="text/css" href="form.css" />

<meta name="viewport" content="width=device-width, initial-scale=1">




<meta charset=utf-8 />


</head>

<body>


<div class="grid-container">

<div class="header1"><h1>ENUGU STATE UNIVERSITY OF SCIENCE AND TECHNOLOGY</h1></div>
<div class="header2"><h2> REGISTER YOUR POST UTME APPLICATION</h2></div>

<div class="item1"></div>

<div class="item5"><img src="" width="200" height="200" id="frame"></img> 
</div>
 
</div>




<form name="register" action="" method="post" class="myform"  id="demoForm" enctype="multipart/form-data" >
<label class="space5"></label>
<label class="space6"></label>
   <input type="file" name="image" class="upload" onchange="preview()"  required />
<label class="sur">SURNAME:</label><input type="text" class="surname" id="surname" name="surname" placeholder="Enter your  surname"  required />
<label class="fir">FIRST NAME:</label><input type="text" class="firstname" name="firstname" placeholder="Enter your first name" required />
<label class="mid">MIDDLE NAME:</label><input type="text" class="midname" name="midname" placeholder="Enter your middle name"  required />
<label class="ema">EMAIL:</label><input type="email" class="email" name="email" placeholder="Enter your email address"  required />
<label class="pho">PHONE NO:</label><input type="number" class="phone" name="phone" placeholder="Enter your phone number"  required />

<label class="dob">SELECT DOB</label>
<select name="dd" class="dd" >
<option value="" >Select day </option>
<option value ="1ST">1</option>
<option value ="2ND">2</option>
<option value ="3RD">3</option>
<option value ="4TH">4</option>
<option value ="5TH">5</option>
<option value ="6TH">6</option>
<option value ="7TH">7</option>
<option value ="8TH">8</option>
<option value ="9TH">9</option>
<option value ="10TH">10</option>
<option value ="11TH">11</option>
<option value ="12TH">12</option>
<option value ="13TH">13</option>
<option value ="14TH">14</option>
<option value ="15TH">15</option>
<option value ="16TH">16</option>
<option value ="17TH">17</option>
<option value ="18TH">18</option>
<option value ="19TH">19</option>
<option value ="20TH">20</option>
<option value ="21ST">21</option>
<option value ="22ND">22</option>
<option value ="23RD">23</option>
<option value ="24TH">24</option>
<option value ="25TH">25</option>
<option value ="26TH">26</option>
<option value ="27TH">27</option>
<option value ="28TH">28</option>
<option value ="29TH">29</option>
<option value ="30TH">30</option>
<option value ="31ST">31</option>
</select>
<select name="mm" class="mm" >
<option value="" >Select month </option>
<option value ="JANUARY">JANUARY</option>
<option value ="FEBRUARY">FEBRUARY</option>
<option value ="MARCH">MARCH</option>
<option value ="APRIL">APRIL</option>
<option value ="MAY">MAY</option>
<option value ="JUNE">JUNE</option>
<option value ="JULY">JULY</option>
<option value ="AUGUST">AUGUST</option>
<option value ="SEPTEMBER">SEPTEMBER</option>
<option value ="OCTOBER">OCTOBER</option>
<option value ="NOVEMBER">NOVEMBER</option>
<option value ="DECEMBER">DECEMBER</option>
</select>
<select name="yyyy" class="yyyy" >
<option value="" >Select year </option>
<option value ="1990">1990</option>
<option value ="1991">1991</option>
<option value ="1992">1992</option>
<option value ="1993">1993</option>
<option value ="1994">1994</option>
<option value ="1995">1995</option>
<option value ="1996">1996</option>
<option value ="1997">1997</option>
<option value ="1998">1998</option>
<option value ="1999">1999</option>
<option value ="2000">2000</option>
<option value ="2001">2001</option>
<option value ="2002">2002</option>
<option value ="2003">2003</option>
<option value ="2004">2004</option>
<option value ="2005">2005</option>
<option value ="2006">2006</option>
<option value ="2007">2007</option>
<option value ="2008">2008</option>
<option value ="2009">2009</option>
<option value ="2010">2010</option>
<option value ="2011">2011</option>
<option value ="2012">2012</option>
<option value ="2013">2013</option>
<option value ="2014">2014</option>
<option value ="2015">2015</option>



</select>

<label class = "stat">SELECT STATE </label>
<select name="category" id="category" class="state" >
<option value="" >select state </option>
<option value ="abia">abia</option>
<option value ="adamawa">adamawa</option>
<option value ="akwa_ibom">akwa ibom</option>
<option value ="anambra">anambra</option>
<option value ="bauchi">bauchi</option>
<option value ="bayelsa">bayelsa</option>
<option value ="benue">benue</option>
<option value ="borno">borno</option>
<option value ="cross_river">cross river</option>
<option value ="delta">delta</option>
<option value ="ebonyi">ebonyi</option>
<option value ="edo">edo</option>
<option value ="ekiti">ekiti</option>
<option value ="enugu">enugu</option>
<option value ="gombe">gombe</option>
<option value ="imo">imo</option>
<option value ="jigawa">jigawa</option>
<option value ="kaduna">kaduna</option>
<option value ="kano">kano</option>
<option value ="katsina">katsina</option>
<option value ="kebbi">kebbi</option>
<option value ="kogi">kogi</option>
<option value ="kwara">kwara</option>
<option value ="lagos">lagos</option>
<option value ="nasarawa">nasarawa</option>
<option value ="niger">niger</option>
<option value ="ogun">ogun</option>
<option value ="ondo">ondo</option>
<option value ="osun">osun</option>
<option value ="oyo">oyo</option>
<option value ="plateau">plateau</option>
<option value ="rivers">rivers</option>
<option value ="sokoto">taraba</option>
<option value ="yobe">yobe</option>
<option value ="zamfara">zamfara</option>
<option value="fct">fct</option>

</select>

<label class = "lg">SELECT L.G.A </label>
<select name="choices[]" id="choices" class="lga" >
    <!-- js populates -->
</select>

<label class = "sexy"> SEX </label>
<select name="sex" class="sex" >
<option value="" >Select </option>
<option value ="MALE">MALE</option>
<option value ="FEMALE">FEMALE</option>
</select>

<label class = "mstat"> MARITAL STATUS </label>
<select name="status" class="status" >
<option value="" >Select </option>
<option value ="SINGLE">SINGLE</option>
<option value ="MARRIED">MARRIED</option>
<option value ="ENGAGED">ENGAGED</option>
</select>

<label class = "relg"> RELIGION </label>
<select name="religion" class="relig" >
<option value="" >Select </option>
<option value ="CHRISTIAN">CHRISTIAN</option>
<option value ="MUSLIM">MUSLIM</option>
<option value ="OTHERS">OTHERS</option>
</select>

<label class = "dis"> PHYSICAL DISABILITY </label>
<select name="disability" class="disable" >
<option value="" >Select </option>
<option value ="NONE">NONE</option>
<option value ="BLIND">BLIND</option>
<option value ="CRIPPLE">CRIPPLE</option>
<option value ="DEAF">DEAF / DUMB</option>
<option value ="HANDICAPP">HANDICAPP</option>
</select>


<label class="per"> PERMANENT ADDRESS</label>
<input type="text" class="perm"  name="perm" placeholder="Enter your Permanent address" required />

<label class="res">RESIDENTIAL ADDRESS</label>
<input type="text" class="reside"  name="reside" placeholder="Enter your Residential address" required />

<label class="space3"></label>
<label class="space4"><h2>OTHER PERSONAL DETAILS</h2></label>

<label class="fan"> FATHER'NAME</label>
<input type="text" class="faname"  name="faname" placeholder="Enter your father's name" required />
<label class="mon"> MOTHER'S NAME</label>
<input type="text" class="moname"  name="moname" placeholder="Enter your mother's name" required />
<label class="nok">NEXT OF KIN NAME</label>
<input type="text" class="kin"  name="nok" placeholder="Enter your next of kin's name" required />
<label class="nokno"> NEXT OF KIN PHONE NO</label>
<input type="number" class="nokpho"  name="nokpho" placeholder="Enter your next of kin phone number" required />
<label class="rship">RELATIONSHIP WITH NEXT OF KINS</label>
<select name="rship" class="krship">
<option value="">SELECT</option>
<option value="mother">MOTHER</option>
<option value="father">FATHER</option>
<option value="brother">BROTHER</option>
<option value="sister">SISTER</option>
<option value="mother">MOTHER</option>
<option value="cousin">COUSIN</option>
<option value="guardian">GUARDIAN</option>
<option value="friend">FRIEND</option>
<option value="other">OTHER</option>
</select>

<label class="space"></label>
<label class="space1"></label>
<input type="submit" class="submit" name="submit" value="Submit"/>
</form>
<?php


if (isset ($_POST['submit'])){
	$surname = $_POST['surname'];
	$firstname = $_POST['firstname'];
	$midname = $_POST['midname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$dd = $_POST['dd'];
	$mm = $_POST['mm'];
	$yyyy = $_POST['yyyy'];
	$state = $_POST['category'];
	$lga = implode($_POST['choices']);
	
	$sex = $_POST['sex'];
	$status = $_POST['status'];
	$religion = $_POST['religion'];
	$disability = $_POST['disability'];
	$perm = $_POST['perm'];
	$reside = $_POST['reside'];
	$faname = $_POST['faname'];
	$moname = $_POST['moname'];
	$nok = $_POST['nok'];
	$nokpho = $_POST['nokpho'];
	$rship = $_POST['rship'];
	
	
	$file_type = $_FILES['image']['type'];
	$allowed = array("image/jpeg", "image/gif", "image/png", "image/JPEG", "image/PNG", "image/GIF",  "image/jpg", "image/JPG");
	
	 $file_size = $_FILES['image']['size']; 
		$maxsize= 2097152;
		
	
	
	if (!in_array($file_type , $allowed)  || $file_size >= $maxsize   ) {
		$error_message = "upload a valid jpg/gif/png image NOT MORE THAN 2MB IN SIZE";
		echo $error_message;
		exit();
	}
	
	
	$var1 = rand(1111,9999);
	$var2 = rand(1111,9999);
	$var3 = $var1.$var2;
	$var3 = md5($var3);
	$fnm = $_FILES["image"]["name"];
	$dst = "./all_images/".$var3.$fnm;
	$dst_db = "all_images/".$var3.$fnm;
	
	
	
	 
		
	    
		
		
		$d= date("h:ia");
	
	move_uploaded_file($_FILES["image"]["tmp_name"],$dst);
	
	
	
	$surname=	strtoupper($surname);
	$firstname =	strtoupper($firstname);
	$midname =	strtoupper($midname);
	$state = 	strtoupper($state);
	$lga =	strtoupper($lga);
	$sex =	strtoupper($sex);
	$status =	strtoupper($status);
	$religion = 	strtoupper($religion);
	$disability =	strtoupper($disability);
	$perm =	strtoupper($perm);
	$reside =	strtoupper($reside);
	$faname = 	strtoupper($faname);
	$moname =	strtoupper($moname);
    $nok =		strtoupper($nok);
	$rship =	strtoupper($rship);
	
	
	
	
	echo "<pre>";
	echo $surname;
	echo $firstname;
	echo $midname;
	echo $email;
	echo $phone;
	echo $dd;
	echo $mm;
	echo $yyyy;
	echo $state;
	echo $lga  ;
	echo $sex;
	echo $status;
	echo $religion;
	echo $disability;
	echo $perm ;
	echo $reside;
	echo $faname;
	echo $moname;
	echo $nok;
	echo $nokpho;
	echo $rship;
	
	echo "\n</pre>";
	
	if ( ($surname =="") || ($firstname == "") || ($midname == "") || ($email == "") || ($phone == "") || ($dd == "") ||($mm == "") || ($yyyy == "") || ($state == "") || ($lga == "") || ($sex == "") || ($status == "") || ($religion == "") || ($disability == "") || ($perm == "") || ($reside == "") || ($faname == "") || ($moname == "") || ($nok == "") || ($nokpho == "") || ($rship == "")  ){
		
		echo 		'<script type="text/javascript"> alert("INCOMPLETE FIELD PLEASE MAKE SURE ALL FIELDS ARE COMPLETE BEFORE SUBMITTING!"); </script>';
	}		
	
	elseif (   is_numeric($surname)  || !is_string($surname) ) {
		
		echo 		'<script type="text/javascript"> alert("ERROR!!! YOUR SURNAME CONTAIN NUMBERS/DIGITS OR CHARACTERS PLEASE CORRECT YOUR DETAILS "); </script>';
	 
	}
	
	elseif (   is_numeric($firstname)  || !is_string($firstname) ) {
		
		echo 		'<script type="text/javascript"> alert("ERROR!!! FIRST NAME CONTAIN NUMBERS/DIGITS OR CHARACTERS PLEASE CORRECT YOUR DETAILS "); </script>';
	 
	}
	elseif (   is_numeric($midname)  || !is_string($midname) ) {
		
		echo 		'<script type="text/javascript"> alert("ERROR!!! MIDDLE NAMES CONTAIN NUMBERS/DIGITS OR CHARACTERS PLEASE CORRECT YOUR DETAILS "); </script>';
	 
	}
	elseif (   is_numeric($faname)  || !is_string($faname) ) {
		
		echo 		'<script type="text/javascript"> alert("ERROR!!! FATHERS NAMES CONTAIN NUMBERS/DIGITS OR CHARACTERS PLEASE CORRECT YOUR DETAILS "); </script>';
	 
	}
	elseif (   is_numeric($moname)  || !is_string($moname) ) {
		
		echo 		'<script type="text/javascript"> alert("ERROR!!! MOTHERS NAMES CONTAIN NUMBERS/DIGITS OR CHARACTERS PLEASE CORRECT YOUR DETAILS "); </script>';
	 
	}
	elseif (   is_numeric($nok)  || !is_string($nok) ) {
		
		echo 		'<script type="text/javascript"> alert("ERROR!!! NEXT OF KIN NAME CONTAIN NUMBERS/DIGITS OR CHARACTERS PLEASE CORRECT YOUR DETAILS "); </script>';
	 
	}
	
	elseif ( !is_numeric($phone) || !is_numeric($nokpho)) {
		echo 		'<script type="text/javascript"> alert("ERROR!!!! YOUR PHONE/NOK PHONE NUMBER CONTAINS ALPHABET/CHARACTER"); </script>';
	}
	
	elseif(  (strlen($surname) > 20) || (strlen($firstname) > 20) || (strlen($midname) > 20) || (strlen($faname) > 50) || (strlen($moname) > 50) || (strlen($nok) > 50) || (strlen($email) > 30) || (strlen($phone) != 11) || (strlen($perm) > 200) || (strlen($reside) > 200) || (strlen($nokpho) != 11) ) {
		
		
		echo 		'<script type="text/javascript"> alert("VALUE SUPPLIED TOO LENGTHY OR PHONE NUMBER NOT COMPLETE PLEASE TRY REDUCING"); </script>';
	}
	
	
	else {
		
		
         	$_SESSION["surname"] = $surname ;
	$_SESSION['firstname'] = $firstname;
	$_SESSION['midname'] = $midname;
	$_SESSION['email'] = $email;
	$_SESSION['phone'] = $phone;
	$_SESSION['dd'] = $dd;
	$_SESSION['mm'] = $mm;
	$_SESSION['yyyy'] = $yyyy;
	$_SESSION['state'] = $state;
	$_SESSION['lga'] = $lga;
	$_SESSION['sex'] = $sex;
	$_SESSION['status'] = $status;
	$_SESSION['religion'] = $religion;
	$_SESSION['disability'] = $disability;
	$_SESSION['perm'] = $perm;
	$_SESSION['reside'] = $reside;
	$_SESSION['faname'] = $faname;
	$_SESSION['moname'] = $moname;
	$_SESSION['nok'] = $nok;
	$_SESSION['nokpho'] = $nokpho;
	$_SESSION['rship'] = $rship;
	$_SESSION['passport']= $dst_db;
	
			  echo  		'<script type="text/javascript"> 
				  
				  alert("VARIABLE STORED AS SESSION");
				  window.location.href="educational.php";
			  ; </script>';
			
		
          
	}
	
	
	
}



	
	

?>

<script type="text/javascript" src=form.js ></script>



</body>
</html>