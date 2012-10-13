<!doctype html>
<html lang="en">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
          <link rel="stylesheet" href="themes/idp.min.css" />
          <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile.structure-1.1.1.min.css" />
          <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
          <script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>          
	  <title>Time Slice - New Event</title>
          
	</head>
	<body>
        <div data-role="page" style="background-color:white">
            
	    	<div id="top_banner"></div><!-- top banner -->
				
	        <div data-role="content" style="background-color:white">
				<div id="form">
					<label for="basic">Event Name:</label>
					<input type="text" name="name" id="basic" data-mini="true" />
					
					<label for="basic">Event Name:</label>
					<input type="text" name="name" id="basic" data-mini="true" />
					
					<label for="category" class="select">Category</label>
					<select name="category" id="select-choice-0">
					   <option value="Work">Work</option>
					   <option value="Play">Play</option>
					   <option value="School">School</option>
					   <option value="Home">Home</option>
					</select>
				</div>
	        </div><!-- /content -->
            <div data-role="footer" data-id="fool" data-position="fixed">
				
            	<div data-role="navbar">
					<ul>
						<li><a href="main.php" data-role="button" >Day</a></li>
						<li><a href="week_view.html" data-role="button" >Week</a></li>
						<li><a href="new_event.html" data-role="button" >+</a></li>
						<li><a href="month_view.html" data-role="button" data-ajax="false" >Month</a></li>
						<li><a href="settings.html" data-role="button" >Settings</a></li>
					</ul>
				</div>
            </div>
        </div><!-- /page -->

	</body>
</html>
