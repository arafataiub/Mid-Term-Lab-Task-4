<?php

if(isset($_POST['submit']))
{

  $day=$_POST['day'];
  $mon=$_POST['month'];
  $year=$_POST['year'];
  
  if($day=="" || $mon=="" || $year=="")
  {
	  echo "Fiil up all the info first!!";
  }
  else if(($day>31 || $day<1) || ($mon>12 || $mon<1) || ($year>1997 || $year<1953))
  {
	  echo "Invalid day or month or year";
  }
  else
  {
	  echo "Day:".$day." "."Month: ".$mon." "."Year: ".$year;
  }
}


?>


<html>

<head>

<title>Date Of Birth</title>

</head>

<body>

	<form action="retains.php" method="post">
	
		<fieldset>
		
		<legend>Date Of Birth</legend>
		<table>
			<tr>
				<th>DD</th>
				<th>MM</th>
				<th>YY</th>
			</tr>
			<tr>
				<td> <input type="number" name="day" value="<?php echo $_POST['day'] ?>"> /</td>
				<td> <input type="number" name="month" value="<?php echo $_POST['month'] ?>"> / </td>
				<td> <input type="number" name="year" value="<?php echo $_POST['year'] ?>"> </td>
			</tr>
		
		</table>
		
		
		<hr>
		<button type= "submit" name="submit" value="submit">SUBMIT</button>
		
		
		</fieldset>
	
	</form>

</body>

</html>