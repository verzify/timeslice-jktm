﻿<html lang="en">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
          <?php include 'imports.html'; ?>         
	  <title>Time Slice - Month View</title>  
	</head>
	<body>
        <div data-role="page" style="background-color:white">
            
           	<div data-role="header" data-position="fixed">
				<a href="index.php" data-icon="home">Home</a>
				<h1>Monthly Slices</h1>
				<a href="settings.php" data-icon="gear" class="ui-btn-right">Options</a>
			</div>
   
           	<div data-role="content" style="background-color:white">
				<div id='calendar'></div>
            </div><!-- /content -->
            
            <?php include 'footer.html'; ?>   
        </div><!-- /page -->

	</body>
</html>
