<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="sign_in.css">
</head>
<body>
    <div class="signin-container">
        <div class="signin-box">
            <h2>Oops! You've forgotten your password</h2>
            <p>Update your password and continue to save lives</p>
            <form action="forgot_password.php" method="post">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
                        
                <div class="input-group">
                    <label for="password">New Password</label>
                    <input type="password" name="new_password" id="password" placeholder="Enter a new password" required>
                </div>

                <div class="input-group">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password" required>
                </div>

                <input type="submit" name="submit" value="Update" class="signin-btn">
            </form>
        </div>
    </div>
</body>
</html>

<?php
    global $final;
    $db_host = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'blood_donation';

    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    if(!($conn)){
        echo "Server isn't responding!<br>";
    }

    try{
        if(empty($_POST['email']) && empty($_POST['new_password']) && empty($_POST['confirm_password'])){
            echo "";
        }
        else{
            $email = $_POST['email'];
            $np = $_POST['new_password'];
            $cp = $_POST['confirm_password'];
            if($_POST['new_password'] == $_POST['confirm_password']){
                $sql = "UPDATE donor_details SET password = '$np' WHERE email = '$email';";
                $res = $conn->query($sql);
                echo "Password updates successfully<br>";
                $final = header("Location: sign_in.php");
            }
            else{
                echo "Password doesn't matched!<br>";
            }
        }
    }
    catch(Exception $e){
        echo $e;
    }
?>