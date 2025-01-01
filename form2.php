<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Form</title>
</head>
<body>
    <h1>Enter Blood Donation Details</h1>
    <form action="submit_blood.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required> <br><br>

        <label for="blood">Blood Type:</label>
        <input type="text" name="blood" required> <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required> <br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
