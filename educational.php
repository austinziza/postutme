<?php session_start(); ?>
<html>
<head>
<title> EDUCATIONAL BACKGROUND</title>
<link rel= "stylesheet" type="text/css" href="educational.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.5.0.js"> </script>

</head>
<body>


<div class="grid-container">

<div class="header1"><h1>ENUGU STATE UNIVERSITY OF SCIENCE AND TECHNOLOGY</h1></div>
<div class="header2"><h2>COMPLETE YOUR EDUCATIONAL BACKGROUND</h2></div>

<div class="item1"></div>

<div class="item5"></div>
 
</div>

<form action="" method="post" class="myform2"  id="demoForm" name="education">

<label class="jambno">JAMB REG NO </label><input type="text" name="jambreg" class="jambreg"  placeholder="jamb reg no"  required />
<label class="jscore">JAMB SCORE</label><input type="number" name="jambscore" class="jambscore" maxlength=6 placeholder="jamb score" required />
<label class="choose"><center>SELECT PREFERED COURSE OF STUDY</center></label>
<label class="selschool">SELECT SCHOOL</label>

<select name="category" id="category" class="sschool">
<option value="">SELECT SCHOOL</option>
<option value="technology">SCHOOL OF TECHNOLOGY</option>
<option value="engineering">SCHOOL OF ENGINEERING</option>

<option value="business_studies">SCHOOL OF BUSINESS STUDIES</option>
<option value="financial_studies">SCHOOL OF FINANCIAL STUDIES</option>
<option value="communication_arts">SCHOOL OF COMMUNICATION ARTS</option>
<option value="environmental_studies">SCHOOL OF ENVIRONMENTAL STUDIES</option>

</select>



<label class="selcourse">SELECT COURSE</label>


<select name="choices[]" id="choices" class="course">


</select>

<label class="prev"><center>PREVIOUS INSTITUTION ATTENDED</center></label>
<label class="pri">PRIMARY SCHOOL ATTENDED</label><input type="text" name="primary" class="primary" placeholder="Primary school attended" required />
<label class="priys">YEAR STARTED</label>
<select name="pys" class="pys" >

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


<label class="priye">YEAR ENDED</label> 
<select name="pye" class="pye">
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
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
</select>


<label class="sec"> SECONDARY SCHOOL</label><input type="text" name="secondary" class="secondary" placeholder="Secondary school attended" required />
<label class="secyr">YEAR STARTED</label>
<select name="sys" class="secyrs">
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

<label class="secend">YEAR ENDED</label>
<select name="secye" class="secended">
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
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
</select>

<label class="selex">SELECT EXAM TYPE</label>
<select name="examtype" class="examtype">
<option value="">select</option>
<option value="wassce">WASSCE</option>
<option value="neco">NECO</option>
<option value="nabteb">NABTEB</option>
<option value="gce">GCE</option>


</select>

<label class="selexy">SELECT EXAM YEAR</label>

<select name="examyear" class="examyear">
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
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
</select>
<label class="exano">EXAMINATION NUMBER</label><input type="text" name="examno" class="examno" placeholder="exam number" required />

<label class="upload"><h1><center> UPLOAD SSCE RESULT</center></h1></label>
<label class="selsub">SELECT SUBJECT</label>
<label class="selgrade">SELECT GRADE</label>

