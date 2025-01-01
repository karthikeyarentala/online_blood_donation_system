<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_donation";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data
$sql = "SELECT donor_id FROM donor_details WHERE donor_id = '$donor_id';"; // Modify query based on your table structure
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Output the data
    while($row = $result->fetch_assoc()) {
        $v = $row["donor_id"];
        echo $v;
    }
} else {
    echo "0 results";
}

$conn->close();
?>
