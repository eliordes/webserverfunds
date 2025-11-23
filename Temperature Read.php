<!DOCTYPE html>
<html>
    <head>
        <title>Read Temperature</title>
    </head>
    <body>
        <?php
            $raw = `./bme280`;
            echo $raw;
            $deserialized = json_decode($raw, true);
            var_dump($deserialized);
            echo "<p>Sensor: " . $deserialized["sensor"] . "</p>";
            echo "<p>Humidity: " . $deserialized["humidity"] . " %</p>";
            echo "<p>Pressure: " . $deserialized["pressure"] . " hPa</p>";
            echo "<p>Temperature: " . $deserialized["temperature"] . " °C</p>";
            echo "<p>Altitude: " . $deserialized["altitude"] . " m</p>";
            echo "<p>Timestamp: " . $deserialized["timestamp"] . "</p>";
        ?>
    </body>
</html>