<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="signup_form.css">
    <title>Signup</title>
</head>

<body>
<div class="center">
    <form action="signup.php" method="post">
        <h2>Signup</h2>
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" name="signup" value="Sign Up">
        <p class="login">Already have an account? <a href="login_form.php">Login</a></p>
    </form>
</div>
</body>
</html>