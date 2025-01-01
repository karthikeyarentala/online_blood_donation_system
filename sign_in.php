<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Blood Donation System</title>
    <link rel="stylesheet" href="sign_in.css">
</head>
<body>
    <div class="signin-container">
        <div class="signin-box">
            <h2>Welcome Back!</h2>
            <p>Sign in to continue and save lives</p>

            <form action="sign_in.php" method="post">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
                
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    <a href="forgot_password.php" class="forgot-link">Forgot Password?</a>
                </div>

                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>

                <button type="submit" name="submit" class="signin-btn">Sign In</button>

                <p class="signup-link">New User? <a href="sign_up.php">Create an account</a></p>
            </form>
            <?php
                $db_host = 'localhost';
                $db_username = 'root';
                $db_password = '';
                
                $conn = new mysqli($db_host, $db_username, $db_password);

                /*try{
                    if($conn->error){
                        echo "Connection not established!<br>";
                    }
                    else{
                        echo "Connected successfully<br>";
                    }
                }
                catch(Exception $e){
                     echo $e."<br>";
                }*/
             
                 
             
                $sql = "USE blood_donation;";
                $res = $conn->query($sql);

                
                $flag = false;
                try{
                    if(empty($_POST['email']) && empty($_POST['password']))
                    {
                        echo "";
                    }
                    else{
                        $email = $_POST['email'];
                        $pass = $_POST['password'];
                        $sub = $_POST['submit'];
                        $sql = "SELECT * FROM donor_details WHERE email = '$email' AND password = '$pass';";
                        $res = $conn->query($sql);
                        if($res -> num_rows > 0){
                            while($i = $res->fetch_assoc())
                            {
                                if($i['email']==$email && $i['password']==$pass){
                                    $flag = true;
                                    $id = $i['donor_id'];
                                    setcookie("cook_id", $id, time()+(86400), "C:/xampp/htdocs/miniProject1");
                                    $name=$i['donor_name'];
                                    setcookie("cook_mail",$name,time()+(86400),"C:/xampp/htdocs/miniProject1");
                                    /*$email = $i['email'];
                                    setcookie("cook_email", $mail, time()+(86400), "C:/xampp/htdocs/miniProject1");*/
                                    header("Location: home.php");
                                    //echo"hey $donor_name";
                                } else{
                                    break;
                                }
                            }
                        }
                        if($flag == false){
                            echo "<p>Invalid username and passoword<br></p>";
                        }
                    }
                } catch(Exception $e){
                    echo "";
                }
            ?>
        </div>
    </div>
</body>
</html>