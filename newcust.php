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

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
//$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Title </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

    <body>
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
                    $sql = "SELECT DomainName from domain";
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
    </body>
</html>