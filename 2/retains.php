<?php

  if(isset($_POST['submit']))
  {

    $email=$_POST['email'];
	if($email=="")
	{
		echo "Cant be blank";
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		echo "Invalid Email";
	}
	else
	{
		
		echo $email;
	}
  }

?>



<html>

<head>

<title>Email</title>

</head>

<body>

	<form action="retains.php" method="post">
	
		<fieldset>
		
		<legend>Email</legend>
		Email: <input type="text" name="email" value= "<?php error_reporting(0); echo $_REQUEST['email'] ?>" placeholder="Email"><br>
		<hr>
		<button type= "submit" name="submit" value="submit">SUBMIT</button>
		
		
		</fieldset>
	
	</form>

</body>

</html>