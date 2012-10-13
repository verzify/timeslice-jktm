<html lang="en">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
          <?php include 'imports.html'; ?>         
	  <title>Time Slice - Day View</title>
          
	</head>
	<body>
        <div data-role="page" style="background-color:white">
            
    	<div id="top_banner"></div><!-- top banner -->
    	
        <div data-role="content" style="background-color:white">

			<div id="selected_date">
				<?php 
					if(!isset($_GET['selected_date']))
					{	
						print(date('d F Y'));	
					}
					else
					{
						$selected_date = (string)$_GET['selected_date'];
						$day = substr($selected_date, 0, 2);
						$month = substr($selected_date, 2, 2);
						$year = substr($selected_date, 4, 4);
						
						print(date('d F Y', strtotime($day."-".$month."-".$year)));
					}
				?>	
			</div>
			
			<img id="pie_chart" src="images/MainPagePie.jpg" alt="Pie Distribution" style="width:250px;height:250px"/>
			
			<div data-role="collapsible-set" data-theme="a">
				<div data-role="collapsible">
					<h3>3.30pm - IDP Class</h3>
					<p>IDP Lesson with interesting prof Ben</p>
				</div>	
				<div data-role="collapsible">
					<h3>6.45pm - Dinner with friends</h3>
					<p>Nice dinner with friends</p>
				</div>
				<div data-role="collapsible">
					<h3>9.00pm - Study IDP</h3>
					<p>Study hard for my IDP</p>
				</div>
				<div data-role="collapsible">
					<h3>11.00pm - Sleep</h3>
					<p>Time to ZZZZ</p>
				</div>
			</div>	
            </div><!-- /content -->
            
            <?php include 'footer.html'; ?>   
        </div><!-- /page -->
	</body>
</html>
