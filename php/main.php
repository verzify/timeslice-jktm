<?php

	session_start();
	
	$selected_date = null;
	$selected_day = null;
	
	if (!isset($_GET['selected_date']))
	{
		$selected_day = date('D',strtotime(date('d F Y')));
		$selected_date = date('d m Y');
	}
	else
	{
		$selected_date = (string)$_GET['selected_date'];
		$day = substr($selected_date, 0, 2);
		$month = substr($selected_date, 3, 2);
		$year = substr($selected_date, 6, 4);

		$selected_day = date('D',strtotime($day."-".$month."-".$year));
	}
	
	$day_events = null;
	$pie_name = null;
	
	if($selected_day == "Mon") 
	{ 
		$day_events = $_SESSION['day1_events'];
		$pie_name = "day1";
	}
	elseif($selected_day == "Tue") 
	{ 
		$day_events = $_SESSION['day2_events']; 
		$pie_name = "day2";
	}
	elseif($selected_day == "Wed") 
	{ 
		$day_events = $_SESSION['day3_events'];
		$pie_name = "day3"; 
	}
	elseif($selected_day == "Thu") 
	{ 
		$day_events = $_SESSION['day4_events'];
		$pie_name = "day4"; 
	}
	elseif($selected_day == "Fri") 
	{ 
		$day_events = $_SESSION['day5_events']; 
		$pie_name = "day5";
	}
	elseif($selected_day == "Sat") 
	{ 
		$day_events = $_SESSION['day6_events']; 
		$pie_name = "day6";
	}
	else 
	{ 
		$day_events = $_SESSION['day7_events']; 
		$pie_name = "day7";
	}
?>

<html lang="en">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
          <?php include 'imports.html'; ?>         
	  <title>Time Slice - Day View</title>
    <script type="text/javascript">
		$(document).bind("pagechange" ,function (event , ui){
			$('#calendar').fullCalendar({
			header: {
				left: 'prev, today',
				center: 'title',
				right: 'next'
			},
			editable: true,
			dayClick: function(date, allDay, jsEvent, view) {
				
				var d = date.getDate()
				if(d < 10){
					d = "0" + d;
				}	
				var m = date.getMonth() + 1;
				
				if(m < 10){
					m = "0" + m;

				}	
				
				var y = date.getFullYear();
					
       			 window.location = "main.php?selected_date=" + d + m + y;
				}
			});
			
			
			$("#eventForm").submit(function(){
				if($("#eName").val() == "clash"){
					
					$(this).simpledialog2({
					'mode' : 'button',
					'headerText' : 'Conflict detected. Resolve?',
					'useModal': true,
					'buttons' : {
					  'Resolve': {
						click: function () {
							confirm("resolver.php?" + "eStartDate=" + $("#eStartDate").val() + "&eEndDate=" + $("#eEndDate").val() + "&eStartTime=" + $("#eStartTime").val() + "&eEndTime=" + $("#eEndTime").val());
							$.mobile.changePage("resolver.php?" + "eStartDate=" + $("#eStartDate").val() + "&eEndDate=" + $("#eEndDate").val() + "&eStartTime=" + $("#eStartTime").val() + "&eEndTime=" + $("#eEndTime").val()); 
						}
					  },
					  'Ignore': {
						click: function () {
						  $.mobile.changePage("processAddEvent.php?eName=" + $("#eName").val() + "&eLocation=" + $("#eLocation").val() + "&category=" + $("#eCategory option:selected").val() + "&eStartDate=" + $("#eStartDate").val() + "&eStartTime=" + $("#eStartTime").val() + "&eEndTime=" + $("#eEndTime").val());
						},
						icon: "delete",
						theme: "c"
					  }
					}
				  });
				  return false;
				}else{
					return true;
				}
			});	
		});
	</script>
	</head>
	<body>
        <div data-role="page" style="background-color:white;text-align:center">
        <div data-role="header" data-position="fixed">
			<a href="index.php" data-icon="home">Home</a>
			<h1>Daily Slices</h1>
			<a href="settings.php" data-icon="gear" class="ui-btn-right">Settings</a>
		</div>
        <div data-role="content" style="background-color:white">
        	<div id="title_row">
        	 <?php print($selected_day);  ?>
				<a data-role="button" data-icon="arrow-l" href="main.php?selected_date=
<?php 
					$day = substr($selected_date, 0, 2);
					$month = substr($selected_date, 3, 2);
					$year = substr($selected_date, 6, 4);
					
					$new_day = (int)$day-1;

					print($new_day." ".$month." ".$year);
?>
				" style="width:40px;float:left"></a>
				<a data-role="button" data-icon="arrow-r" href="main.php?selected_date=
<?php 
					$day = substr($selected_date, 0, 2);
					$month = substr($selected_date, 3, 2);
					$year = substr($selected_date, 6, 4);
					
					$new_day = (int)$day+1;
					
					print($new_day." ".$month." ".$year);
?>
				" style="width:40px;float:right"></a>
				<div id="selected_date">
<?php 
					$day = substr($selected_date, 0, 2);
					$month = substr($selected_date, 3, 2);
					$year = substr($selected_date, 6, 4);
					
					print(date('d F Y', strtotime($day."-".$month."-".$year)));
?>	
				</div>
			</div>
			<img id="pie_chart" src="images/pie/<?php print($pie_name); ?>.jpg" alt="<?php print($pie_name); ?>" style="margin-left:auto;margin-right:auto;"/>
			
			<div data-role="collapsible-set" data-theme="a" style="text-align:left">
<?php

				$events = explode(";",$day_events);
				$array = array();
				for ($i=0; $i<sizeof($events); $i++)
				{
					$details = explode(",",$events[$i]);
				
					$time = explode(":",$details[3]);
					$period = substr($time[1],3);
					
					if($period == "PM" ){
						if($time[0] != "12"){
							$time[0] += 12;
							$time[0] = $time[0].substr($time[1],0,-2)+0;
						}else{
							$time[0] = $time[0].substr($time[1],0,-2)+0;
						}
					}else{
						$time[0] = $time[0].substr($time[1],0,-2) + 0;
					}
					
					$array[$time[0]] = $events[$i];
				}

				ksort($array);

				foreach($array as $key => $val)
				{
					$details = explode(",",$val);
					print("<div data-role='collapsible'>");
					print("<h3>" . $details[3] . " - " . $details[0] . "</h3>");
					print("<p>Location: " . $details[1] . "</p>");
					print("<p>Category: " . $details[2] . "</p>");
					print("<p>Start Time: " . $details[3] . "</p>");
					print("<p>End Time: " . $details[4] . "</p>");
					print("</div>");
				}
?>	
			</div>	
            </div><!-- /content -->
            
            <?php include 'footer.html'; ?>   
        </div><!-- /page -->
	</body>
</html>
