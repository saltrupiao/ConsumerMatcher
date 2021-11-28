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

$sqlInsertCustProfile = "INSERT INTO Customer (CustomerID, CustName) VALUES (NULL, '$custName')";
if ($conn->query($sqlInsertCustProfile) === TRUE) {
    echo "New Record Created Successully";
    echo $sqlInsertCustProfile;
} else {
    echo "Error: " . $sqlInsertCustProfile . "<br>" . $conn->error;
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
<form method="post" action="matchResults.php">
    <h3>Create Customer Profile</h3>
    <p class="lead">Customer Name: <?php echo $custName ?></p>
    <p class="lead">Customer Domain: <?php echo $custDomain ?></p>
    <input type="hidden" id="custDomainH" name="custDomainH" value="<?php echo $custDomain ?>">
    <div class="form-group">
        <label for="selectDomain">Select Matching Domain</label>
        <?php
        $sqlFeature = "SELECT FeatureID, DomainID, FeatureName FROM Feature NATURAL JOIN Domain WHERE DomainName = '$custDomain'";
        echo "<h1>" . $sqlFeature . "</h1>";
        $qFeatureResult = $conn->query($sqlFeature);

        if ($qFeatureResult->num_rows > 0) {
            $arrayFeatureNames = array();
            while ($qFeatureResultRow = $qFeatureResult->fetch_assoc()) {
                echo '<div class="row"><div class="col-md-6">';
                echo "<select class='form-control' id='" . $qFeatureResultRow["FeatureName"] . "' name='" . $qFeatureResultRow["FeatureName"] . "'>";
                $sqlFeatureValue = "SELECT * FROM Feature NATURAL JOIN Domain NATURAL JOIN FeatValue WHERE DomainName = '$custDomain' AND FeatureName = '{$qFeatureResultRow["FeatureName"]}'";
                $qFeatureValueResult = $conn->query($sqlFeatureValue);
                if ($qFeatureValueResult->num_rows > 0) {
                    while ($qFeatureValueResultRow = $qFeatureValueResult->fetch_assoc()) {
                        echo "<option>" . $qFeatureValueResultRow["FeatureValue"] . "</option>";
                    }
                }
                /*
                echo "</select></div><div class='col-md-6'><div class='row'><div class='col-md-4'>";
                echo "<input class='form-check-input' type='radio' name='" . $qFeatureResultRow["FeatureName"] . "PriorityH' value='" . $qFeatureResultRow["FeatureName"] . "PriorityH'>High</div>";
                echo "<div class='col-md-4'><input class='form-check-input' type='radio' name='" . $qFeatureResultRow["FeatureName"] . "PriorityM'>Medium</div>";
                echo "<div class='col-md-4'><input class='form-check-input' type='radio' name='" . $qFeatureResultRow["FeatureName"] . "PriorityM'>Low</div></div></div></div>";
                */

                echo "</select></div>";
                echo "<div class='col-md-6'><select class='form-control' id='" . $qFeatureResultRow["FeatureName"] . "Priority' name='" . $qFeatureResultRow["FeatureName"] . "Priority'>";
                echo "<option value='1'>High</option>";
                echo "<option value='2'>Medium</option>";
                echo "<option value='3'>Low</option>";
                echo "</select></div></div>";
            }
        }
        ?>
    </div>
    <input class="btn btn-primary" type="submit" name="submitProfileBuilder">
</form>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>