<select class="firstsub" name="firstsub">
<option value="">SELECT </option>
<option value="english">ENGLISH </option>
<option value="mathematics">MATHEMATICS </option>
<option value="biology"> BIOLOGY</option>
<option value="chemistry">CHEMISTRY </option>
<option value="physics">PHYSICS </option>
<option value="geography">GEOGRAPHY </option>
<option value="agricultural Science">AGRIC SCIENCE </option>
<option value="economics"> ECONOMICS</option>
<option value="government">GOVERNMENT </option>
<option value="civic education"> CIVIC EDUCATION</option>
<option value="history">HISTORY </option>
<option value="financial accounting">FINANCIAL ACCOUNTING </option>
<option value="commerce">COMMERCE </option>
<option value="literature">LITERATURE </option>
<option value="igbo language"> IGBO LANGUAGE</option>
<option value="hausa language">HAUSA LANGUAGE </option>
<option value="french"> FRENCH</option>
<option value="yoruba language">YORUBA LANGUAGE </option>
<option value="christian religious Studies">CRK </option>
<option value="computer science">COMPUTER SCIENCE </option>
<option value="further mathematics">FURTHER MATHS </option>
<option value="animal husbandry">ANIMAL HUSBANDRY </option>
<option value="technical drawing">TECHNICAL DRAWING </option>
<option value="creative art">CREATIVE ART </option>
<option value="food and nutrition">FOOD AND NUT </option>
<option value="metal work">METAL WORK </option>
<option value="applied electricity">APPLIED ELECTRICITY </option>
<option value="automobile"> AUTOMOBILE</option>
<option value="woodwork"> WOOD WORK</option>
</select>

<select class="secondsub" name="secondsub">
<option value="">SELECT </option>
<option value="english">ENGLISH </option>
<option value="mathematics">MATHEMATICS </option>
<option value="biology"> BIOLOGY</option>
<option value="chemistry">CHEMISTRY </option>
<option value="physics">PHYSICS </option>
<option value="geography">GEOGRAPHY </option>
<option value="agricultural Science">AGRIC SCIENCE </option>
<option value="economics"> ECONOMICS</option>
<option value="government">GOVERNMENT </option>
<option value="civic education"> CIVIC EDUCATION</option>
<option value="history">HISTORY </option>
<option value="financial accounting">FINANCIAL ACCOUNTING </option>
<option value="commerce">COMMERCE </option>
<option value="literature">LITERATURE </option>
<option value="igbo language"> IGBO LANGUAGE</option>
<option value="hausa language">HAUSA LANGUAGE </option>
<option value="french"> FRENCH</option>
<option value="yoruba language">YORUBA LANGUAGE </option>
<option value="christian religious Studies">CRK </option>
<option value="computer science">COMPUTER SCIENCE </option>
<option value="further mathematics">FURTHER MATHS </option>
<option value="animal husbandry">ANIMAL HUSBANDRY </option>
<option value="technical drawing">TECHNICAL DRAWING </option>
<option value="creative art">CREATIVE ART </option>
<option value="food and nutrition">FOOD AND NUT </option>
<option value="metal work">METAL WORK </option>
<option value="applied electricity">APPLIED ELECTRICITY </option>
<option value="automobile"> AUTOMOBILE</option>
<option value="woodwork"> WOOD WORK</option>
</select>

<select class="thirdsub" name="thirdsub">
<option value="">SELECT </option>
<option value="english">ENGLISH </option>
<option value="mathematics">MATHEMATICS </option>
<option value="biology"> BIOLOGY</option>
<option value="chemistry">CHEMISTRY </option>
<option value="physics">PHYSICS </option>
<option value="geography">GEOGRAPHY </option>
<option value="agricultural Science">AGRIC SCIENCE </option>
<option value="economics"> ECONOMICS</option>
<option value="government">GOVERNMENT </option>
<option value="civic education"> CIVIC EDUCATION</option>
<option value="history">HISTORY </option>
<option value="financial accounting">FINANCIAL ACCOUNTING </option>
<option value="commerce">COMMERCE </option>
<option value="literature">LITERATURE </option>
<option value="igbo language"> IGBO LANGUAGE</option>
<option value="hausa language">HAUSA LANGUAGE </option>
<option value="french"> FRENCH</option>
<option value="yoruba language">YORUBA LANGUAGE </option>
<option value="christian religious Studies">CRK </option>
<option value="computer science">COMPUTER SCIENCE </option>
<option value="further mathematics">FURTHER MATHS </option>
<option value="animal husbandry">ANIMAL HUSBANDRY </option>
<option value="technical drawing">TECHNICAL DRAWING </option>
<option value="creative art">CREATIVE ART </option>
<option value="food and nutrition">FOOD AND NUT </option>
<option value="metal work">METAL WORK </option>
<option value="applied electricity">APPLIED ELECTRICITY </option>
<option value="automobile"> AUTOMOBILE</option>
<option value="woodwork"> WOOD WORK</option>
</select>

