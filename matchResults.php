<?php

    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "oakland";
    $dbname = "csiproject";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $custDomain = $_POST['custDomainH'];
        $custName = $_POST['custNameH'];

        $sqlGetCustID = "SELECT CustomerID FROM Customer WHERE CustName = '$custName'";
        $qGetCustIDResult = $conn->query($sqlGetCustID);

        if ($qGetCustIDResult->num_rows > 0) {
            while ($qGetCustIDResultRow = $qGetCustIDResult->fetch_assoc()) {
                $custID = $qGetCustIDResultRow['CustomerID'];
            }
        }

        $sqlGetDomainID = "SELECT DomainID from Domain WHERE DomainName = '$custDomain'";
        $qGetCustDomainResult = $conn->query($sqlGetDomainID);

        if ($qGetCustDomainResult->num_rows > 0) {
            while ($qGetCustDomainResultRow = $qGetCustDomainResult->fetch_assoc()) {
                $custDomainID = $qGetCustDomainResultRow['DomainID'];
            }
        }

        echo "<h1>Get Customer ID: ";
        echo $custID;
        echo "</h1>";

        echo "<h1>Customer Domain: ";
        echo $custDomain;
        echo "</h1>";

        if ($custDomain == 'Vehicles') {

            //Get Selected FeatureID
            $cpBodyStyleID = $_POST['BodyStyleID'];
            //Get Selected FeatureValue based on FeatureName
            $cpBodyStyle = $_POST['BodyStyle'];
            //Get Multiplyer
            $cpBodyStylePriority = $_POST['BodyStylePriority'];

            echo "<h1>Body Style ID: $cpBodyStyleID</h1>";
            echo "<h1>Body Style: $cpBodyStyle</h1>";
            echo "<h1>Priority: $cpBodyStylePriority</h1><br>";

            $cpColorID = $_POST['ColorID'];
            $cpColor = $_POST['Color'];
            $cpColorPriority = $_POST['ColorPriority'];

            echo "<h1>Color ID: $cpColorID</h1>";
            echo "<h1>Color: $cpColor</h1>";
            echo "<h1>Priority: $cpColorPriority</h1><br>";

            $cpEngineID = $_POST['EngineID'];
            $cpEngine = $_POST['Engine'];
            $cpEnginePriority = $_POST['EnginePriority'];

            echo "<h1>Engine ID: $cpEngineID</h1>";
            echo "<h1>Engine: $cpEngine </h1>";
            echo "<h1>Priority: $cpEnginePriority</h1><br>";

            $cpTransmissionID = $_POST['TransmissionID'];
            $cpTransmission = $_POST['Transmission'];
            $cpTransmissionPriority = $_POST["TransmissionPriority"];

            echo "<h1>Trans ID: $cpTransmissionID</h1>";
            echo "<h1>Trans: $cpTransmission </h1>";
            echo "<h1>Priority: $cpTransmissionPriority</h1><br>";

            $cpDriveID = $_POST['DriveID'];
            $cpDrive = $_POST['Drive'];
            $cpDrivePriority = $_POST["DrivePriority"];

            echo "<h1>Drive ID: $cpDriveID</h1>";
            echo "<h1>Drive: $cpDrive</h1>";
            echo "<h1>Priority: $cpDrivePriority</h1><br>";

            $sqlInsertCustProfileBody = "INSERT INTO CustProfile (CustomerID, DomainID, FeatureID, DesiredFeatureValue, DesiredFeatureValueName, Multiplier) VALUES ($custID, $custDomainID, $cpBodyStyleID, NULL, '$cpBodyStyle', $cpBodyStylePriority)";
            if ($conn->query($sqlInsertCustProfileBody) === TRUE) {
                echo "Body Insert Successful";
            } else {
                echo "error: " . $sqlInsertCustProfileBody . "<br>" . $conn->error;
            }

            $sqlInsertCustProfileColor = "INSERT INTO CustProfile (CustomerID, DomainID, FeatureID, DesiredFeatureValue, DesiredFeatureValueName, Multiplier) VALUES ($custID, $custDomainID, $cpColorID, NULL, '$cpColor', $cpColorPriority)";
            if ($conn->query($sqlInsertCustProfileColor) === TRUE) {
                echo "Color Insert Successful";
            } else {
                echo "error: " . $sqlInsertCustProfileColor . "<br>" . $conn->error;
            }

            $sqlInsertCustProfileEngine = "INSERT INTO CustProfile (CustomerID, DomainID, FeatureID, DesiredFeatureValue, DesiredFeatureValueName, Multiplier) VALUES ($custID, $custDomainID, $cpEngineID, NULL, '$cpEngine', $cpEnginePriority)";
            if ($conn->query($sqlInsertCustProfileEngine) === TRUE) {
                echo "Engine Insert Successful";
            } else {
                echo "error: " . $sqlInsertCustProfileEngine . "<br>" . $conn->error;
            }

            $sqlInsertCustProfileTrans = "INSERT INTO CustProfile (CustomerID, DomainID, FeatureID, DesiredFeatureValue, DesiredFeatureValueName, Multiplier) VALUES ($custID, $custDomainID, $cpTransmissionID, NULL, '$cpTransmission', $cpTransmissionPriority)";
            if ($conn->query($sqlInsertCustProfileTrans) === TRUE) {
                echo "Trans Insert Successful";
            } else {
                echo "error: " . $sqlInsertCustProfileTrans . "<br>" . $conn->error;
            }

            $sqlInsertCustProfileDrive = "INSERT INTO CustProfile (CustomerID, DomainID, FeatureID, DesiredFeatureValue, DesiredFeatureValueName, Multiplier) VALUES ($custID, $custDomainID, $cpDriveID, NULL, '$cpDrive', $cpDrivePriority)";
            if ($conn->query($sqlInsertCustProfileDrive) === TRUE) {
                echo "Trans Insert Successful";
            } else {
                echo "error: " . $sqlInsertCustProfileDrive . "<br>" . $conn->error;
            }


            //Drop StockPoints Table -- Reference: https://www.w3schools.com/php/php_mysql_delete.asp
            $sqlDropStockPoints = "DROP TABLE IF EXISTS StockPoints";
            if ($conn->query($sqlDropStockPoints) === TRUE) {
                echo "<h2>StockPoints Deleted Successfully</h2>";
            } else {
                echo "Error Deleting Record: " . $conn->error;
            }

            $sqlCreateStockPoints = "Create Table StockPoints
	                                    (Select S.DomainID, C.CustomerID, S.StockNum, S.StockDesc, 
	                                    S.FeatureID, S.StockFeatureValue, S.FeatureName, S.DisplayOrder, S.FeatureValue,
	                                    S.CustSelectedValue, S.StockConfigValue, S.AffinityPoints, DesiredFeatureValue, Multiplier, (AffinityPoints * Multiplier) as WeightedAffinityPoints
                                        from StockAffinity S join CustProfile C 
                                        on S.CustSelectedValue = C.DesiredFeatureValue and
                                        S.DomainID = '$custDomainID' and CustomerID = '$custID') order by stocknum, featureID";

            if ($conn->query($sqlCreateStockPoints) === TRUE) {
                echo "<h2> Create Stock Points Success! </h2>";
            } else {
                echo "Error Creating Stock Points Record: " . $conn->error;
            }

            $sqlDropStockMatch = "DROP TABLE IF EXISTS StockMatch";
            if ($conn->query($sqlDropStockMatch) === TRUE) {
                echo "<h2>StockMatch Deleted Successfully</h2>";
            } else {
                echo "Error Deleting Record: " . $conn->error;
            }

            $sqlCreateStockMatch = "Create Table StockMatch
                                    Select DomainID, CustomerID, StockNum, StockDesc, sum(WeightedAffinityPoints) as TotalPoints
	                                from  StockPoints
                                    Group by StockNum
                                    order by TotalPoints DESC";
            if ($conn->query($sqlCreateStockMatch) === TRUE) {
                echo "<h2> Create Stock Match Success! </h2>";
            } else {
                echo "Error Creating Stock Match Record: " . $conn->error;
            }

            $sqlDeleteCustMatch = "DELETE FROM CustMatch WHERE DomainID = '$custDomainID' AND CustomerID = '$custID'";
            if ($conn->query($sqlDeleteCustMatch) === TRUE) {
                echo "<h2>CustMatch Deleted For Existing Customer Successfully</h2>";
            } else {
                echo "Error Deleting Record: " . $conn->error;
            }

            $sqlInsertUpdatedCustomerMatch = "INSERT INTO CustMatch SELECT CustomerID, DomainID, StockNum, TotalPoints FROM StockMatch";
            if ($conn->query($sqlInsertUpdatedCustomerMatch) === TRUE) {
                echo "<h2> Insert Customer Match FINAL Query Success! </h2>";
            } else {
                echo "Error Inserting into Customer Match Record: " . $conn->error;
            }


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