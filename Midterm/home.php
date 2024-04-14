<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: login_form.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>
<body>

<div class="user">
    <form action="logout.php" method="post">
    <h2>
        <?php
            echo "Welcome, " . $_SESSION['username'] . "!<br>";
        ?>  
    </h2>
    <input type="submit" name="logout" value="Logout">
</form>
</div>
</body>
</html>