<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <link rel="stylesheet" href="donation_form_style.css">
</head>
<body>
    <form action="donation_form.php" method="post">
        <div class="donor_id">
            <label for="donor_id">Donor ID:&nbsp;</label>
            <input type="text" name="donor_id" value="<?php echo $_COOKIE['cook_id']?>"readonly>
        </div>
        <br><br>
        <div class="age">
            <label for="age">Enter your age:&nbsp;</label>
            <input type="number" name="age" min="18" max="55" required>
        </div>
        <br><br>
        <div class="weight">
            <label for="weight">Enter your weight:&nbsp;</label>
            <input type="number" name="weight" min="50" max="80" required>
        </div>
        <br><br>
        <div class="bg">
        <label for="blood-group">Select your Blood group:&nbsp;</label>
            <select id="blood_group" name="blood_group" required>
                <option value="">--Select Blood Group--</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
        </div>
        <br><br>
        <div class="submit">
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
</body>
</html>

<?php
    $db_hostname = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'blood_donation';

    $conn = new mysqli($db_hostname, $db_username, $db_password, $db_name);

    try{
        if(!isset($_POST['submit'])){
            echo "";
        }
        else{
            $donor_id = $_COOKIE['cook_id'];
            $age = $_POST['age'];
            $weight = $_POST['weight'];
            $blood_group = $_POST['blood_group'];
            if($blood_group == $_POST['blood_group']){
                $sql1 = "INSERT INTO personal_details
                        VALUES('$donor_id', '$age', '$weight', '$blood_group');";
                $res1 = $conn->query($sql1);
            }
        }
    }
    catch(Exception $e){
        echo $e;
    }
?>