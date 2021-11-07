<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "oakland";
$dbname = "csiproject";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $custName = $_POST['custNameIn'];

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Title </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
<form method="post" action="custprofilebuilder.php">
    <h3>Create Customer Profile</h3>
    <p class="lead">Customer Name: <?php echo $custName ?></p>
    <p class="lead">Customer Name: <?php echo $custDomain ?></p>
    <div class="form-group">
        <label for="selectDomain">Select Matching Domain</label>
        <?php
            /*
            $sql = "SELECT FeatureID, DomainID, FeatureName FROM Feature";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    //echo '<select class="form-control" id="';
                    echo "<select class='form-control' id='" . $row["FeatureName"] . "'>";
                    //echo $row["FeatureName"];
                    //echo '">';
                    //$sql2 = mysqli_query($conn,'SELECT FeatureValue FROM FeatValue WHERE FeatureID = $row["FeatureID"]');
                    $sql2 = 'SELECT FeatureValue FROM FeatValue WHERE DomainID = $row["DomainID"]';
                    $result2 = $conn->query($sql2);
                    echo $sql2;
                    /*
                    if ($result2->num_rows > 0) {
                        while ($row2 = $result2->fetch_assoc()) {
                            echo "<option>" . $row2["FeatureValue"] . "</option>";
                        }
                    }

                    while ($row2 = $result2->fetch_array()) {
                        echo "<option>" . $row2["FeatureValue"] . "</option>";
                    }

                    echo "</select>";

                }
            }
            */
        $sqlFeature = "SELECT FeatureID, DomainID, FeatureName FROM Feature NATURAL JOIN Domain WHERE DomainName = '$custDomain'";
        echo "<h1>" . $sqlFeature . "</h1>";
        $qFeatureResult = $conn->query($sqlFeature);

        if ($qFeatureResult->num_rows > 0) {
            $arrayFeatureNames = array();
            while ($qFeatureResultRow = $qFeatureResult->fetch_assoc()) {
                echo "<select class='form-control' id='" . $qFeatureResultRow["FeatureName"] . "'>";

                $sqlFeatureValue = "SELECT * FROM Feature NATURAL JOIN Domain NATURAL JOIN FeatValue WHERE DomainName = '$custDomain' AND FeatureName = '{$qFeatureResultRow["FeatureName"]}'";
                $qFeatureValueResult = $conn->query($sqlFeatureValue);
                if ($qFeatureValueResult->num_rows > 0) {
                    while ($qFeatureValueResultRow = $qFeatureValueResult->fetch_assoc()) {
                        echo "<option>" . $qFeatureValueResultRow["FeatureValue"] . "</option>";
                    }
                }
                //array_push($arrayFeatureNames,$qFeatureResultRow["FeatureName"]);
                //echo "<option>" . $qFeatureResultRow["FeatureValue"] . "</option>";
                echo "</select>";
            }
        }

        /*
        while ($q1ResultRow = mysqli_fetch_array($q1Result)) {
            echo "<select class='form-control' id='" . $q1ResultRow["FeatureName"] . "'>";

            $sqlFeatValue = 'SELECT FeatureValue FROM Feature JOIN FeatValue WHERE DomainID = $q1ResultRow["DomainID"]';
            $q2Result = mysqli_query($conn,$sqlFeatValue);

            while ($q2ResultRow = mysqli_fetch_array($q2Result)) {
                echo "<option>" . $q2ResultRow["FeatureValue"] . "</option>";
            }

        }
        */
        ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>