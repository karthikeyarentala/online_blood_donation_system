<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - Blood donation system</title>
    <link rel="stylesheet" href="sign_in.css">
</head>
<body>
    <div class="signin-container">
        <div class="signin-box">
            <h2>Hello!</h2>
            <p>Sign up to continue and save lives</p>
            <form action="sign_up.php" method="post">
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" required>
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
                
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                </div>

                <div class="input-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Re-enter your password" required>
                </div>
                <input type="submit" name="submit" value="Sign up" class="signin-btn">          
            </form>
        </div>
    </div>
</body>
</html>


<?php
            $db_hostname = "localhost";
            $db_username = "root";
            $db_password = "";
            $db_name = "blood_donation";

            $conn = new mysqli($db_hostname,$db_username,$db_password,$db_name);
            try{
                if((empty($_POST['email'])) && empty($_POST['donor_name']) && empty($_POST['password']) && empty($_POST['confirm_password'])){
                    echo "";
                }
                else{
                    $name = $_POST['name'];
                    $donor_name = $name;
                    //$donor_name = $_POST['donor_name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    // Preparing the SQL statement
                    $sql = "INSERT INTO donor_details(donor_name, email, password) 
                            VALUES ('$donor_name', '$email', '$password');";
                    $res = $conn->query($sql);
                    header("Location: sign_in.php");
                }
            }
            catch(Exception $e){
                echo $e;
            }
?>