<select class="fourthsub" name="fourthsub">
<option value="">SELECT </option>
<option value="english">ENGLISH </option>
<option value="mathematics">MATHEMATICS </option>
<option value="biology"> BIOLOGY</option>
<option value="chemistry">CHEMISTRY </option>
<option value="physics">PHYSICS </option>
<option value="geography">GEOGRAPHY </option>
<option value="agricultural Science">AGRIC SCIENCE </option>
<option value="economics"> ECONOMICS</option>
<option value="government">GOVERNMENT </option>
<option value="civic education"> CIVIC EDUCATION</option>
<option value="history">HISTORY </option>
<option value="financial accounting">FINANCIAL ACCOUNTING </option>
<option value="commerce">COMMERCE </option>
<option value="literature">LITERATURE </option>
<option value="igbo language"> IGBO LANGUAGE</option>
<option value="hausa language">HAUSA LANGUAGE </option>
<option value="french"> FRENCH</option>
<option value="yoruba language">YORUBA LANGUAGE </option>
<option value="christian religious Studies">CRK </option>
<option value="computer science">COMPUTER SCIENCE </option>
<option value="further mathematics">FURTHER MATHS </option>
<option value="animal husbandry">ANIMAL HUSBANDRY </option>
<option value="technical drawing">TECHNICAL DRAWING </option>
<option value="creative art">CREATIVE ART </option>
<option value="food and nutrition">FOOD AND NUT </option>
<option value="metal work">METAL WORK </option>
<option value="applied electricity">APPLIED ELECTRICITY </option>
<option value="automobile"> AUTOMOBILE</option>
<option value="woodwork"> WOOD WORK</option>
</select>

<select class="fifthsub" name="fifthsub">
<option value="">SELECT </option>
<option value="english">ENGLISH </option>
<option value="mathematics">MATHEMATICS </option>
<option value="biology"> BIOLOGY</option>
<option value="chemistry">CHEMISTRY </option>
<option value="physics">PHYSICS </option>
<option value="geography">GEOGRAPHY </option>
<option value="agricultural Science">AGRIC SCIENCE </option>
<option value="economics"> ECONOMICS</option>
<option value="government">GOVERNMENT </option>
<option value="civic education"> CIVIC EDUCATION</option>
<option value="history">HISTORY </option>
<option value="financial accounting">FINANCIAL ACCOUNTING </option>
<option value="commerce">COMMERCE </option>
<option value="literature">LITERATURE </option>
<option value="igbo language"> IGBO LANGUAGE</option>
<option value="hausa language">HAUSA LANGUAGE </option>
<option value="french"> FRENCH</option>
<option value="yoruba language">YORUBA LANGUAGE </option>
<option value="christian religious_Studies">CRK </option>
<option value="computer science">COMPUTER SCIENCE </option>
<option value="further mathematics">FURTHER MATHS </option>
<option value="animal husbandry">ANIMAL HUSBANDRY </option>
<option value="technical drawing">TECHNICAL DRAWING </option>
<option value="creative art">CREATIVE ART </option>
<option value="food and nutrition">FOOD AND NUT </option>
<option value="metal work">METAL WORK </option>
<option value="applied electricity">APPLIED ELECTRICITY </option>
<option value="automobile"> AUTOMOBILE</option>
<option value="woodwork"> WOOD WORK</option>
</select>

