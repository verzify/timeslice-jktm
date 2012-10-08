<?php
	$connect = mysql_connect('localhost','root','');
	
	if (!$connect)
	{
		die('could not connect: ' . mysql_error() );
	}
	
	if (!mysql_select_db('youtube'))
	{
		die('the database youtube does not exist!');
	}

	$query = "SELECT COUNT(*) FROM TAG";
	$result = mysql_query($query);

	$row = mysql_fetch_row($result);
	
	mysql_close($connect);
?>

<html>
	<head><title>Reporting System 1</title></head>
	<body>
		<form method="post" action="ReportingSystem_Q1_Result.php">
		Total Number(x) of popular tagging keyword
		<br/>
		Start Date [yyyy-mm-dd]: 
		<input type="text" name="startDate"><br/>
		End Date [yyyy-mm-dd]: 
		<input type="text" name="endDate"><br/>
		Number: 
		<select name="numberOfTags">
			<option value="" selected>-- Select One --</option>
			<?php
				$counter = 1;
				while ($counter <= $row[0])
				{
					print '<option value='.$counter.'>'.$counter.'</option>';
					$counter++;
				}
			?>
		</select>
		<input type="submit" value="Send" />
		</form>
	</body>
</html>