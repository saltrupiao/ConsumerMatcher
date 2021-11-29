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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

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
    </nav>
    <div class="container">
        <form method="post" action="custprofilebuilder.php">
        <h3>Create Customer Profile</h3>
          <div class="form-group">
            <label for="exampleFormControlInput1">Customer Name</label>
            <input type="text" class="form-control" id="custNameIn" name="custNameIn" placeholder="Eg. John Smith">
          </div>
          <div class="form-group">
            <label for="selectDomain">Select Matching Domain</label>
            <select class="form-control" id="selectCustDomainIn" name="selectCustDomainIn">
                <?php
                    $sql = "SELECT DomainName from DOMAIN";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<option>" . $row["DomainName"] . "</option>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </select>
          </div>

          <input class="btn btn-primary" type="submit" name="submit">
        </form>
    </div>
    </body>
</html>