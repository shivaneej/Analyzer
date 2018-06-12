
<?php
if(isset($_POST['login_btn']))
{
session_start();
$username=$_POST['usernameadmin'];
$password=$_POST['passwordadmin'];
if($username=='admin' && $password=='12345')
{
$_SESSION['usernameadmin']=$username;
header('Location: admin.html');
}
else
echo 'Account invalid';
}
?> 
<html>
<head>

	<link rel="stylesheet" href="style.css">
	<title>Analyzer</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 
</head>



<body id="backg" >
 <!--Navigation bar-->
 
<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="Logo.png"/>
    </div>
    <ul class="nav navbar-nav navbar-custom">
        <!--Batchwise result-->
      <li class="dropdown"><a href="#"  data-toggle="dropdown" class="inv-font dropdown-toggle">Batchwise</a>
        <div class="dropdown-menu" style="padding: 25px; padding-bottom: 20px;">
          <p class="font" align="center" style="font-size: 16px;"> Select batch to view their performance till date </p>
        <form class="form-horizontal"  method="post" accept-charset="UTF-8">
         
                <select name="batch" class="popup" align="center" style="margin-left: 50px;">
                <option> --Select Batch-- </option>
                <option value="14"> 2014-2018 </option>
                <option value="15"> 2015-2019 </option>
                <option value="16"> 2016-2020 </option>
                <option value="17"> 2017-2021 </option> 
              </select>
          <input class="btn btn-block popup_btn" type="submit" name="continimp" value="Continuous Improvement" />
        </form>
        </div>
      </li>
     
    </ul>
    <!--Login-->
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a href="#" data-toggle="dropdown" class="inv-font dropdown-toggle"><span class="glyphicon glyphicon-user"></span> Admin Login</a>
        <div class="dropdown-menu" style="padding: 25px; padding-bottom: 20px;">
        <form class="form-horizontal"  method="post" accept-charset="UTF-8" action="#">
          <input id="username" class="form-control login" type="text" name="usernameadmin" placeholder="Enter Username" />
          <input id="password" class="form-control login" type="password" name="passwordadmin" placeholder="Enter Password"/>
          <input class="btn btn-block popup_btn" type="submit" name="login_btn" value="Login" />
        </form>
        </div></li>
    </ul>
  </div>
</nav>






<div class="blank col-md-4">
</div>
 <!--main-->
 <div class="main col-md-6" align="left">
 <form action="#" method="post">
 	<p class="font"> Academic Year <select name="academic_year" >
 		<option> --Select Academic Year-- </option>
 		<option value="2016-2017"> 2016-2017 </option>
 		<option value="2015-2016"> 2015-2016 </option>
 		<option value="2014-2015"> 2014-2015 </option> </select> </p>


 	<div class="yr" ><p class="font"> Year <select name="year" id="year">
 		<option> --Select Year-- </option>
 		<option value="fe"> First Year (F.E.) </option>
 		<option value="se"> Second Year (S.E.) </option>
 		<option value="te"> Third Year (T.E.) </option>
 		<option value="be"> Final Year (B.E.) </option> </select> </p> </div>


 	<div class="sst" id="abc"><p class="font"> Semester <select name="sem"  onchange="javascript:dropSelect();" id="sem">
 		<option> --Select Semester-- </option>
 		<option value="odd"> Odd </option>
 		<option value="even"> Even </option>
 		<option value="yearly"> Yearly </option> </select> </p> </div>

 		<div class="opt"><p class="font" id="hidethis">  <input type="radio" name="option" onclick="javascript:hideall();" value="overall" id="overall" /> All Subjects 
 			 <input type="radio" name="option" value="subject" onclick="javascript:subjectsem();" id="subject" /> Subject Result </p>
 			  </div>

      
    <div id="sub1" class="dd">    Subject <select name="subject" >
    <option> --Select Subject-- </option>
    <option value="101"> USHC101 Applied Mathematics – I </option>
    <option value="102"> USHC102 Applied Physics – I </option>
    <option value="103"> USHC103 Applied Chemistry – I </option>
    <option value="104"> USHC104 Engineering Graphics </option>
    <option value="105"> USHC105 Basic Electrical and Electronics Engineering </option> 
    <option value="106"> USHC106 Communicaton Skills </option> </select> </div>
    

    <div id="sub2" class="dd">    Subject <select name="subject" >
    <option> --Select Subject-- </option>
    <option value="201"> USHC201 Applied Mathematics – II </option>
    <option value="202"> USHC202 Applied Physics – II </option>
    <option value="203"> USHC203 Applied Chemistry – II </option>
    <option value="107"> USHC107 Engineering Mechanics </option>
    <option value="108"> USHC108 Fundamentals of Computer Programming </option> 
    <option value="109"> USHC109 Environmental Studies </option> </select> </div>


 		<div id="sub3" class="dd">	  Subject <select name="subject" >
 		<option> --Select Subject-- </option>
 		<option value="301"> UCEC301 Applied Mathematics – III </option>
 		<option value="302"> UCEC302 Object Oriented Programming Methodology </option>
 		<option value="303"> UCEC303 Data Structure </option>
    <option value="304"> UCEC304 Computer Organization and Architecture </option>
    <option value="305"> UCEC305 Discrete Structure and Graph Theory </option> </select> </div>

    <div id="sub4" class="dd">   Subject <select name="subject" >
    <option> --Select Subject-- </option>
    <option value="401"> UCEC401 Applied Mathematics – IV </option>
    <option value="402"> UCEC402 Microprocessor </option>
    <option value="403"> UCEC403 Analysis of Algorithm </option>
    <option value="404"> UCEC404 Relational Database Management Systems </option>
    <option value="405"> UCEC405 Digital Communication and Network </option> </select> </div>

    <div id="sub5" class="dd">   Subject <select name="subject" >
    <option> --Select Subject-- </option>
    <option value="501"> UCEC501 Operating Systems </option>
    <option value="502"> UCEC502 Data Networks </option>
    <option value="503"> UCEC503 Theory of Computer Science </option>
    <option value="504"> UCEC504 Advanced Database Management System </option>
    <option value="505"> UCEC505 Software Engineering </option></select> </div>

    <div id="sub6" class="dd">   Subject <select name="subject" >
    <option> --Select Subject-- </option>
    <option value="601"> UCEC601 Artificial Intelligence </option>
    <option value="602"> UCEC602 System Programming and Compiler Construction </option>
    <option value="603"> UCEC603 Digital Signal and Image Processing </option>
    <option value="604"> UCEC604 Mobile Cellular and Ad Hoc Networks </option>
    <option value="605"> UCEC605 Professional Communication Skills </option> </select> </div>

    <div id="sub7" class="dd">   Subject <select name="subject" >
    <option> --Select Subject-- </option>
    <option value="701"> UCEC701 Digital Signal Processing </option>
    <option value="702"> UCEC702 Cryptography and System Security </option>
    <option value="703"> UCEC703 Artificial Intelligence </option> </select> </div>

    <div id="sub8" class="dd">   Subject <select name="subject" >
    <option> --Select Subject-- </option>
    <option value="801"> UCEC801 Data Warehouse and Mining </option>
    <option value="802"> UCEC802 Human Machine Interaction </option>
    <option value="803"> UCEC803 Parallel and Distributed Systems </option> </select> </div> 



 		<p class="font"> <input type="submit" value="View Result" class="button"/> </p> </form>
 	</div>



 <script src="indexpage.js" type="text/javascript"></script>             
</body>
</html>