<select class="sixthsub" name="sixthsub">
<option value="">SELECT </option>
<option value="english">ENGLISH </option>
<option value="mathematics">MATHEMATICS </option>
<option value="biology"> BIOLOGY</option>
<option value="chemistry">CHEMISTRY </option>
<option value="physics">PHYSICS </option>
<option value="geography">GEOGRAPHY </option>
<option value="agricultural Science">AGRIC SCIENCE </option>
<option value="economics"> ECONOMICS</option>
<option value="government">GOVERNMENT </option>
<option value="civic education"> CIVIC EDUCATION</option>
<option value="history">HISTORY </option>
<option value="financial accounting">FINANCIAL ACCOUNTING </option>
<option value="commerce">COMMERCE </option>
<option value="literature">LITERATURE </option>
<option value="igbo language"> IGBO LANGUAGE</option>
<option value="hausa language">HAUSA LANGUAGE </option>
<option value="french"> FRENCH</option>
<option value="yoruba language">YORUBA LANGUAGE </option>
<option value="christian religious_Studies">CRK </option>
<option value="computer science">COMPUTER SCIENCE </option>
<option value="further mathematics">FURTHER MATHS </option>
<option value="animal husbandry">ANIMAL HUSBANDRY </option>
<option value="technical drawing">TECHNICAL DRAWING </option>
<option value="creative art">CREATIVE ART </option>
<option value="food and nutrition">FOOD AND NUT </option>
<option value="metal work">METAL WORK </option>
<option value="applied electricity">APPLIED ELECTRICITY </option>
<option value="automobile"> AUTOMOBILE</option>
<option value="woodwork"> WOOD WORK</option>
</select>

<select class="seventhsub" name="seventhsub">
<option value="">SELECT </option>
<option value="english">ENGLISH </option>
<option value="mathematics">MATHEMATICS </option>
<option value="biology"> BIOLOGY</option>
<option value="chemistry">CHEMISTRY </option>
<option value="physics">PHYSICS </option>
<option value="geography">GEOGRAPHY </option>
<option value="agricultural Science">AGRIC SCIENCE </option>
<option value="economics"> ECONOMICS</option>
<option value="government">GOVERNMENT </option>
<option value="civic education"> CIVIC EDUCATION</option>
<option value="history">HISTORY </option>
<option value="financial accounting">FINANCIAL ACCOUNTING </option>
<option value="commerce">COMMERCE </option>
<option value="literature">LITERATURE </option>
<option value="igbo language"> IGBO LANGUAGE</option>
<option value="hausa language">HAUSA LANGUAGE </option>
<option value="french"> FRENCH</option>
<option value="yoruba language">YORUBA LANGUAGE </option>
<option value="christian religious Studies">CRK </option>
<option value="computer science">COMPUTER SCIENCE </option>
<option value="further mathematics">FURTHER MATHS </option>
<option value="animal husbandry">ANIMAL HUSBANDRY </option>
<option value="technical drawing">TECHNICAL DRAWING </option>
<option value="creative art">CREATIVE ART </option>
<option value="food and nutrition">FOOD AND NUT </option>
<option value="metal work">METAL WORK </option>
<option value="applied electricity">APPLIED ELECTRICITY </option>
<option value="automobile"> AUTOMOBILE</option>
<option value="woodwork"> WOOD WORK</option>
</select>

<select class="eightsub" name="eightsub">
<option value="">SELECT </option>
<option value="english">ENGLISH </option>
<option value="mathematics">MATHEMATICS </option>
<option value="biology"> BIOLOGY</option>
<option value="chemistry">CHEMISTRY </option>
<option value="physics">PHYSICS </option>
<option value="geography">GEOGRAPHY </option>
<option value="agricultural Science">AGRIC SCIENCE </option>
<option value="economics"> ECONOMICS</option>
<option value="government">GOVERNMENT </option>
<option value="civic education"> CIVIC EDUCATION</option>
<option value="history">HISTORY </option>
<option value="financial accounting">FINANCIAL ACCOUNTING </option>
<option value="commerce">COMMERCE </option>
<option value="literature">LITERATURE </option>
<option value="igbo language"> IGBO LANGUAGE</option>
<option value="hausa language">HAUSA LANGUAGE </option>
<option value="french"> FRENCH</option>
<option value="yoruba language">YORUBA LANGUAGE </option>
<option value="christian religious Studies">CRK </option>
<option value="computer science">COMPUTER SCIENCE </option>
<option value="further mathematics">FURTHER MATHS </option>
<option value="animal husbandry">ANIMAL HUSBANDRY </option>
<option value="technical drawing">TECHNICAL DRAWING </option>
<option value="creative art">CREATIVE ART </option>
<option value="food and nutrition">FOOD AND NUT </option>
<option value="metal work">METAL WORK </option>
<option value="applied electricity">APPLIED ELECTRICITY </option>
<option value="automobile"> AUTOMOBILE</option>
<option value="woodwork"> WOOD WORK</option>
</select>

