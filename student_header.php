<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<title>
</title>
<style>
</style>
</head>
<body>
<div class="menubar">
<ul>
<li>
	<a href="/Student_Registration_System/views/student_home.php?prof=0">HOME</a>
</li>



<li>
	<a href="student_profile.php?prof=1">PROFILE</a>
</li>
<li>
	<a href="logout.php">LOG OUT</a>
</li>
</ul>
</div> </body> </html>

<?php 
	if(isset($_GET['prof'])){
		$id=$_GET['prof'];
		
		if($id==0){
			//$con->profile();
			echo "string home";
		}
		if($id==1){
			//$con->profile();
			echo "string";
		}
		
	}