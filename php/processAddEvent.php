<html>
<?php
	session_start();
	
	if (isset($_GET['eName']))
	{
		$eName = $_GET['eName'];
		$eLocation = $_GET['eLocation'];
		$category = $_GET['category'];
		$eStartDate = $_GET['eStartDate'];
		//echo $eStartDate;
		
		$day = substr($eStartDate, 0, 2);
		$month = substr($eStartDate, 3, 2);
		$year = substr($eStartDate, 6, 4);
		//echo $day;
		//echo $month;
		//echo $year;
		
		$selected_day = date('N',strtotime($day."-".$month."-".$year));
		//echo $selected_day;
		
		switch ($selected_day) {
			case 1:
				echo "this is monday";
				break;
			case 2:
				$_SESSION['day2_events'] = $_SESSION['day2_events']."Dance Practice,ACC,CCA,9:00 AM, 12:00 AM;";
				break;
			case 3:
				echo "this is weds";
				break;
			case 4:
				echo "this is weds";
				break;
			case 5:
				echo "this is weds";
				break;
			case 6:
				echo "this is weds";
				break;
			case 7:
				echo "this is weds";
				break;
		}
		//header("Location: main.php"); 
	}
	else
	{
		echo "error";
	}
?>
</html>