<select class="ninthsub" name="ninthsub">
<option value="">SELECT </option>
<option value="english">ENGLISH </option>
<option value="mathematics">MATHEMATICS </option>
<option value="biology"> BIOLOGY</option>
<option value="chemistry">CHEMISTRY </option>
<option value="physics">PHYSICS </option>
<option value="geography">GEOGRAPHY </option>
<option value="agricultural Science">AGRIC SCIENCE </option>
<option value="economics"> ECONOMICS</option>
<option value="government">GOVERNMENT </option>
<option value="civic education"> CIVIC EDUCATION</option>
<option value="history">HISTORY </option>
<option value="financial accounting">FINANCIAL ACCOUNTING </option>
<option value="commerce">COMMERCE </option>
<option value="literature">LITERATURE </option>
<option value="igbo language"> IGBO LANGUAGE</option>
<option value="hausa language">HAUSA LANGUAGE </option>
<option value="french"> FRENCH</option>
<option value="yoruba language">YORUBA LANGUAGE </option>
<option value="christian religious Studies">CRK </option>
<option value="computer science">COMPUTER SCIENCE </option>
<option value="further mathematics">FURTHER MATHS </option>
<option value="animal husbandry">ANIMAL HUSBANDRY </option>
<option value="technical drawing">TECHNICAL DRAWING </option>
<option value="creative art">CREATIVE ART </option>
<option value="food and nutrition">FOOD AND NUT </option>
<option value="metal work">METAL WORK </option>
<option value="applied electricity">APPLIED ELECTRICITY </option>
<option value="automobile"> AUTOMOBILE</option>
<option value="woodwork"> WOOD WORK</option>
</select>

<select name="firstgrade" class="firstgrade">
<option value="">SELECT</option>
<option value="A1">A1</option>
<option value="B2">B2</option>
<option value="B3">B3</option>
<option value="C4">C4</option>
<option value="C5">C5</option>
<option value="C6">C6</option>
<option value="D7">D7</option>
<option value="E8">E8</option>
<option value = "F9">F9</option>

</select>

<select name="secondgrade" class="secondgrade">
<option value="">SELECT</option>
<option value="A1">A1</option>
<option value="B2">B2</option>
<option value="B3">B3</option>
<option value="C4">C4</option>
<option value="C5">C5</option>
<option value="C6">C6</option>
<option value="D7">D7</option>
<option value="E8">E8</option>
<option value = "F9">F9</option>

</select>

<select name="thirdgrade" class="thirdgrade">
<option value="">SELECT</option>
<option value="A1">A1</option>
<option value="B2">B2</option>
<option value="B3">B3</option>
<option value="C4">C4</option>
<option value="C5">C5</option>
<option value="C6">C6</option>
<option value="D7">D7</option>
<option value="E8">E8</option>
<option value = "F9">F9</option>

</select>

<select name="fourthgrade" class="fourthgrade">
<option value="">SELECT</option>
<option value="A1">A1</option>
<option value="B2">B2</option>
<option value="B3">B3</option>
<option value="C4">C4</option>
<option value="C5">C5</option>
<option value="C6">C6</option>
<option value="D7">D7</option>
<option value="E8">E8</option>
<option value = "F9">F9</option>

</select>

<select name="fifthgrade" class="fifthgrade">
<option value="">SELECT</option>
<option value="A1">A1</option>
<option value="B2">B2</option>
<option value="B3">B3</option>
<option value="C4">C4</option>
<option value="C5">C5</option>
<option value="C6">C6</option>
<option value="D7">D7</option>
<option value="E8">E8</option>
<option value = "F9">F9</option>

