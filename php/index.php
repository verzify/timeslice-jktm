<?php
	
	session_start();
	
	if (!isset($_SESSION['firstTime']))
	{	
		$_SESSION['day1_events'] = "SE Class,SIS SR3-1,School,8:30 AM, 11:45 AM;"
										. "Judo Practice,CCA Room,CCA,1:00 PM,3:00 PM;"
										. "IDP Class,SIS SR 2-3,School,3:30 PM,6:45 PM;"
										. "Dinner with friends,Macdonalds,Play,6:45 PM,8:00 PM;"
										. "Study IDP,Home,Work,9:00 PM,11:00 PM;"
										. "Sleep,Home,ZZZ,11:00 PM,8:00 AM (Next Day)";
										
		$_SESSION['day2_events'] = "Dance Practice,ACC,CCA,9:00 AM, 12:00 AM;"
										. "Study SE Lab,Library,School,1:00 PM,8:00 PM;"
										. "Sleep,Home,ZZZ,10:00 PM,8:00 AM (Next Day)";
										
		$_SESSION['day3_events'] = "Study FA,Home,Work,9:00 AM,2:00 PM;"
										. "FA Class,SOB SR2-6,School,3:30 PM,6:45 PM;"
										. "Sleep,Home,ZZZ,10:00 PM,8:00 AM (Next Day)";
										
		$_SESSION['day4_events'] = "Judo Practice,CCA Room,CCA,12:00 PM,3:00 PM;"
										. "TSM Class,SIS SR 2-1,School,3:30 PM,6:45 PM;"
										. "Dinner with friends,Astons,Play,6:45 PM,8:00 PM;"
										. "Study SE,Home,Work,9:00 PM,11:00 PM;"
										. "Sleep,Home,ZZZ,11:00 PM,8:00 AM (Next Day)";
										
		$_SESSION['day5_events'] = "Study TSM,Home,Work,9:00 AM,12:00 PM;"
										. "Dance Practice,ACC,CCA,1:00 PM, 3:00 PM;"
										. "FA Class,SOB SR2-6,School,3:30 PM,6:45 PM;"
										. "Sleep,Home,ZZZ,10:00 PM,8:00 AM (Next Day)";
										
		$_SESSION['day6_events'] = "Study IDP,Home,Work,9:00 AM,12:00 PM;"
										. "Dance Practice,ACC,CCA,1:00 PM, 3:00 PM;"
										. "Going out,Orchard,Play,3:30 PM,9:30 PM;"
										. "Sleep,Home,ZZZ,10:00 PM,8:00 AM (Next Day)";
										
		$_SESSION['day7_events'] = "Study FA,Home,Work,9:00 AM,2:00 PM;"
										. "Play Computer Games,Home,Play,2:00 PM,8:00 PM;"
										. "Sleep,Home,ZZZ,10:00 PM,8:00 AM (Next Day)";
										
		$_SESSION['firstTime'] = 1;
	}
	
?>

<!doctype html>
<html lang="en">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
          <link rel="stylesheet" href="themes/idp.min.css" />
          <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile.structure-1.1.1.min.css" />
          <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
          <script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>          
	  <title>Time Slice - Welcome</title>
    	
	  </head>
	<body>
        <div data-role="page" style="background-color:white">
            
            <div id="top_banner"></div><!-- top banner -->
            
            <div data-role="content" style="background-color:white">
				<div class="small_clear"></div>
				
				<img src="images/TimeSliceLogo.jpg" alt="Time Slice App" style="width:100%;height:auto;margin-bottom:40px"/>
				
				<a href="main.php" data-ajax="false" data-role="button" data-icon="home" style="background:#7CFC00;width:250px;margin-left:auto;margin-right:auto">Start</a>
				
            </div><!-- /content -->
            
        </div><!-- /page -->
	</body>
</html>
