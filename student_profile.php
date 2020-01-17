	<?php 
include('header.php');
 
 include('student_header.php');
 session_start();
 ?>   

<!DOCTYPE html>
<head>

	<title>PROFILE</title>
<style>
*{ margin:0px;
padding:0px;}
td
{padding:10px;
 }
</style>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


	<center>
		<div style="height:400px"class="log">
		<form name="create"
			  method="POST"
			  action="";
			  onsubmit=""	>
<div class="head">
		<h2 style="text-align:center;color:white">PROFILE</h2>
</div>
		<?php if(isset($_SESSION["uname"])and isset($_SESSION["sid"]))
{
				//echo $_SESSION["sname"];
				$u_id=$_SESSION["sid"];				
			}?>
<?php

$sql="select * from student where id='$id'";
$res=$con->query($sql);

if($res)
{
	foreach($res as $row)
	{
?>

<table style="padding:20px;" >
			<tr>
				<td><b>NAME :</b></td>
				<td>
					<?php
						$sql="select fname from  student";
						$res=$con->query($sql);
						echo $row["fname"];
					?>
				</td>
			</tr>
            
		    <tr>
				<td><b>MOBILE:</b></td>
				<td><?php
						$sql="select mobile from  student";
						$res=$con->query($sql);
						echo $row["mobile"];

					?>
				</td>
		    </tr>
			
			<tr>
				<td><b>EMAIL:</b></td>
				<td><?php
						$sql="select email from  student";
						$res=$con->query($sql);
						echo $row["email"];
					?>
				</td>
		    </tr>
			
			<tr>
				<td><b>DEPARTMENT :</b></td>
				<td><?php
						$sql="select dept_name from  student";
						$res=$con->query($sql);
						echo $row["dept_name"];

					?>
				</td>
		    </tr>
				
			<tr>
				<td><b>COURSE:</b></td>
				<td><?php
						$sql="select course_name from  student";
						$res=$con->query($sql);
						echo $row["course_name"];

					?>
				</td>
		    </tr>
	
			<tr>
				<td><b>YEAR :</b></td>
				<td><?php
						$sql="select year from  student";
						$res=$con->query($sql);
						echo $row["year"];

					?>
				</td>
		    </tr>
			
			<tr>
				<td><b>SEMESTER :</b></td>
				<td><?php
						$sql="select semester from  student";
						$res=$con->query($sql);
						echo $row["semester"];

					?>
				</td>
		    </tr>
			
			
				
			
		</table>
<?php
}}
?>
		</form>
		</div>
	</center>
 <?php
include('footer.php');
?>