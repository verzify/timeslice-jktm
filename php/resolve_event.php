<html>
<?php
	session_start();
	
	if (isset($_GET['sStartDate']))
	{	
		//Get all the necessary data for stored event;
		$sName = "Judo Practice";
		$sLocation = "CCA Room";
		$sCategory = "CCA";
		$sStartDate = $_GET['sStartDate'];
		$sStartTime = $_GET['sStartTime'];
		$sEndTime = $_GET['sEndTime'];
		
		$sDate = explode(" ",$sStartDate);
		$sDay = $sDate[0];
		$sMonth = $sDate[1];
		$sYear = $sDate[2];
		
		$sSelected_day = date('N',strtotime($sDay."-".$sMonth."-".$sYear));
		//echo "selected day is ".$sSelected_day;
		
		//Get all the necessary data for new event;
		$nName = $_GET['eName'];
		$nLocation = $_GET['eLocation'];
		$nCategory = $_GET['category'];
		$nStartDate = $_GET['nStartDate'];
		$nStartTime = $_GET['nStartTime'];
		$nEndTime = $_GET['nEndTime'];
		
		$nDate = explode(" ",$nStartDate);
		$nDay = $nDate[0];
		$nMonth = $nDate[1];
		$nYear = $nDate[2];
		
		$nSelected_day = date('N',strtotime($nDay."-".$nMonth."-".$nYear));
		//echo "selected day is ".$sSelected_day;
		
		
		//Edit stored event first	
		$eventString = $_SESSION['day4_events'];
		$eventsArr = explode(";" ,$eventString);
		
		for($i=0; $i<sizeof($eventsArr); $i++){
			$detailsArr = explode("," , $eventsArr[$i]);
			$tempName = $detailsArr[0];
			
			if($tempName === "Judo Practice"){
				unset($eventsArr[$i]);
				break;
			}
			
		}
		$newEventString = "";
		foreach($eventsArr as &$eventLine){
			$newEventString = $newEventString.$eventLine.";";
		}
		$_SESSION['day4_events'] = substr($newEventString,0,-1).";".$sName.",".$sLocation.",".$sCategory.",".$sStartTime.",".$sEndTime;
		echo $_SESSION['day4_events'];
		
		
		
		switch ($nSelected_day) {
			case 1:
				echo $_SESSION['day1_events'];
				$_SESSION['day1_events'] = $_SESSION['day1_events'].";".$nName.",".$nLocation.",".$nCategory.",".$nStartTime.",".$nEndTime;
				
				break;
			case 2:
				echo $_SESSION['day2_events'];
				$_SESSION['day2_events'] = $_SESSION['day2_events'].";".$nName.",".$nLocation.",".$nCategory.",".$nStartTime.",".$nEndTime;
				break;
			case 3:
				$_SESSION['day3_events'] = $_SESSION['day3_events'].";".$nName.",".$nLocation.",".$nCategory.",".$nStartTime.",".$nEndTime;
				break;
			case 4:
				$_SESSION['day4_events'] = $_SESSION['day4_events'].";".$nName.",".$nLocation.",".$nCategory.",".$nStartTime.",".$nEndTime;
				break;
			case 5:
				$_SESSION['day5_events'] = $_SESSION['day5_events'].";".$nName.",".$nLocation.",".$nCategory.",".$nStartTime.",".$nEndTime;
				break;
			case 6:
				$_SESSION['day6_events'] = $_SESSION['day6_events'].";".$nName.",".$nLocation.",".$nCategory.",".$nStartTime.",".$nEndTime;
				break;
			case 7:
				$_SESSION['day7_events'] = $_SESSION['day7_events'].";".$nName.",".$nLocation.",".$nCategory.",".$nStartTime.",".$nEndTime;
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