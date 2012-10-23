<?php

session_start();

if (isset($_GET['eName'])) {
    $eName = $_GET['eName'];
	$eLocation = $_GET['eLocation'];
	$category = $_GET['category'];
	$eStartDate = $_GET['eStartDate'];
	$eStartTime = $_GET['eStartTime'];
	$eEndTime = $_GET['eEndTime'];

    $date = explode(" ", $eStartDate);
    $day = $date[0];
    $month = $date[1];
    $year = $date[2];

    $selected_day = date('N', strtotime($day . "-" . $month . "-" . $year));




    switch ($selected_day) {
        case 1:
            $eventString = $_SESSION['day1_events'];
            $eventsArr = explode(";", $eventString);

            for ($i = 0; $i < sizeof($eventsArr); $i++) {
                $detailsArr = explode(",", $eventsArr[$i]);
                $tempName = $detailsArr[0];

                if ($tempName === $eName) {
                    unset($eventsArr[$i]);
                    break;
                }
            }
            $newEventString = "";
            foreach ($eventsArr as &$eventLine) {
                $newEventString = $newEventString . $eventLine . ";";
            }
            $_SESSION['day1_events'] = substr($newEventString, 0, -1);
			$_SESSION['day1_events'] = $_SESSION['day1_events'].";".$eName.",".$eLocation.",".$category.",".$eStartTime.",".$eEndTime;
            break;
        case 2:
            $eventString = $_SESSION['day2_events'];
            $eventsArr = explode(";", $eventString);

            for ($i = 0; $i < sizeof($eventsArr); $i++) {
                $detailsArr = explode(",", $eventsArr[$i]);
                $tempName = $detailsArr[0];

                if ($tempName === $eName) {
                    unset($eventsArr[$i]);
                    break;
                }
            }
            $newEventString = "";
            foreach ($eventsArr as &$eventLine) {
                $newEventString = $newEventString . $eventLine . ";";
            }
            $_SESSION['day2_events'] = substr($newEventString, 0, -1);
			$_SESSION['day2_events'] = $_SESSION['day2_events'].";".$eName.",".$eLocation.",".$category.",".$eStartTime.",".$eEndTime;
            break;
        case 3:
            $eventString = $_SESSION['day3_events'];
            $eventsArr = explode(";", $eventString);

            for ($i = 0; $i < sizeof($eventsArr); $i++) {
                $detailsArr = explode(",", $eventsArr[$i]);
                $tempName = $detailsArr[0];

                if ($tempName === $eName) {
                    unset($eventsArr[$i]);
                    break;
                }
            }
            $newEventString = "";
            foreach ($eventsArr as &$eventLine) {
                $newEventString = $newEventString . $eventLine . ";";
            }
            $_SESSION['day3_events'] = substr($newEventString, 0, -1);
			$_SESSION['day3_events'] = $_SESSION['day3_events'].";".$eName.",".$eLocation.",".$category.",".$eStartTime.",".$eEndTime;
            break;
        case 4:
            $eventString = $_SESSION['day4_events'];
            $eventsArr = explode(";", $eventString);

            for ($i = 0; $i < sizeof($eventsArr); $i++) {
                $detailsArr = explode(",", $eventsArr[$i]);
                $tempName = $detailsArr[0];

                if ($tempName === $eName) {
                    unset($eventsArr[$i]);
                    break;
                }
            }
            $newEventString = "";
            foreach ($eventsArr as &$eventLine) {
                $newEventString = $newEventString . $eventLine . ";";
            }
            $_SESSION['day4_events'] = substr($newEventString, 0, -1);
			$_SESSION['day4_events'] = $_SESSION['day4_events'].";".$eName.",".$eLocation.",".$category.",".$eStartTime.",".$eEndTime;
            break;
        case 5:
            $eventString = $_SESSION['day5_events'];
            $eventsArr = explode(";", $eventString);

            for ($i = 0; $i < sizeof($eventsArr); $i++) {
                $detailsArr = explode(",", $eventsArr[$i]);
                $tempName = $detailsArr[0];

                if ($tempName === $eName) {
                    unset($eventsArr[$i]);
                    break;
                }
            }
            $newEventString = "";
            foreach ($eventsArr as &$eventLine) {
                $newEventString = $newEventString . $eventLine . ";";
            }
            $_SESSION['day5_events'] = substr($newEventString, 0, -1);
			$_SESSION['day5_events'] = $_SESSION['day5_events'].";".$eName.",".$eLocation.",".$category.",".$eStartTime.",".$eEndTime;
            break;
        case 6:
            $eventString = $_SESSION['day6_events'];
            $eventsArr = explode(";", $eventString);

            for ($i = 0; $i < sizeof($eventsArr); $i++) {
                $detailsArr = explode(",", $eventsArr[$i]);
                $tempName = $detailsArr[0];

                if ($tempName === $eName) {
                    unset($eventsArr[$i]);
                    break;
                }
            }
            $newEventString = "";
            foreach ($eventsArr as &$eventLine) {
                $newEventString = $newEventString . $eventLine . ";";
            }
            $_SESSION['day6_events'] = substr($newEventString, 0, -1);
			$_SESSION['day6_events'] = $_SESSION['day6_events'].";".$eName.",".$eLocation.",".$category.",".$eStartTime.",".$eEndTime;
            break;
        case 7:
            $eventString = $_SESSION['day7_events'];
            $eventsArr = explode(";", $eventString);

            for ($i = 0; $i < sizeof($eventsArr); $i++) {
                $detailsArr = explode(",", $eventsArr[$i]);
                $tempName = $detailsArr[0];

                if ($tempName === $eName) {
                    unset($eventsArr[$i]);
                    break;
                }
            }
            $newEventString = "";
            foreach ($eventsArr as &$eventLine) {
                $newEventString = $newEventString . $eventLine . ";";
            }
            $_SESSION['day7_events'] = substr($newEventString, 0, -1);
			$_SESSION['day7_events'] = $_SESSION['day7_events'].";".$eName.",".$eLocation.",".$category.",".$eStartTime.",".$eEndTime;
            break;
    }
    header("Location: main.php");
} else {
    echo "error";
}
?>