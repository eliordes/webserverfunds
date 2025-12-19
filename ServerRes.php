<!DOCTYPE html>
<html>
    <head>
        <title>PHP Response</title>
        <?php
            $Search_Term = htmlspecialchars($_POST['text1']); 
            $IP_Address = htmlspecialchars($_SERVER["REMOTE_ADDR"]);
            $server = "localhost";
            $username = "elior";
            $password = "blueberrypi5";
            $database = "logginginfo";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }

            $result = mysqli_query($conn, $sql);
        ?>
    </head>
    <body>
        <?php
            $sql = "INSERT INTO logginginfo (IP_Address, Search_Term) 
            VALUES ($IP_Address, '$Search_Term')";

            $result = mysqli_query($conn, $sql);

            echo $result ? "Success!" : "Failure: {mysqli_error($conn)}";

            mysqli_close($conn);
        ?>
    </body>
</html>