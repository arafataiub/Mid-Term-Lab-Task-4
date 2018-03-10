<?php

if(isset($_REQUEST['submit']))
{

$gender=$_REQUEST['gender'];

echo "Gender : ".$gender;

}

?>



<html>

<head>

<title>Gender</title>

</head>

<body>

	<form action="retains.php" method="post">
	
		<fieldset>
		
		<legend>Gender</legend>
		
		<input type="radio" name="gender" value="Male" <?php   if($_POST['gender'] == "Male") {echo "checked=true";}?> >Male 
		<input type="radio" name="gender" value="Female" <?php   if($_POST['gender'] == "Female") {echo "checked=true";}?>>Female 
		<input type="radio" name="gender" value="Other" <?php   if($_POST['gender'] == "Other") {echo "checked=true";}?> >Other<br>
		
		
		<hr>
		<button type= "submit" name="submit" value="submit">SUBMIT</button>
		
		
		</fieldset>
	
	</form>

</body>

</html>