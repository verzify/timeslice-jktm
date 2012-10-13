<html lang="en">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
          <?php include 'imports.html'; ?>         
	  <title>Time Slice - Month View</title>
      <script type='text/javascript'>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title'
			},
			editable: true,
			dayClick: function(date, allDay, jsEvent, view) {
				
				var day = date.getDate()
				if(day < 10){
					day = "0" + day;
				}	
				var month = date.getMonth() + 1;
				var year = date.getFullYear();
       			 window.location = "main.php?selected_date=" + day + month + year;
    		}
		});
		
	});

</script>  
	</head>
	<body>
        <div data-role="page" style="background-color:white">
            
           	<div id="top_banner"></div><!-- top banner --> 
           	           
           	<div data-role="content" style="background-color:white">
				<div id='calendar'></div>
            </div><!-- /content -->
            
            <?php include 'footer.html'; ?>   
        </div><!-- /page -->

	</body>
</html>
