<?php
	
	if (!isset($_GET['selected_date']))
	{
		$selected_date = date('d m Y');
	}
	else
	{
		$selected_date = (string)$_GET['selected_date'];
	}
	
	$day = substr($selected_date, 0, 2);
	$month = substr($selected_date, 3, 2);
	$year = substr($selected_date, 6, 4);

	$new_day = $day + 6;

	$end_date = $new_day." ".$month." ".$year;
	
?>

<html lang="en">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
      <?php include 'imports.html'; ?>        
	  <title>Time Slice - Week View</title>
          
	  </head>
	<body style="background-color:white">
        <div data-role="page" style="background-color:white;text-align:center">
	        <div data-role="header" data-position="fixed">
				<a href="index.php" data-icon="home">Home</a>
				<h1>Weekly Slices</h1>
				<a href="settings.php" data-icon="gear" class="ui-btn-right">Settings</a>
			</div>
			<div data-role="content" style="background-color:white">
				<div id="title_row" style="background-color:white">
				<?php print("Viewing Days");  ?>
					<a data-role="button" data-icon="arrow-l" href="week_view.php?selected_date=
<?php 
						$day = substr($selected_date, 0, 2);
						$month = substr($selected_date, 3, 2);
						$year = substr($selected_date, 6, 4);
						
						$new_day = (int)$day-7;
	
						print($new_day." ".$month." ".$year);
?>
					" style="width:40px;float:left"></a>
					<a data-role="button" data-icon="arrow-r" href="week_view.php?selected_date=
<?php 
						$day = substr($selected_date, 0, 2);
						$month = substr($selected_date, 3, 2);
						$year = substr($selected_date, 6, 4);
						
						$new_day = (int)$day+7;
						
						print($new_day." ".$month." ".$year);
?>
					" style="width:40px;float:right"></a>
					<div id="selected_date">
<?php 
						$start_day = substr($selected_date, 0, 2);
						$start_month = substr($selected_date, 3, 2);
						$start_year = substr($selected_date, 6, 4);
						
						$end_day = substr($end_date, 0, 2);
						$end_month = substr($end_date, 3, 2);
						$end_year = substr($end_date, 6, 4);
						
						$start = date('d M', strtotime($start_day."-".$start_month."-".$start_year));
						$end = date('d M', strtotime($end_day."-".$end_month."-".$end_year));
						
						print($start . " - " . $end);
?>	
					</div>
				</div>

	        
				<div id="weekly_content" style="text-align:center;background-color:white">
<?php 

					for ($i=0; $i<7; $i++)
					{
						$day = substr($selected_date, 0, 2);
						$month = substr($selected_date, 3, 2);
						$year = substr($selected_date, 6, 4);
					
						$new_day = $day + $i;
					
						$new_link_date = $new_day." ".$month." ".$year;
						$new_display_date = date('d M Y', strtotime($new_day."-".$month."-".$year));
						$new_day = date('D', strtotime($new_day."-".$month."-".$year));
						
						if($new_day == "Mon") { $pie_name = "day1"; }
						elseif($new_day == "Tue") { $pie_name = "day2"; }
						elseif($new_day == "Wed") { $pie_name = "day3"; }
						elseif($new_day == "Thu") { $pie_name = "day4"; }
						elseif($new_day == "Fri") { $pie_name = "day5"; }
						elseif($new_day == "Sat") { $pie_name = "day6"; }
						else { $pie_name = "day7";}

						print("<a href='main.php?selected_date=" . $new_link_date . "'>");
						print($new_day . " " . $new_display_date);
						print("<img src='images/pie/" . $pie_name . ".jpg' style='width:100%;height:auto'/>");
						print("</a>");
					}
?>
				</div>
	        </div><!-- /content -->
            <?php include 'footer.html'; ?>   
        </div><!-- /page -->
	</body>
</html>