</select>

<select name="sixthgrade" class="sixthgrade">
<option value="">SELECT</option>
<option value="A1">A1</option>
<option value="B2">B2</option>
<option value="B3">B3</option>
<option value="C4">C4</option>
<option value="C5">C5</option>
<option value="C6">C6</option>
<option value="D7">D7</option>
<option value="E8">E8</option>
<option value = "F9">F9</option>

</select>

<select name="seventhgrade" class="seventhgrade">
<option value="">SELECT</option>
<option value="A1">A1</option>
<option value="B2">B2</option>
<option value="B3">B3</option>
<option value="C4">C4</option>
<option value="C5">C5</option>
<option value="C6">C6</option>
<option value="D7">D7</option>
<option value="E8">E8</option>
<option value = "F9">F9</option>

</select>

<select name="eightgrade" class="eightgrade">
<option value="">SELECT</option>
<option value="A1">A1</option>
<option value="B2">B2</option>
<option value="B3">B3</option>
<option value="C4">C4</option>
<option value="C5">C5</option>
<option value="C6">C6</option>
<option value="D7">D7</option>
<option value="E8">E8</option>
<option value = "F9">F9</option>

</select>

<select name="ninthgrade" class="ninthgrade">
<option value="">SELECT</option>
<option value="A1">A1</option>
<option value="B2">B2</option>
<option value="B3">B3</option>
<option value="C4">C4</option>
<option value="C5">C5</option>
<option value="C6">C6</option>
<option value="D7">D7</option>
<option value="E8">E8</option>
<option value = "F9">F9</option>

</select>
<label class="terms">I accept to obey the institution's rules and regulations if admitted and i attest that i honestly uploaded all my personal details without dishonesty. if investigation proved that i gave an incorrect or misleading details, then i humbly request that my admission be terminated with immediate effect</label>

<input type="checkbox" name="agree" size="100" class="agree" value="agree" onchange="document.getElementById('submit').disabled = !this.checked;" />

<input type="submit" name="submit" value="PROCEED" class="submit" id="submit" disabled="disabled" />

</form>
<button class="back" onclick="window.location.href='form.php';">BACK TO BIO PAGE</button>



<?php

