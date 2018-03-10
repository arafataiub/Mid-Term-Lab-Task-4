<?php

	if(isset($_REQUEST['submit']))
	{
	  $name= $_REQUEST['name'];
		
		if($name=="")
		{
			echo "name cant be empty";
		}
		else if(str_word_count($name)<=1)
		{
			
			echo "name should be atleast two word";
		}
		else if(!preg_match("/^[a-zA-Z]*$/",$name))
		{
			echo "Can contain a-z, A-Z, period, dash only"
		}
		else
		{
			echo $name;
			
		}
		
		
	}

?>



<html>

<head>

<title>Lab Task 3.1</title>

</head>

<body>

<form action="retains.php" method="post">

	<fieldset>
	
		<legend>Name</legend>
		<input type=text name="name" value="<?php echo $_REQUEST['name'] ?>" placeholder="name"><br>
		<hr>
		<button type="submit" name=submit value="click"> Submit</button>
	
	</fieldset>

</form>

</body>

</html>