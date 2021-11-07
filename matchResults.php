<?php

    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "oakland";
    $dbname = "csiproject";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $cpBodyStyle = $_POST['Body+Style'];
        $cpBodyStylePriority = $_POST['Body+StylePriority'];

        $cpColor = $_POST['Color'];
        $cpColorPriority = $_POST['ColorPriority'];

        $cpEngine = $_POST['Engine'];
        $cpEnginePriority = $_POST['EnginePriority'];

        $cpTransmission = $_POST['Transmission'];
        $cpTransmissionPriority = $_POST["TransmissionPriority"];

        $cpDrive = $_POST['Drive'];
        $cpDrivePriority = $_POST["DrivePriority"];

        echo "<h1>Body Style: $cpBodyStyle</h1>";
        echo "<h1>Priority: $cpBodyStylePriority</h1><br>";

        echo "<h1>Color: $cpColor</h1>";
        echo "<h1>Priority: $cpColorPriority</h1><br>";

        echo "<h1>Engine: $cpEngine </h1>";
        echo "<h1>Priority: $cpEnginePriority</h1><br>";

        echo "<h1>Trans: $cpTransmission </h1>";
        echo "<h1>Priority: $cpTransmissionPriority</h1><br>";

        echo "<h1>Drive: $cpDrive</h1>";
        echo "<h1>Priority: $cpDrivePriority</h1><br>";

        $custDomain = $_POST['selectCustDomainIn'];
        echo "<h1>Customer Domain: ";
        echo $custDomain;
        echo "</h1>";
    }
    else {
        echo 'No data found or errors';
    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>