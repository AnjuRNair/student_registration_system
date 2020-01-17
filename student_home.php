<?php include_once("header.php");
include_once("student_header.php");
session_start();
?>
<h1 align="center">Welcome <?php if(isset($_SESSION["uname"]) ){
				echo $_SESSION["uname"];
				//echo $_SESSION["sid"];	 
			?> </h1>
<center>
<br>
<div align="center" style="border:2px solid red;width:500px;height:200px">
<br>
<ul>
<a href="time_table.php">TIMETABLE</a><br><br>
<a href="leave_report.php"></a><br><br>
<a href="leave.php"></a><br><br>
</ul>
<br>
</div> <br>
</center>
<?php }include("footer.php");?>