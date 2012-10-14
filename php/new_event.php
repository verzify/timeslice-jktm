<!doctype html>
<html lang="en">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
          <?php include 'imports.html'; ?> 
	  <title>Time Slice - New Event</title>
          
	</head>
	<body>
        <div data-role="page" style="background-color:white">
            
	    	<div id="top_banner"></div><!-- top banner -->
				
	        <div data-role="content" style="background-color:white">
				<div id="form">
					<label for="eName">Event Name:</label>
					<input type="text" name="eName" id="eName"/>
					
					<label for="eLocation">Location:</label>
					<input type="text" name="eLocation" id="eLocation" />
					
					<label for="eCategory" class="select">Category</label>
					<select name="category" id="eCategory">
					   <option value="Work">Work</option>
					   <option value="Play">Play</option>
					   <option value="School">School</option>
					   <option value="Home">Home</option>
					</select>
					
					<label for="eDate">Date</label>
					<input type="date" name="eDate" id="eDate" data-role="datebox" data-options='{"mode": "calbox"}'/>
					
					<label for="eStartTime">Start Time</label>
					<input type="date" name="eStartTime" id="eStartTime" data-role="datebox" 
					data-options='{"mode": "timebox"}'/>
					
					<label for="eEndTime">End Time</label>
					<input type="date" name="eEndTime" id="eEndTime" data-role="datebox" 
					data-options='{"mode": "timebox"}'/>
				</div>
	        </div><!-- /content -->
            <div data-role="footer" data-id="fool" data-position="fixed">
				
            	<?php include 'footer.html'; ?> 
            </div>
        </div><!-- /page -->

	</body>
</html>