if (isset($_POST['submit'])) {

$jambreg = $_POST['jambreg'];
$jambscore = $_POST['jambscore'];
$school = $_POST['category'];
$course = $_POST['choices'];
$primary = $_POST['primary'];
$pyearstart =$_POST['pys'];
$pyearend = $_POST['pye'];
$secondary = $_POST['secondary'];
$syearstart = $_POST['sys'];
$syearend = $_POST['secye'];
$examtype = $_POST['examtype'];
$examyear = $_POST['examyear'];
$examno = $_POST['examno'];

$firstsub = $_POST['firstsub'];
$secondsub = $_POST['secondsub'];
$thirdsub = $_POST['thirdsub'];
$fourthsub = $_POST['fourthsub'];
$fifthsub = $_POST['fifthsub'];
$sixthsub = $_POST['sixthsub'];
$seventhsub = $_POST['seventhsub'];
$eightsub = $_POST['eightsub'];
$ninthsub = $_POST['ninthsub'];

$firstgrade = $_POST['firstgrade'];
$secondgrade = $_POST['secondgrade'];
$thirdgrade = $_POST['thirdgrade'];
$fourthgrade = $_POST['fourthgrade'];
$fifthgrade = $_POST['fifthgrade'];
$sixthgrade = $_POST['sixthgrade'];
$seventhgrade = $_POST['seventhgrade'];
$eightgrade = $_POST['eightgrade'];
$ninthgrade = $_POST['ninthgrade'];
$course = implode($course);
$jambreg = strtoupper($jambreg);
$school = strtoupper($school);
$course = strtoupper($course);
$primary =strtoupper($primary);
$secondary = strtoupper($secondary);
$examtype = strtoupper($examtype);
$examno = strtoupper($examno);
$firstsub = strtoupper($firstsub);
$secondsub = strtoupper($secondsub);
$thirdsub = strtoupper($thirdsub);
$fourthsub = strtoupper($fourthsub);
$fifthsub = strtoupper($fifthsub);
$sixthsub = strtoupper($sixthsub);
$seventhsub = strtoupper($seventhsub);
$eightsub = strtoupper($eightsub);
$ninthsub = strtoupper($ninthsub);

$firstgrade = strtoupper($secondgrade);
$secondgrade = strtoupper($secondgrade);
$thirdgrade = strtoupper($thirdgrade);
$fourthgrade = strtoupper($fourthgrade);
$fifthgrade = strtoupper($fifthgrade);
$sixthgrade = strtoupper($sixthgrade);
$seventhgrade = strtoupper($seventhgrade);
$eightgrade = strtoupper($eightgrade);
$ninthgrade = strtoupper($ninthgrade);




echo "<br>" . $jambreg ."<br>". $jambscore . "<br>" . $school . "<br>" . $course . "<br>" . $primary . "<br>" . $pyearstart . "<br>" . $pyearend . "<br>" . $secondary . "<br>" . $syearstart . "<br>" . $syearend . "<br>" . $examtype . "<br>" . "<br>" . $examyear . "<br>" . $examno . "<br>" . $firstsub ."&nbsp;". $firstgrade ."<br>" . $secondsub ."&nbsp;". $secondgrade . "<br>" . $thirdsub ."&nbsp;". $thirdgrade . "<br>" . $fourthsub ."&nbsp;". $fourthgrade . "<br>" . $fifthsub ."&nbsp;". $fifthgrade . "<br>" . $sixthsub ."&nbsp;". $sixthgrade . "<br>" . $seventhsub ."&nbsp;". $seventhgrade . "<br>" . $eightsub ."&nbsp;". $eightgrade . "<br>" . $ninthsub ."&nbsp;". $ninthgrade  ;
	
	if (($jambreg == "") || ($jambscore == "") || ($school=="") || ($course == "") || ($primary == "") || ($pyearstart == "") || ($pyearend == "") || ($secondary =="") || ($syearstart == "") || ($syearend == "") || ($examtype == "") || ($examyear == "") || ($examno == "") || ($firstsub == "") || ($secondsub=="")|| ($thirdsub=="") || ($fourthsub == "") || ($fifthsub=="") || ($sixthsub == "") || ($seventhsub=="") || ($eightsub=="") || ($ninthsub=="") || ($firstgrade=="") || ($secondgrade=="") || ($thirdgrade=="") || ($fourthgrade=="") || ($fifthgrade=="") || ($sixthgrade=="") || ($seventhgrade=="") || ($eightgrade=="") || ($ninthgrade=="") ) {
		echo  		'<script type="text/javascript"> alert(" EMPTY FIELD PLEASE FILL ALL THE NECCESSARY FIELDS BEFORE SUBMITTING "); </script>';
		
	}
	
	
	
	
	elseif (!ctype_alnum($jambreg) ){
		echo  		'<script type="text/javascript"> alert("PLEASE INPUT A VALID JAMB REG NUMBER"); </script>';
		
	}
	
	elseif (!is_numeric($jambscore)){
		echo  		'<script type="text/javascript"> alert("INVALID JAMB SCORE PLEASE INPUT A NUMBER "); </script>';
		
	}
	
      elseif (is_numeric($primary) || !is_string($primary)){
		 echo  		'<script type="text/javascript"> alert("INVALID CHARACTER PROVIDED IN YOUR PRIMARY SCHOOL ATTENDED FIELD!"); </script>';
		  
	  }
	        elseif (is_numeric($secondary) || !is_string($secondary)){
		 echo  		'<script type="text/javascript"> alert("INVALID CHARACTER PROVIDED IN YOUR SECONDARY SCHOOL ATTENDED FIELD!"); </script>';
		  
	  }
	  
	  elseif( !is_numeric($examno) && !ctype_alnum($examno)) {
		  echo  		'<script type="text/javascript"> alert("PLEASE PROVIDE A VALID EXAM NUMBER!"); </script>';
		  
	  }
	  
	  elseif( (strlen($jambreg) > 15)  || (strlen($primary) > 100) || (strlen($secondary) > 100) || (strlen($examno) > 15) ) {
		  		  echo  		'<script type="text/javascript"> alert("TEXT TOO LONG PLEASE SHORTEN YOUR DETAILS WHILE TRYING AGAIN!"); </script>';
		  
	  }
	  elseif ( (strlen($jambscore) !=3) || ($jambscore > 400) ) {
		  		  		  echo  		'<script type="text/javascript"> alert("JAMB SCORE TO/LESS LENGTHY OR GREATER THAN 400!"); </script>';
		  
	  }
	  else{
		  $_SESSION['jambreg'] = $jambreg;
		  $_SESSION['jambscore'] = $jambscore;
		  $_SESSION['school'] = $school;
		  $_SESSION['course'] = $course;
		  $_SESSION['primary'] = $primary;
		  $_SESSION['pyearstart'] = $pyearstart;
		  $_SESSION['pyearend'] = $pyearend;
		  $_SESSION['secondary'] = $secondary;
		  $_SESSION['syearstart'] = $syearstart;
		  $_SESSION['syearend'] = $syearend;
		  $_SESSION['examtype'] = $examtype;
		  $_SESSION['examyear'] = $examyear;
		  $_SESSION['examno'] = $examno;
		  $_SESSION['firstsub'] = $firstsub;
		   $_SESSION['secondsub'] = $secondsub;
		  $_SESSION['thirdsub'] = $thirdsub;
		  $_SESSION['fourthsub'] = $fourthsub;
		  $_SESSION['fifthsub'] = $fifthsub;
		  $_SESSION['sixthsub'] = $sixthsub;
		  $_SESSION['seventhsub'] = $seventhsub;
		  $_SESSION['eightsub'] = $eightsub;
		  $_SESSION['ninthsub'] = $ninthsub;
		  
		  
		  $_SESSION['firstgrade'] = $firstgrade;
		   $_SESSION['secondgrade'] = $secondgrade;
		  $_SESSION['thirdgrade'] = $thirdgrade;
		  $_SESSION['fourthgrade'] = $fourthgrade;
		  $_SESSION['fifthgrade'] = $fifthgrade;
		  $_SESSION['sixthgrade'] = $sixthgrade;
		  $_SESSION['seventhgrade'] = $seventhgrade;
		  $_SESSION['eightgrade'] = $eightgrade;
		  $_SESSION['ninthgrade'] = $ninthgrade;
		  
		  
		   echo  		'<script type="text/javascript"> if (window.confirm("ARE YOU SURE YOUR DETAILS ACURRATELY FILLED? PROCEEDING WILL MAKE YOU START AFRESH IF ERROR IS FOUND")){
				  
				  alert("VARIABLE STORED AS SESSION");
				  window.location.href="confirmation.php";
			  }; </script>';
	  }
}




?>	
	




<script type="text/javascript" src=education.js></script>
<script>
function saveform() {
	
	if(typeofwindow.sessionStorage === "undefined") {
		return;
	}
	saveValues("input");
	saveValues("select");
	return true;
}

function loadForm() {
	
	if(typeofwindow.sessionStorage === "undefined"){
		return;
	}
	
	setValues("input");
	setValues(select);
}

function saveValues(tag){
	
	var inputs=document.getElementsByTagname(tag);
	for (var i=0; i < inputs.length; i++){
		window.sessionStorage.setItem(inputs[i].name,inputs[i].value);
	}
}

function setValues(tag){
	var inputs=document.getElementsByTagname(tag);
	for(var i=0; i<input.length; i++){
		inputs[i].value = window.sessionStorage.getItem(inputs[i].name);
	}
}
saveform();
loadForm();
saveValues(tag);
</script>

<script>
function showValues() {
	var str =  $("form").serialize();
}
$("select"). on ("change", showValues);
showValues();
</script>

<script>
if (window.history.replaceState){
	window.history.replaceState(null, null, window.location.href);
}
</script>


</body>

</html>