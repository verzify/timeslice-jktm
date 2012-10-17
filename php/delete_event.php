<?php

session_start();

if (isset($_GET['eName'])) {
    $eName = $_GET['eName'];
    $eStartDate = $_GET['eStartDate'];

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
            break;
    }
    header("Location: main.php");
} else {
    echo "error";
}
?>