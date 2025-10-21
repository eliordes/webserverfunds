<!DOCTYPE html>
<html>
    <head>
        <title>SQL test</title>
        <?php
            // Retrieve submitted information
            $Main_Actor = htmlspecialchars($_GET["courses"]); 
            $server = "localhost";
            $username = "elior";
            $password = "blueberrypi5";
            $database = "MyTopShows";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            // Check for successful connection
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "select TV serie, genre, seasons, and year from MyTopShows where main actor='{$Main_Actor}';";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>
    <body>
        You selected main actor <?= $Main_Actor ?>.<br/>
        <?php
            foreach($result as $row) // There should only be one row returned!
            {
                echo "row: {$row[‘TVSerieID’]} has TV serie: {$row[‘TV_Serie’]}, seasons: {$row[‘Seasons’]}, year: {$row[‘Year’]}"; 
            }
            // Don't forget to close the connection!
            mysqli_close($conn);
        ?>
    </body>
</html>