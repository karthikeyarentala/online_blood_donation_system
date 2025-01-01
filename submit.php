<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'blood'); // Update if necessary

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get data from the form
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']); // Changed from phone_number to email

    // Insert data into the database
    $sql = "INSERT INTO bloody (name, email) VALUES ('$name', '$email')"; // Updated SQL query

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!<br>";
        echo "Name: $name<br>";
        echo "Email: $email<br>"; // Updated to display email
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
