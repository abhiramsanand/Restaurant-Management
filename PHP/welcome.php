<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: loginc.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    
    <a href="logoutc.php">Logout</a>
</body>
</html>