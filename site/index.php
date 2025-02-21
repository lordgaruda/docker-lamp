<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker LAMP Stack Demo</title>
</head>
<body>
    <h1>Docker LAMP Stack Demo</h1>
    
    <h2>PHP Status:</h2>
    <p><?php echo "PHP is working!"; ?></p>
    
    <h2>MySQL Status:</h2>
    <p>
        <?php
       $conn = new mysqli("db", "phpuser", "Php@dm!n", "phpdb");
       if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
       }
       echo "MySQL connected!";
       $conn->close();
        ?>
    </p>
    
    <h2>phpMyAdmin:</h2>
    <p><a href="http://localhost:8090" target="_blank">Go to phpMyAdmin</a></p>
</body>
</html>
