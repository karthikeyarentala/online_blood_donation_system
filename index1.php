<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <style>
        body{
            background-image: url('blood_donation.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 1600px;
            height: 892px;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {background-color: #f1f1f1;}
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="dropdown">
        <a href="#" class="dropbtn">Account</a>
        <div class="dropdown-content">
            <a href="sign_up.php">Register</a>
            <a href="sign_in.php">Login</a>
        </div>
    </div>
</body>
</html>