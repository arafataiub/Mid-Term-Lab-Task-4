<?php


if(isset($_REQUEST['blood']))
{
	echo $_REQUEST['blood'];
}



?>


<html>

<head>

<title>Blood Group</title>

</head>

<body>

	<form action= "retains.php" method="post">
	
		<fieldset>
		
			<legend>Blood Group</legend>
			<select name="blood">
			<option value="A+"  <?php error_reporting(null); if($_REQUEST['blood']== "A+") { echo "selected=true" ; }   ?>  >A+</option>
			<option value="A-"  <?php if($_REQUEST['blood']== "A-") { echo "selected=true" ; }   ?>>A-</option>
			<option value="B+"  <?php if($_REQUEST['blood']== "B+") { echo "selected=true" ; }   ?>>B+</option>
			<option value="B-"   <?php if($_REQUEST['blood']== "B-") { echo "selected=true" ; }   ?>>B-</option>
			<option value="AB+"   <?php if($_REQUEST['blood']== "AB+") { echo "selected=true" ; }   ?>>AB+</option>
			<option value="AB-"  <?php if($_REQUEST['blood']== "AB-") { echo "selected=true" ; }   ?>>AB-</option>
			<option value="O+"   <?php if($_REQUEST['blood']== "O+") { echo "selected=true" ; }   ?>>O+</option>
			<option value="O-"   <?php if($_REQUEST['blood']== "O-") { echo "selected=true" ; }   ?>>O-</option>
			
			
			
			</select>
			<hr>
			<button type=submit name="submit" value="submit">Submit</button>
			
		
		</fieldset>
	
	</form>

</body>


</html>