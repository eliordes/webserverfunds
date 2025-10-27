<!DOCTYPE html>
<html>
    <head>
        <title>SQL test</title>
        <?php
            // Retrieve submitted information
            $searchstring = htmlspecialchars($_GET['string']); 
            $server = "localhost";
            $username = "elior";
            $password = "blueberrypi5";
            $database = "MyTopShows";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            // Check for successful connection
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "SELECT TV_Serie, Main_Actor, Genre, Seasons, Year FROM MyTopShows
                WHERE TV_Serie = '{$searchstring}'
                OR Main_Actor = '{$searchstring}'
                OR Genre = '{$searchstring}'
                OR Seasons = '{$searchstring}'
                OR Year = '{$searchstring}'";

            $result = mysqli_query($conn, $sql);
        ?>
    </head>
    <body>
        You selected <?= $searchstring ?>.<br/>
        <?php
            foreach($result as $row) // There should only be one row returned!
            {
                echo "TV_Series: {$row['TV_Serie']} | Main_Actor: {$row['Main_Actor']} | Genre: {$row['Genre']} | Seasons: {$row['Seasons']} | Year: {$row['Year']}"; 
            }
            // Don't forget to close the connection!
            mysqli_close($conn);
        ?>
    </body>
</html>