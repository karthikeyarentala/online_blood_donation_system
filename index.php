<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <h1>Enter Your Details</h1>
    <form action="submit.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" required>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
