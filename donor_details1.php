<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Details</title>
    <link rel="stylesheet" href="donor_details1_style.css">
</head>
<body>
    <form action="donor_details1.php" method="post">
        <div>
            <h2 style="color: red;">Health Details</h2>
            <div>
                <label for="gender">Gender?</label><br>
                <input type="radio" name="gender" value="Male">
                <label for="male">Male</label><br>
                <input type="radio" name="gender" value="Female">
                <label for="female">Female</label><br>
            </div>
            <br>
            <div>
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" min="18" max="65">
            </div>
            <br>
            <div>
                <label for="weight">Weight:</label>
                <input type="number" name="weight" min="50" max="105">
            </div>
            <br>
            <div>
                <label for="general health">Any general health issues like fever, cold, cough in recent days?</label><br>
                <input type="radio" name="gh" value="fever">
                <label for="fever">Fever</label><br>
                <input type="radio" name="gh" value="cold">
                <label for="cold">Cold</label><br>
                <input type="radio" name="gh" value="cough">
                <label for="cough">Cough</label><br>
                <input type="radio" name="gh" value="none">
                <label for="none">None</label><br>
            </div>
            <br>
            <div>
                <label for="bad">Any bad habits?</label><br>
                <input type="radio" id="smoking" name="bad" value="Smoking">
                <label for="smoking">Smoking</label><br>
                <input type="radio" id="drinking" name="bad" value="Alcohol consumption">
                <label for="drinking">Alcohol consumption</label><br>
                <input type="radio" id="drugs" name="bad" value="Drugs intake">
                <label for="drugs">Drugs intake</label><br>
                <input type="radio" id="none" name="bad" value="None">
                <label for="none">None</label><br>
            </div>
            <br>
            <div>
                <label for="bp">Blood pressure?</label><br>
                <label for="sp">Systolic pressure:</label>
                <input type="number" name="sp" min="90" max="180"><br>
                <label for="dp">Diastolic pressure:</label>
                <input type="number" name="dp" min="50" max="100"><br>    
            </div>
            <br>
            <div>
                <label for="rs&mi">Recent surgery or major illness ?</label><br>
                <input type="radio" name="rsmi" value="yes">
                <label for="ms">Yes</label><br>
                <input type="radio" name="rsmi" value="no">
                <label for="ms">No</label><br>
            </div>
            <br>
            <div>
                <label for="time">Time between recent donations ?</label><br>
                <input type="radio" id="3" name="time" value="3 months">
                <label for="time">3 months</label><br>
                <input type="radio" id="6" name="time" value="6 months">
                <label for="time">6 months</label><br>
                <input type="radio" id="9" name="time" value="9 months">
                <label for="time">9 months</label><br>
                <input type="radio" id="12" name="time" value="12 months">
                <label for="time">12 months</label><br>
                <input type="radio" id=">12" name="time" value=">12 months">
                <label for="time"> > 12 months</label><br>
            </div>
            <br>
            <div>
                <label for="pd">Permenant diseases like HIV, AIDS, Cancer etc...</label><br>
                <input type="radio" name="pd" value="HIV">
                <label for="hiv">HIV</label>
                <input type="radio" name="pd" value="AIDS">
                <label for="aids">AIDS</label>
                <input type="radio" name="pd" value="Cancer">
                <label for="cancer">Cancer</label>
                <input type="radio" name="pd" value="None">
                <label for="none">None</label>
            </div>
            <br>
            <input type="submit" name="Sumbit" value="Submit"><br>
        </div>
    </form>
</body>
</html>

<?php
    $db_host = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'blood_donation';

    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    $g = $_POST['gender'];
    $a = $_POST['age'];
    $w = $_POST['weight'];
    $gh = $_POST['gh'];
    $bad = $_POST['bad'];
    $sp = $_POST['sp'];
    $dp = $_POST['dp'];
    $rsmi = $_POST['rsmi'];
    $time = $_POST['time'];
    $pd = $_POST['pd'];

    try{
        $sql2 = "SELECT * FROM donor_details d
                 JOIN personal_details p
                 ON d.donor_id = p.donor_id;";
        $res2 = $conn->query($sql2);


    }
    catch(Exception $e){
        echo $e;
    }
    //include('database1.php');
?>