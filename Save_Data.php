<!DOCTYPE html>
<html>
    <head>
        <title>Update Database</title>
        <?php
        $server = "localhost";
        $username = "elior";
        $password = "blueberrypi5";
        $database = "MyTopShows";
        $conn = mysqli_connect ($server, $username, $password, $database);

        // Check for successful connection 
        if (!$conn) {
            die("Connection failed: {mysqli_connect_error () }");
        }
        $sql = "select * from MyTopShows;";
        $result = mysqli_query ($conn, $sql);
        ?>
    <head>
    <body>
        <?php
            $tv_serie = htmlspecialchars($_POST['TVSerie']);
            $main_actor = htmlspecialchars($_POST['MainActor']);
            $genre = htmlspecialchars($_POST['Genre']);
            $seasons = htmlspecialchars($_POST['Seasons']);
            $year = htmlspecialchars($_POST['Year']);

            $sql = "INSERT INTO MyTopShows (TV_Serie, Main_Actor, Genre, Seasons, Year) 
            VALUES ('$tv_serie', '$main_actor', '$genre', $seasons, $year)";

            $result = mysqli_query($conn, $sql);

            echo $result ? "Success!" : "Failure: {mysqli_error($conn)}";

            mysqli_close($conn);
        ?>
    </body>
</html>