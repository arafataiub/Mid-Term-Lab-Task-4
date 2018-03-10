<?php

$degree = $_REQUEST['degree'];


if(isset($_REQUEST['degree']))
{
	echo "you have the following degree :"."<br>";
	
	
	foreach($_REQUEST['degree'] as $degree)
	{
		
		echo $degree."<br>";
		
		
	}
	
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
		
		<input type="checkbox" name="degree[]" value="SSC" <?php  $degrees = "SSC" ; foreach($_REQUEST['degree'] as $value)  {  if( $value == $degrees ) { echo "checked=true";  }  }   ?> >SSC 
		<input type="checkbox" name="degree[]" value="HSC" <?php  $degrees = "HSC" ; foreach($_REQUEST['degree'] as $value)  {  if( $value == $degrees ) { echo "checked=true";  }  }   ?> >HSC 
		<input type="checkbox" name="degree[]" value="Bsc" <?php  $degrees = "Bsc" ; foreach($_REQUEST['degree'] as $value)  {  if( $value == $degrees ) { echo "checked=true";  }  }   ?>>Bsc
		<input type="checkbox" name="degree[]" value="Msc" <?php  $degrees = "Msc" ; foreach($_REQUEST['degree'] as $value)  {  if( $value == $degrees ) { echo "checked=true";  }  }   ?>>Msc<br>
		
		
		<hr>
		<button type= "submit" name="submit" value="submit">SUBMIT</button>
		
		
		</fieldset>
	
	</form>

</body>

</html>