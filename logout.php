<?php
require_once("db_connection.php");
session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session


?>
<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
    <link rel="icon" href="images/logo2.png" type="image/x-icon">
</head>
<body>
    <h1>Logout Page</h1>

    <p>You have been logged out.</p>

    <form action="index.php" method="post">
        <input type="submit" value="Return to Login">
    </form>
</body>
</html>