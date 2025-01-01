<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'C:/xampp/htdocs/project/PHPMailer/src/Exception.php';
require 'C:/xampp/htdocs/project/PHPMailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/project/PHPMailer/src/SMTP.php';

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'blood'); 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$name = $conn->real_escape_string($_POST['name']);
$blood_type = $conn->real_escape_string($_POST['blood']);
$email = $conn->real_escape_string($_POST['email']);

// Check if the details already exist in the blood_donations table
$sqlCheckExisting = "SELECT * FROM blood_donations WHERE name = '$name' AND blood = '$blood_type' AND email = '$email'";
$resultCheck = $conn->query($sqlCheckExisting);

if ($resultCheck->num_rows > 0) {
    // If the entry already exists, just send the email notification
    echo "Record already exists!<br>";

    // Now, check if there's a match in the previous form (bloody table)
    $sqlCheckBloody = "SELECT * FROM bloody WHERE name = '$name'";
    $resultBloody = $conn->query($sqlCheckBloody);

    if ($resultBloody->num_rows > 0) {
        // If a match is found, send an email notification to the original user
        $row = $resultBloody->fetch_assoc();
        $recipientEmail = $row['email'];

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';               // Set the SMTP server
            $mail->SMTPAuth = true;                       // Enable SMTP authentication
            $mail->Username = 'infinitydeals0@gmail.com';     // SMTP username (your email)
            $mail->Password = 'ufzl jwuf szvf uqbl';        // Use App Password if 2FA is enabled
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Enable TLS encryption
            $mail->Port = 587;     // TCP port for TLS

            // SSL options
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            // Recipients
            $mail->setFrom('infinitydeals0@gmail.com', 'Blood Donation System');
            $mail->addAddress($recipientEmail);           // Add the matched user's email address

            // Content
            $mail->isHTML(true);                          // Set email format to HTML
            $mail->Subject = 'Blood Donation Match Found';
            $mail->Body    = "Dear $name, <br>We have found a blood donation match for you! Please contact the donor for further details.<br>Donor's Blood Type: $blood_type";
            $mail->AltBody = "Dear $name, We have found a blood donation match for you! Donor's Blood Type: $blood_type";

            // Send the email
            if($mail->send()) {
                echo 'Notification sent successfully to: ' . $recipientEmail;
            } else {
                echo 'Failed to send notification to: ' . $recipientEmail;
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo 'No matching record found in the bloody table.';
    }
} else {
    // If the record does not exist, insert it into the blood_donations table
    $sqlInsert = "INSERT INTO blood_donations (name, blood, email) VALUES ('$name', '$blood_type', '$email')";
    if ($conn->query($sqlInsert) === TRUE) {
        echo "New record created successfully!<br>";

        // Now, check if there's a match in the previous form (bloody table)
        $sqlCheckBloody = "SELECT * FROM bloody WHERE name = '$name'";
        $resultBloody = $conn->query($sqlCheckBloody);

        if ($resultBloody->num_rows > 0) {
            // If a match is found, send an email notification to the original user
            $row = $resultBloody->fetch_assoc();
            $recipientEmail = $row['email'];

            // Create a new PHPMailer instance
            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';               // Set the SMTP server
                $mail->SMTPAuth = true;                       // Enable SMTP authentication
                $mail->Username = 'infinitydeals0@gmail.com';     // SMTP username (your email)
                $mail->Password = 'ufzl jwuf szvf uqbl';        // Use App Password if 2FA is enabled
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Enable TLS encryption
                $mail->Port = 587;     // TCP port for TLS

                // SSL options
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

                // Recipients
                $mail->setFrom('infinitydeals0@gmail.com', 'Blood Donation System');
                $mail->addAddress($ipientEmail);           // Add the matched user's email address

                // Content
                $mail->isHTML(true);                          // Set email format to HTML
                $mail->Subject = 'Blood Donation Match Found';
                $mail->Body    = "Dear $name, <br>We have found a blood donation match for you! Please contact the donor for further details.<br>Donor's Blood Type: $blood_type";
                $mail->AltBody = "Dear $name, We have found a blood donation match for you! Donor's Blood Type: $blood_type";

                // Send the email
                if($mail->send()) {
                    echo 'Notification sent successfully to: ' . $recipientEmail;
                } else {
                    echo 'Failed to send notification to: ' . $recipientEmail;
                }
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            echo 'No matching record found in the bloody table.';
        }
    } else {
        echo "Error: " . $sqlInsert . "<br>" . $conn->error;
    }
}

$conn->close();
?>
