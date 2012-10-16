<html>
<?php
	session_start();
	
	if (isset($_GET['eName']))
	{
		$eName = $_GET['eName'];
		$eLocation = $_GET['eLocation'];
		$category = $_GET['category'];
		$eStartDate = $_GET['eStartDate'];
		$eStartTime = $_GET['eStartTime'];
		$eEndTime = $_GET['eEndTime'];
		// echo $eName;
		// echo $eLocation;
		// echo $category;
		// echo $eStartDate;
		// echo $eStartTime;
		// echo $eEndTime;
		
		$date = explode(" ",$eStartDate);
		$day = $date[0];
		$month = $date[1];
		$year = $date[2];
		echo $day;
		echo $month;
		echo $year;
		
		$selected_day = date('N',strtotime($day."-".$month."-".$year));
		echo "selected day is ".$selected_day;
		
		switch ($selected_day) {
			case 1:
				echo $_SESSION['day1_events'];
				$_SESSION['day1_events'] = $_SESSION['day1_events'].";".$eName.",".$eLocation.",".$category.",".$eStartTime.",".$eEndTime;
				
				break;
			case 2:
				echo $_SESSION['day2_events'];
				$_SESSION['day2_events'] = $_SESSION['day2_events'].";".$eName.",".$eLocation.",".$category.",".$eStartTime.",".$eEndTime;
				break;
			case 3:
				$_SESSION['day3_events'] = $_SESSION['day3_events'].";".$eName.",".$eLocation.",".$category.",".$eStartTime.",".$eEndTime;
				break;
			case 4:
				$_SESSION['day4_events'] = $_SESSION['day4_events'].";".$eName.",".$eLocation.",".$category.",".$eStartTime.",".$eEndTime;
				break;
			case 5:
				$_SESSION['day5_events'] = $_SESSION['day5_events'].";".$eName.",".$eLocation.",".$category.",".$eStartTime.",".$eEndTime;
				break;
			case 6:
				$_SESSION['day6_events'] = $_SESSION['day6_events'].";".$eName.",".$eLocation.",".$category.",".$eStartTime.",".$eEndTime;
				break;
			case 7:
				$_SESSION['day7_events'] = $_SESSION['day7_events'].";".$eName.",".$eLocation.",".$category.",".$eStartTime.",".$eEndTime;
				break;
		}
		header("Location: main.php"); 
	}
	else
	{
		echo "error";
	}
?>
</html>