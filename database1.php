<?php
   $db_host = 'localhost';
   $db_username = 'root';
   $db_password = '';
   
   $conn = new mysqli($db_host, $db_username, $db_password);

    try{
        if($conn->error){
            echo "Connection not established!<br>";
        }
        else{
            echo "Connected successfully<br>";
        }
    }
    catch(Exception $e){
        echo $e."<br>";
    }

    /*$sql1 = "CREATE DATABASE blood_donation;";
    $res1 = $conn->query($sql1);*/

    $sql = "USE blood_donation;";
    $res = $conn->query($sql);

    /*$sql1 = "CREATE TABLE donor_details(
                            donor_id INT PRIMARY KEY AUTO_INCREMENT,
                            donor_name VARCHAR(255),
                            email VARCHAR(255) UNIQUE,
                            password VARCHAR(255)
                        );";
    $res1 = $conn->query($sql1);*/
                /*try{
                $sql1 = "INSERT INTO donor_details(donor_name, email, password)
                         VALUES ('R. Karthikeya', 'rentala2005@gmail.com', 'Karthi$2005'),
                                ('P. Srinivas', 'srinivas@gmail.com', 'Srinivas#2004'),
                                ('M. Vamsi krishna', 'vamsikrishnam@gmail.com', 'Vamsi#2004'),
                                ('P. Manisha', 'manishap@gmail.com', 'Manisha#2004'),
                                ('P. Padmini rani', 'padminiranip@gmail.com','Padmini@lara'),
                                ('K. Venkateswara Rao', 'kvr@gmail.com', 'drkvr@lara');";
                $sql2 = $conn->query($sql1);
                }
                catch(Exception $e){
                    echo "";
                }*/
    /*try{
    $sql1 = "CREATE TABLE personal_details(
                donor_id INT,
                country VARCHAR(255),
                state VARCHAR(255),
                city VARCHAR(255),
                address VARCHAR(255),
                gender CHAR(1),
                age INT,
                weight INT,
                general_health VARCHAR(255),
                bad_habits VARCHAR(255),
                sp INT,
                dp INT,
                recent_surgery_or_major_illness VARCHAR(255),
                time_between_donations INT,
                pd VARCHAR(255),
                FOREIGN KEY(donor_id) REFERENCES donor_details(donor_id)
            );";

    $res1 = $conn->query($sql1);
    }
    catch(Exception $e){
        echo $e;
    }

    try{
        $sql1 = "INSERT INTO personal_details
                 VALUES (1, 'India', 'Andhra pradesh', 'Guntur', 'A.T.Agraharam', 'M', 19, 56, 'none', 'none', 120, 80, 'none', 7, 'none'),
                        (2, 'India', 'Telangana', 'Hyderabad', 'Miyapur', 'F', 19, 57, 'fever', 'none', 130, 90, 'none', 6, 'none'),
                        (3, 'India', 'Maharastra', 'New mumbai', 'Andheri west', 'F', 20, 61, 'none', 'smoking', 140, 90, 'none', 9, 'none'),
                        (4, 'India', 'Madhya pradesh', 'Indore', 'Shivaji Maharaj chaurastha', 'M', 19, 51, 'none', 'none', 150, 100, 'none', 6, 'none'),
                        (5, 'India', 'Uttar pradesh', 'Ayodhya', 'Sriram nagar', 'M', 45, 62, 'none', 'none', 120, 80, 'none', 4, 'none'),
                        (6, 'India', 'Krishna', 'Vijayawada', 'Government press', 'M', 47, 75, 'none', 'none', 110, 80, 'none', 6, 'none');";
        $res1 = $conn->query($sql1);
    }
    catch(Exception $e){
        echo $e;
    }*/

    /*try{
        $sql2 = "SELECT * FROM donor_details d
                 JOIN personal_details p
                 ON d.donor_id = p.donor_id;";
        $res2 = $conn->query($sql2);

        if ($res2->num_rows > 0) {
            echo "<table border='1' cellpadding='10'>";
            echo "<tr>
                    <th>Donor ID</th>
                    <th>Donor Name</th> <!-- Assuming there is a donor_name column -->
                    <th>Country</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Weight</th>
                    <th>General Health</th>
                    <th>Bad Habits</th>
                    <th>Systolic Pressure</th>
                    <th>Diastolic Pressure</th>
                    <th>Recent Surgery/Major Illness</th>
                    <th>Time Between Donations</th>
                    <th>Permanent Diseases</th>
                  </tr>";
        
            // Output data of each row
            while ($row = $res2->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['donor_id'] . "</td>";
                echo "<td>" . $row['donor_name'] . "</td>"; // Assuming there is a donor_name column
                echo "<td>" . $row['country'] . "</td>";
                echo "<td>" . $row['state'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['weight'] . "</td>";
                echo "<td>" . $row['general_health'] . "</td>";
                echo "<td>" . $row['bad_habits'] . "</td>";
                echo "<td>" . $row['sp'] . "</td>";
                echo "<td>" . $row['dp'] . "</td>";
                echo "<td>" . $row['recent_surgery_or_major_illness'] . "</td>";
                echo "<td>" . $row['time_between_donations'] . "</td>";
                echo "<td>" . $row['pd'] . "</td>";
                echo "</tr>";
            }
        
            echo "</table>";
        } else {
            echo "No records found.";
        }
    }
    catch(Exception $e){
        echo $e;
    }*/

    /*$sql1 = "CREATE TABLE blood_groups(
                donor_id INT,
                blood_group VARCHAR(10),
                FOREIGN KEY(donor_id) REFERENCES donor_details(donor_id)
            );";
    $res1 = $conn->query($sql1);*/

    /*$sql1 = "INSERT INTO blood_groups
             VALUES (1, 'O+'),
                    (5, 'B-'),
                    (6, 'B+'),
                    (7, 'A-'),
                    (8, 'O+');";
    $res1 = $conn->query($sql1);*/

    $sql1 = "SELECT * FROM donor_details d JOIN blood_groups b ON d.donor_id = b.donor_id;";
    $res1 = $conn->query($sql1);
    if($res1->num_rows > 0){
        while($i = $res1->fetch_assoc()){
            /*echo $i['donor_id']."&nbsp;".$i['donor_name']."&nbsp;".$i['blood_group']."<br>";*/
            $grp = $i['blood_group'];
            setcookie("bg", $grp, time()+(86400), "C:/xampp/htdocs/miniProject1");
        }
    }
?>