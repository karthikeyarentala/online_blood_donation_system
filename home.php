<?php
    $db_host = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'blood_donation';

    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
    $donor_id = $_COOKIE['cook_id'];
    $sql = "SELECT blood_group FROM blood_groups WHERE donor_id = '$donor_id';";
    $res = $conn->query($sql);
    
    if($res->num_rows > 0){
        $donor_data = $res->fetch_assoc();
        $bg = $donor_data['blood_group'];
    }
    else{
        echo "blood group NOT FOUND! <br>";
    }

    $sql1 = "SELECT no_of_donations FROM blood_groups WHERE donor_id = '$donor_id';";
    $res1 = $conn->query($sql1);

    if($res1->num_rows > 0){
        $donor_data1 = $res1->fetch_assoc();
        $count = $donor_data1['no_of_donations'];
    }

    $donate = isset($_POST['donate']) ? $_POST['donate'] : null;
    $request = isset($_POST['request']) ? $_POST['request'] : null;

    try{
        if($donate !== null){
            header("Location: donation_form.php");
        }
    
        if($request !== null){
            header("Location: request_form.php");
        }
    }
    catch(Exception $e){
        echo "Make sure your choice is correct! <br>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="home.css">
    <style>
        span{
            color: red;
        }
        .donate{
            display: inline-block;
        }
        .request{
            display: inline-block;
        }
    </style>
</head>
<body>
    
    <h2>Welcome, <span><?php echo $_COOKIE['cook_mail']?></span></h2>
    <h3>
        Register ID:
        <span><?php
            echo $_COOKIE["cook_id"];
        ?></span>
    </h3>
    <h3>
        Blood group:
        <span>
            <?php
                echo $bg;
            ?>
        </span>
    </h3>
    <h3>
        Number of donations: 
        <span>
            <?php
                echo $count;
            ?>
        </span>
    </h3>

    <form action="home.php" method="post">
        <br>
        <div class="donate">
            <input type="submit" name="donate" class="donate" value="Donate">
        </div>
        <div class="request">
            <input type="submit" name="request" class="request" value="Request">
        </div>
    </form>
</body>
</html>