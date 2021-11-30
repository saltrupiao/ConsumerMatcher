<?php

    //Echo HTML Starting Tags
    echo '<!DOCTYPE html>
            <html lang="en">
            <meta charset="UTF-8">
            <title>Matching Results</title>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
            <style>
            </style>
            <script src=""></script>
            <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="index.php">Consumer Matching Engine</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="newcust.php">Enter CME</a>
                        <a class="nav-link" href="index.php">About CME</a>
                    </div>
                </div>
            </nav><br><div class="container">';


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

        /* Echo Debug Statements for Customer ID and Customer Domain
        echo "<h1>Get Customer ID: ";
        echo $custID;
        echo "</h1>";

        echo "<h1>Customer Domain: ";
        echo $custDomain;
        echo "</h1>";
       */

        // ******************************* VEHICLES *******************************
        if ($custDomain == 'Vehicles') {

            //Get Selected FeatureID
            $cpBodyStyleID = $_POST['BodyStyleID'];
            //Get Selected FeatureValue based on FeatureName
            $cpBodyStyle = $_POST['BodyStyle'];
            //Get Multiplyer
            $cpBodyStylePriority = $_POST['BodyStylePriority'];
            /* Debug Statements
            echo "<h1>Body Style ID: $cpBodyStyleID</h1>";
            echo "<h1>Body Style: $cpBodyStyle</h1>";
            echo "<h1>Priority: $cpBodyStylePriority</h1><br>";
            */

            $cpColorID = $_POST['ColorID'];
            $cpColor = $_POST['Color'];
            $cpColorPriority = $_POST['ColorPriority'];
            /* Debug Statements
            echo "<h1>Color ID: $cpColorID</h1>";
            echo "<h1>Color: $cpColor</h1>";
            echo "<h1>Priority: $cpColorPriority</h1><br>";
            */

            $cpEngineID = $_POST['EngineID'];
            $cpEngine = $_POST['Engine'];
            $cpEnginePriority = $_POST['EnginePriority'];
            /* Debug Statements
            echo "<h1>Engine ID: $cpEngineID</h1>";
            echo "<h1>Engine: $cpEngine </h1>";
            echo "<h1>Priority: $cpEnginePriority</h1><br>";
            */

            $cpTransmissionID = $_POST['TransmissionID'];
            $cpTransmission = $_POST['Transmission'];
            $cpTransmissionPriority = $_POST["TransmissionPriority"];
            /* Debug Statements
            echo "<h1>Trans ID: $cpTransmissionID</h1>";
            echo "<h1>Trans: $cpTransmission </h1>";
            echo "<h1>Priority: $cpTransmissionPriority</h1><br>";
            */

            $cpDriveID = $_POST['DriveID'];
            $cpDrive = $_POST['Drive'];
            $cpDrivePriority = $_POST["DrivePriority"];
            /* Debug Statements
            echo "<h1>Drive ID: $cpDriveID</h1>";
            echo "<h1>Drive: $cpDrive</h1>";
            echo "<h1>Priority: $cpDrivePriority</h1><br>";
            */

            $sqlInsertCustProfileBody = "INSERT INTO CustProfile (CustomerID, DomainID, FeatureID, DesiredFeatureValue, DesiredFeatureValueName, Multiplier) VALUES ($custID, $custDomainID, $cpBodyStyleID, NULL, '$cpBodyStyle', $cpBodyStylePriority)";
            if ($conn->query($sqlInsertCustProfileBody) === TRUE) {
                //echo "Body Insert Successful";
            } else {
                echo "error: " . $sqlInsertCustProfileBody . "<br>" . $conn->error;
            }

            $sqlInsertCustProfileColor = "INSERT INTO CustProfile (CustomerID, DomainID, FeatureID, DesiredFeatureValue, DesiredFeatureValueName, Multiplier) VALUES ($custID, $custDomainID, $cpColorID, NULL, '$cpColor', $cpColorPriority)";
            if ($conn->query($sqlInsertCustProfileColor) === TRUE) {
                //echo "Color Insert Successful";
            } else {
                echo "error: " . $sqlInsertCustProfileColor . "<br>" . $conn->error;
            }

            $sqlInsertCustProfileEngine = "INSERT INTO CustProfile (CustomerID, DomainID, FeatureID, DesiredFeatureValue, DesiredFeatureValueName, Multiplier) VALUES ($custID, $custDomainID, $cpEngineID, NULL, '$cpEngine', $cpEnginePriority)";
            if ($conn->query($sqlInsertCustProfileEngine) === TRUE) {
                //echo "Engine Insert Successful";
            } else {
                echo "error: " . $sqlInsertCustProfileEngine . "<br>" . $conn->error;
            }

            $sqlInsertCustProfileTrans = "INSERT INTO CustProfile (CustomerID, DomainID, FeatureID, DesiredFeatureValue, DesiredFeatureValueName, Multiplier) VALUES ($custID, $custDomainID, $cpTransmissionID, NULL, '$cpTransmission', $cpTransmissionPriority)";
            if ($conn->query($sqlInsertCustProfileTrans) === TRUE) {
                //echo "Trans Insert Successful";
            } else {
                echo "error: " . $sqlInsertCustProfileTrans . "<br>" . $conn->error;
            }

            $sqlInsertCustProfileDrive = "INSERT INTO CustProfile (CustomerID, DomainID, FeatureID, DesiredFeatureValue, DesiredFeatureValueName, Multiplier) VALUES ($custID, $custDomainID, $cpDriveID, NULL, '$cpDrive', $cpDrivePriority)";
            if ($conn->query($sqlInsertCustProfileDrive) === TRUE) {
                //echo "Trans Insert Successful";
            } else {
                echo "error: " . $sqlInsertCustProfileDrive . "<br>" . $conn->error;
            }


            //Drop StockPoints Table -- Reference: https://www.w3schools.com/php/php_mysql_delete.asp
            $sqlDropStockPoints = "DROP TABLE IF EXISTS StockPoints";
            if ($conn->query($sqlDropStockPoints) === TRUE) {
                //echo "<h2>StockPoints Deleted Successfully</h2>";
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
                //echo "<h2> Create Stock Points Success! </h2>";
            } else {
                echo "Error Creating Stock Points Record: " . $conn->error;
            }

            $sqlDropStockMatch = "DROP TABLE IF EXISTS StockMatch";
            if ($conn->query($sqlDropStockMatch) === TRUE) {
                //echo "<h2>StockMatch Deleted Successfully</h2>";
            } else {
                echo "Error Deleting Record: " . $conn->error;
            }

            $sqlCreateStockMatch = "Create Table StockMatch
                                    Select DomainID, CustomerID, StockNum, StockDesc, sum(WeightedAffinityPoints) as TotalPoints
	                                from  StockPoints
                                    Group by StockNum
                                    order by TotalPoints DESC";
            if ($conn->query($sqlCreateStockMatch) === TRUE) {
                //echo "<h2> Create Stock Match Success! </h2>";
            } else {
                echo "Error Creating Stock Match Record: " . $conn->error;
            }

            $sqlDeleteCustMatch = "DELETE FROM CustMatch WHERE DomainID = '$custDomainID' AND CustomerID = '$custID'";
            if ($conn->query($sqlDeleteCustMatch) === TRUE) {
                //echo "<h2>CustMatch Deleted For Existing Customer Successfully</h2>";
            } else {
                echo "Error Deleting Record: " . $conn->error;
            }

            $sqlInsertUpdatedCustomerMatch = "INSERT INTO CustMatch SELECT CustomerID, DomainID, StockNum, StockDesc, TotalPoints FROM StockMatch";
            if ($conn->query($sqlInsertUpdatedCustomerMatch) === TRUE) {
                //echo "<h2> Insert Customer Match FINAL Query Success! </h2>";
            } else {
                echo "Error Inserting into Customer Match Record: " . $conn->error;
            }

            $sqlDisplayMatchResults = "SELECT StockNum, StockDesc, TotalPoints FROM StockMatch";
            $qDisplayMatchResults = $conn->query($sqlDisplayMatchResults);

            if ($qDisplayMatchResults->num_rows > 0) {
                echo "<h2>" . $custName . ", Your Results Are In!</h2>";
                echo "<table class='table table-striped'>";
                echo "<thead><tr>";
                echo "<th scope='col'>Stock Number</th>";
                echo "<th scope='col'>Car</th>";
                echo "<th scope='col'>Total Points</th>";
                echo "</tr></thead>";
                echo "<tbody>";
                while ($qDisplayMatchResultsRow = $qDisplayMatchResults->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $qDisplayMatchResultsRow['StockNum'] . "</td>";
                    echo "<td>" . $qDisplayMatchResultsRow['StockDesc'] . "</td>";
                    echo "<td>" . $qDisplayMatchResultsRow['TotalPoints'] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody></table>";
                echo "<br><br><br><br><div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>Thank you for using the Consumer Matching Engine!</h5>
                            <p class='card-text'>To reset the CME and perform another match calculation please click the button below:</p>
                            <a href='newcust.php' class='btn btn-primary'>Restart the CME</a>
                        </div>
                        </div>";
            }

        // ******************************* HOMES *******************************
        } elseif ($custDomain == 'Homes') {
            $cpHomeStyleID = $_POST['HomeStyleID'];
            $cpHomeStyle = $_POST['HomeStyle'];
            $cpHomeStylePriority = $_POST['HomeStylePriority'];

            $cpNumBedroomsID = $_POST['NumBedroomsID'];
            $cpNumBedrooms = $_POST['NumBedrooms'];
            $cpNumBedroomsPriority = $_POST['NumBedroomsPriority'];

            $cpSchoolSystemID = $_POST['SchoolSystemID'];
            $cpSchoolSystem = $_POST['SchoolSystem'];
            $cpSchoolSystemPriority = $_POST['SchoolSystemPriority'];

            $cpLotTypeID = $_POST['LotTypeID'];
            $cpLotType = $_POST['LotType'];
            $cpLotTypePriority = $_POST["LotTypePriority"];

            $sqlInsertCustProfileStyle = "INSERT INTO CustProfile (CustomerID, DomainID, FeatureID, DesiredFeatureValue, DesiredFeatureValueName, Multiplier) VALUES ($custID, $custDomainID, $cpHomeStyleID, NULL, '$cpHomeStyle', $cpHomeStylePriority)";
            if ($conn->query($sqlInsertCustProfileStyle) === TRUE) {
                //echo "Body Insert Successful";
            } else {
                echo "error: " . $sqlInsertCustProfileStyle . "<br>" . $conn->error;
            }

            $sqlInsertCustProfileNumBedrooms = "INSERT INTO CustProfile (CustomerID, DomainID, FeatureID, DesiredFeatureValue, DesiredFeatureValueName, Multiplier) VALUES ($custID, $custDomainID, $cpNumBedroomsID, NULL, '$cpNumBedrooms', $cpNumBedroomsPriority)";
            if ($conn->query($sqlInsertCustProfileNumBedrooms) === TRUE) {
                //echo "Color Insert Successful";
            } else {
                echo "error: " . $sqlInsertCustProfileNumBedrooms . "<br>" . $conn->error;
            }

            $sqlInsertCustProfileSchoolSys = "INSERT INTO CustProfile (CustomerID, DomainID, FeatureID, DesiredFeatureValue, DesiredFeatureValueName, Multiplier) VALUES ($custID, $custDomainID, $cpSchoolSystemID, NULL, '$cpSchoolSystem', $cpSchoolSystemPriority)";
            if ($conn->query($sqlInsertCustProfileSchoolSys) === TRUE) {
                //echo "Engine Insert Successful";
            } else {
                echo "error: " . $sqlInsertCustProfileSchoolSys . "<br>" . $conn->error;
            }

            $sqlInsertCustProfileLotType = "INSERT INTO CustProfile (CustomerID, DomainID, FeatureID, DesiredFeatureValue, DesiredFeatureValueName, Multiplier) VALUES ($custID, $custDomainID, $cpLotTypeID, NULL, '$cpLotType', $cpLotTypePriority)";
            if ($conn->query($sqlInsertCustProfileLotType) === TRUE) {
                //echo "Trans Insert Successful";
            } else {
                echo "error: " . $sqlInsertCustProfileLotType . "<br>" . $conn->error;
            }


            //Drop StockPoints Table -- Reference: https://www.w3schools.com/php/php_mysql_delete.asp
            $sqlDropStockPoints = "DROP TABLE IF EXISTS StockPoints";
            if ($conn->query($sqlDropStockPoints) === TRUE) {
                //echo "<h2>StockPoints Deleted Successfully</h2>";
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
                //echo "<h2> Create Stock Points Success! </h2>";
            } else {
                echo "Error Creating Stock Points Record: " . $conn->error;
            }

            $sqlDropStockMatch = "DROP TABLE IF EXISTS StockMatch";
            if ($conn->query($sqlDropStockMatch) === TRUE) {
                //echo "<h2>StockMatch Deleted Successfully</h2>";
            } else {
                echo "Error Deleting Record: " . $conn->error;
            }

            $sqlCreateStockMatch = "Create Table StockMatch
                                    Select DomainID, CustomerID, StockNum, StockDesc, sum(WeightedAffinityPoints) as TotalPoints
	                                from  StockPoints
                                    Group by StockNum
                                    order by TotalPoints DESC";
            if ($conn->query($sqlCreateStockMatch) === TRUE) {
                //echo "<h2> Create Stock Match Success! </h2>";
            } else {
                echo "Error Creating Stock Match Record: " . $conn->error;
            }

            $sqlDeleteCustMatch = "DELETE FROM CustMatch WHERE DomainID = '$custDomainID' AND CustomerID = '$custID'";
            if ($conn->query($sqlDeleteCustMatch) === TRUE) {
                //echo "<h2>CustMatch Deleted For Existing Customer Successfully</h2>";
            } else {
                echo "Error Deleting Record: " . $conn->error;
            }

            $sqlInsertUpdatedCustomerMatch = "INSERT INTO CustMatch SELECT CustomerID, DomainID, StockNum, StockDesc, TotalPoints FROM StockMatch";
            if ($conn->query($sqlInsertUpdatedCustomerMatch) === TRUE) {
                //echo "<h2> Insert Customer Match FINAL Query Success! </h2>";
            } else {
                echo "Error Inserting into Customer Match Record: " . $conn->error;
            }

            $sqlDisplayMatchResults = "SELECT StockNum, StockDesc, TotalPoints FROM StockMatch";
            $qDisplayMatchResults = $conn->query($sqlDisplayMatchResults);

            if ($qDisplayMatchResults->num_rows > 0) {
                echo "<h2>" . $custName . ", Your Results Are In!</h2>";
                echo "<table class='table table-striped'>";
                echo "<thead><tr>";
                echo "<th scope='col'>Stock Number</th>";
                echo "<th scope='col'>Home</th>";
                echo "<th scope='col'>Total Points</th>";
                echo "</tr></thead>";
                echo "<tbody>";
                while ($qDisplayMatchResultsRow = $qDisplayMatchResults->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $qDisplayMatchResultsRow['StockNum'] . "</td>";
                    echo "<td>" . $qDisplayMatchResultsRow['StockDesc'] . "</td>";
                    echo "<td>" . $qDisplayMatchResultsRow['TotalPoints'] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody></table>";
                echo "<br><br><br><br><div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>Thank you for using the Consumer Matching Engine!</h5>
                            <p class='card-text'>To reset the CME and perform another match calculation please click the button below:</p>
                            <a href='newcust.php' class='btn btn-primary'>Restart the CME</a>
                        </div>
                        </div>";
            }

         // ******************************* MATES *******************************
        } elseif ($custDomain == 'Mates') {
            $cpAgeID = $_POST['AgeID'];
            $cpAge = $_POST['Age'];
            $cpAgePriority = $_POST['AgePriority'];

            $cpEducationID = $_POST['EducationID'];
            $cpEducation = $_POST['Education'];
            $cpEducationPriority = $_POST['EducationPriority'];

            $cpHobbyID = $_POST['HobbyID'];
            $cpHobby = $_POST['Hobby'];
            $cpHobbyPriority = $_POST['HobbyPriority'];

            $sqlInsertCustProfileAge = "INSERT INTO CustProfile (CustomerID, DomainID, FeatureID, DesiredFeatureValue, DesiredFeatureValueName, Multiplier) VALUES ($custID, $custDomainID, $cpAgeID, NULL, '$cpAge', $cpAgePriority)";
            if ($conn->query($sqlInsertCustProfileAge) === TRUE) {
                //echo "Body Insert Successful";
            } else {
                echo "error: " . $sqlInsertCustProfileAge . "<br>" . $conn->error;
            }

            $sqlInsertCustProfileEducation = "INSERT INTO CustProfile (CustomerID, DomainID, FeatureID, DesiredFeatureValue, DesiredFeatureValueName, Multiplier) VALUES ($custID, $custDomainID, $cpEducationID, NULL, '$cpEducation', $cpEducationPriority)";
            if ($conn->query($sqlInsertCustProfileEducation) === TRUE) {
                //echo "Color Insert Successful";
            } else {
                echo "error: " . $sqlInsertCustProfileEducation . "<br>" . $conn->error;
            }

            $sqlInsertCustProfileHobby = "INSERT INTO CustProfile (CustomerID, DomainID, FeatureID, DesiredFeatureValue, DesiredFeatureValueName, Multiplier) VALUES ($custID, $custDomainID, $cpHobbyID, NULL, '$cpHobby', $cpHobbyPriority)";
            if ($conn->query($sqlInsertCustProfileHobby) === TRUE) {
                //echo "Engine Insert Successful";
            } else {
                echo "error: " . $sqlInsertCustProfileHobby . "<br>" . $conn->error;
            }

            //Drop StockPoints Table -- Reference: https://www.w3schools.com/php/php_mysql_delete.asp
            $sqlDropStockPoints = "DROP TABLE IF EXISTS StockPoints";
            if ($conn->query($sqlDropStockPoints) === TRUE) {
                //echo "<h2>StockPoints Deleted Successfully</h2>";
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
                //echo "<h2> Create Stock Points Success! </h2>";
            } else {
                echo "Error Creating Stock Points Record: " . $conn->error;
            }

            $sqlDropStockMatch = "DROP TABLE IF EXISTS StockMatch";
            if ($conn->query($sqlDropStockMatch) === TRUE) {
                //echo "<h2>StockMatch Deleted Successfully</h2>";
            } else {
                echo "Error Deleting Record: " . $conn->error;
            }

            $sqlCreateStockMatch = "Create Table StockMatch
                                    Select DomainID, CustomerID, StockNum, StockDesc, sum(WeightedAffinityPoints) as TotalPoints
	                                from  StockPoints
                                    Group by StockNum
                                    order by TotalPoints DESC";
            if ($conn->query($sqlCreateStockMatch) === TRUE) {
                //echo "<h2> Create Stock Match Success! </h2>";
            } else {
                echo "Error Creating Stock Match Record: " . $conn->error;
            }

            $sqlDeleteCustMatch = "DELETE FROM CustMatch WHERE DomainID = '$custDomainID' AND CustomerID = '$custID'";
            if ($conn->query($sqlDeleteCustMatch) === TRUE) {
                //echo "<h2>CustMatch Deleted For Existing Customer Successfully</h2>";
            } else {
                echo "Error Deleting Record: " . $conn->error;
            }

            $sqlInsertUpdatedCustomerMatch = "INSERT INTO CustMatch SELECT CustomerID, DomainID, StockNum, StockDesc, TotalPoints FROM StockMatch";
            if ($conn->query($sqlInsertUpdatedCustomerMatch) === TRUE) {
                //echo "<h2> Insert Customer Match FINAL Query Success! </h2>";
            } else {
                echo "Error Inserting into Customer Match Record: " . $conn->error;
            }

            $sqlDisplayMatchResults = "SELECT StockNum, StockDesc, TotalPoints FROM StockMatch";
            $qDisplayMatchResults = $conn->query($sqlDisplayMatchResults);

            if ($qDisplayMatchResults->num_rows > 0) {
                echo "<h2>" . $custName . ", Your Results Are In!</h2>";
                echo "<table class='table table-striped'>";
                echo "<thead><tr>";
                echo "<th scope='col'>Stock Number</th>";
                echo "<th scope='col'>Your New Love!</th>";
                echo "<th scope='col'>Total Points</th>";
                echo "</tr></thead>";
                echo "<tbody>";
                while ($qDisplayMatchResultsRow = $qDisplayMatchResults->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $qDisplayMatchResultsRow['StockNum'] . "</td>";
                    echo "<td>" . $qDisplayMatchResultsRow['StockDesc'] . "</td>";
                    echo "<td>" . $qDisplayMatchResultsRow['TotalPoints'] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody></table>";
                echo "<br><br><br><br><div class='card'>
                        <div class='card-body'>
                            <h5 class='card-title'>Thank you for using the Consumer Matching Engine!</h5>
                            <p class='card-text'>To reset the CME and perform another match calculation please click the button below:</p>
                            <a href='newcust.php' class='btn btn-primary'>Restart the CME</a>
                        </div>
                        </div>";
            }

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

    //Echo Closing HTML Statements
    echo '</div><script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
            </body></html>';

?>