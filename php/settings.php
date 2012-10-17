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
				<a href="settings.php" data-icon="gear" class="ui-btn-right">Options</a>
			</div>

            <div data-role="content" style="background-color:white">
                <div id="form">
                    <form id="eventForm" action="processEditSettings.php" method="GET">
                        <label for="eName">Sleeping Hours</label>
                        <input type="text" name="sleephours" id="sleephours" required="required" value="8"/>

                        <fieldset class="ui-grid-a">
                            <div class="ui-block-a"><a href="main.php" data-role="button">Cancel</a></div>
                            <div id="submit" class="ui-block-b"><button type="submit" data-theme="a">Edit</button></div>
                        </fieldset>
                    </form>	
                </div>
            </div><!-- /content -->
            <div data-role="footer" data-id="fool" data-position="fixed">
                <?php include 'footer.html'; ?> 
            </div><!-- /footer -->
        </div><!-- /page -->
    </body>
</html>
