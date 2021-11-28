<?php

    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "oakland";
    $dbname = "csiproject";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $custDomain = $_POST['custDomainH'];
        echo "<h1>Customer Domain: ";
        echo $custDomain;
        echo "</h1>";

        if ($custDomain == 'Vehicles') {
            $cpBodyStyle = $_POST['BodyStyle'];
            $cpBodyStylePriority = $_POST['BodyStylePriority'];

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
        } elseif ($custDomain == 'Homes') {
            $cpHomeStyle = $_POST['HomeStyle'];
            $cpHomeStylePriority = $_POST['HomeStylePriority'];

            $cpNumBedrooms = $_POST['NumBedrooms'];
            $cpNumBedroomsPriority = $_POST['NumBedroomsPriority'];

            $cpSchoolSystem = $_POST['SchoolSystem'];
            $cpSchoolSystemPriority = $_POST['SchoolSystemPriority'];

            $cpLotType = $_POST['LotType'];
            $cpLotTypePriority = $_POST["LotTypePriority"];

            echo "<h1>Home Style: $cpHomeStyle</h1>";
            echo "<h1>Priority: $cpHomeStylePriority</h1><br>";

            echo "<h1>Number of Bedrooms: $cpNumBedrooms</h1>";
            echo "<h1>Priority: $cpNumBedroomsPriority</h1><br>";

            echo "<h1>School System: $cpSchoolSystem </h1>";
            echo "<h1>Priority: $cpSchoolSystemPriority</h1><br>";

            echo "<h1>Lot Type: $cpLotType </h1>";
            echo "<h1>Priority: $cpLotTypePriority</h1><br>";

        } elseif ($custDomain == 'Mates') {
            $cpAge = $_POST['Age'];
            $cpAgePriority = $_POST['AgePriority'];

            $cpEducation = $_POST['Education'];
            $cpEducationPriority = $_POST['EducationPriority'];

            $cpHobby = $_POST['Hobby'];
            $cpHobbyPriority = $_POST['HobbyPriority'];

            echo "<h1>Age: $cpAge</h1>";
            echo "<h1>Priority: $cpAgePriority</h1><br>";

            echo "<h1>Education: $cpEducation</h1>";
            echo "<h1>Priority: $cpEducationPriority</h1><br>";

            echo "<h1>Hobby: $cpHobby </h1>";
            echo "<h1>Priority: $cpHobbyPriority</h1><br>";

        } else {
            echo "<h1>Invalid Domain ID</h1>";
        }

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