<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <?php include 'imports.html'; ?> 
        <title>Time Slice - Resolver</title>

    </head>
    <body>

<div data-role="dialog" id="resechdule" data-add-back-btn="true" >

			<?php
				session_start();
				
				if (isset($_GET['eStartDate']))
				{
					$eStartDate = $_GET['eStartDate'];
					$eEndDate = $_GET['eEndDate'];
					$eStartTime = $_GET['eStartTime'];
					$eEndTime = $_GET['eEndTime'];
				}
			?>	
            <div data-role="header">
                <h1>Clash Resolver </h1>
            </div>
			<form action="resolve_event.php" method="GET">
            <h3>Stored Event - <?php echo "Judo Practice" ?> </h3>
			<input type="hidden" value="<?php echo $_GET['eName'] ?>" name="eName"/>
			<input type="hidden" value="<?php echo $_GET['eLocation'] ?>" name="eLocation"/>
			<input type="hidden" value="<?php echo $_GET['category'] ?>" name="category"/>
			
            <label for="sStartDate">Start Date</label>
            <input data-mini="true" type="date" name="sStartDate" id="sStartDate" data-role="datebox" data-options='{"mode": "calbox","overrideDateFormat": "%d %m %Y"}' value="<?php
                print(date('d n Y'));
                ?>"/>

            <label for="sEndDate">End Date</label>
            <input data-mini="true" type="date" name="sEndDate" id="sEndDate" data-role="datebox" data-options='{"mode": "calbox","overrideDateFormat": "%d %m %Y"}' value="<?php
                   print(date('d n Y'));
                ?>"/>

            <label for="sStartTime">Start Time</label>
            <input data-mini="true" type="date" name="sStartTime" id="sStartTime" data-role="datebox" 
                   data-options='{"mode": "timebox"}' value="<?php
                   print("12:00 PM");
                ?>" required="required"/>

            <label for="sEndTime">End Time</label>
            <input data-mini="true" type="date" name="sEndTime" id="sEndTime" data-role="datebox" 
                   data-options='{"mode": "timebox"}' value="<?php
                   print("3:30 PM");
                ?>" required="required"/>
           
            <h3>New Event - <?php echo $_GET['eName'] ?></h3>
            <label for="nStartDate">Start Date</label>
            <input data-mini="true" type="date" name="nStartDate" id="nStartDate" data-role="datebox" data-options='{"mode": "calbox","overrideDateFormat": "%d %m %Y"}' value="<?php
                   echo $eStartDate;
                ?>"/>

            <label for="nEndDate">End Date</label>
            <input data-mini="true" type="date" name="nEndDate" id="nEndDate" data-role="datebox" data-options='{"mode": "calbox","overrideDateFormat": "%d %m %Y"}' value="<?php
                   echo $eEndDate;
                ?>"/>

            <label for="nStartTime">Start Time</label>
            <input data-mini="true" type="date" name="nStartTime" id="nStartTime" data-role="datebox" 
                   data-options='{"mode": "timebox"}' value="<?php
                   echo $eStartTime;
                ?>" required="required"/>

            <label for="nEndTime">End Time</label>
            <input data-mini="true" type="date" name="nEndTime" id="nEndTime" data-role="datebox" 
                   data-options='{"mode": "timebox"}' value="<?php
                   echo $eEndTime;
                ?>" required="required"/>
			
			<input type="submit" name="submit" value="Resolve"/>
			</form>
        </div>
		
</body>
</html>		