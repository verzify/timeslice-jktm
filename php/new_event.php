<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <?php include 'imports.html'; ?> 
        <title>Time Slice - New Event</title>

    </head>
    <body>
        <div data-role="page" style="background-color:white">

            <div data-role="header" data-position="fixed">
				<a href="index.php" data-icon="home">Home</a>
				<h1>New Event</h1>
				<a href="settings.php" data-icon="gear" class="ui-btn-right">Settings</a>
			</div>

            <div data-role="content" style="background-color:white">
                <div id="form">
                    <form id="eventForm" action="processAddEvent.php" method="GET">
                        <label for="eName">Event Name:</label>
                        <input type="text" name="eName" id="eName" required="required"/>

                        <label for="eLocation">Location:</label>
                        <input type="text" name="eLocation" id="eLocation" required="required"/>

                        <label for="eCategory" class="select">Category</label>
                        <select name="category" id="eCategory" >
                            <option value="Work">Work</option>
                            <option value="Play">Play</option>
                            <option value="School">School</option>
                            <option value="Home">Home</option>
                        </select>

                        <label for="eStartDate">Start Date</label>
                        <input type="date" name="eStartDate" id="eStartDate" data-role="datebox" data-options='{"mode": "calbox","overrideDateFormat": "%d %m %Y"}' value="<?php
        print(date('d n Y'));
        ?>"/>

                        <label for="eEndDate">End Date</label>
                        <input type="date" name="eEndDate" id="eEndDate" data-role="datebox" data-options='{"mode": "calbox","overrideDateFormat": "%d %m %Y"}' value="<?php
                               print(date('d n Y'));
        ?>"/>

                        <label for="eStartTime">Start Time</label>
                        <input type="date" name="eStartTime" id="eStartTime" data-role="datebox" 
                               data-options='{"mode": "timebox"}' value="<?php
                               print(date('h:i A'));
        ?>" required="required"/>

                        <label for="eEndTime">End Time</label>
                        <input type="date" name="eEndTime" id="eEndTime" data-role="datebox" 
                               data-options='{"mode": "timebox"}' value="<?php
                               print(date('h:i A', time() + 60 * 60));
        ?>" required="required"/>

                        <br/>
                        <fieldset class="ui-grid-a">
                            <div class="ui-block-a"><a href="main.php" data-role="button">Cancel</a></div>
                            <div id="submit" class="ui-block-b"><button type="submit" data-theme="a">Submit</button></div>
                        </fieldset>
                    </form>	
                </div>
                <a href="#resechdule" data-rel="dialog" >Open Popup</a>

			<div data-role="popup" id="clash">
				<h1>There is a clash!</h1>
					<button id="resolve" data-role="button">Resolve</button>
					<button id="ignore" data-role="button">Ignore</button>
			</div>


            </div><!-- /content -->
            <div data-role="footer" data-id="fool" data-position="fixed">
                <?php include 'footer.html'; ?> 
            </div><!-- /footer -->
        </div><!-- /page -->

        <div data-role="page" id="resechdule" data-add-back-btn="true" >
            <div data-role="header">
                <h1>Clash Resolver</h1>
            </div>
            <h3>Stored Event </h3>
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
                   print(date('h:i A'));
                ?>" required="required"/>

            <label for="sEndTime">End Time</label>
            <input data-mini="true" type="date" name="sEndTime" id="sEndTime" data-role="datebox" 
                   data-options='{"mode": "timebox"}' value="<?php
                   print(date('h:i A', time() + 60 * 60));
                ?>" required="required"/>
           
            <h3>New Event </h3>
            <label for="nStartDate">Start Date</label>
            <input data-mini="true" type="date" name="nStartDate" id="nStartDate" data-role="datebox" data-options='{"mode": "calbox","overrideDateFormat": "%d %m %Y"}' value="<?php
                   print(date('d n Y'));
                ?>"/>

            <label for="nEndDate">End Date</label>
            <input data-mini="true" type="date" name="nEndDate" id="nEndDate" data-role="datebox" data-options='{"mode": "calbox","overrideDateFormat": "%d %m %Y"}' value="<?php
                   print(date('d n Y'));
                ?>"/>

            <label for="nStartTime">Start Time</label>
            <input data-mini="true" type="date" name="nStartTime" id="nStartTime" data-role="datebox" 
                   data-options='{"mode": "timebox"}' value="<?php
                   print(date('h:i A'));
                ?>" required="required"/>

            <label for="nEndTime">End Time</label>
            <input data-mini="true" type="date" name="nEndTime" id="nEndTime" data-role="datebox" 
                   data-options='{"mode": "timebox"}' value="<?php
                   print(date('h:i A', time() + 60 * 60));
                ?>" required="required"/>
            
        </div>
    </body>
</html>
