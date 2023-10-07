<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password_2" id="password">
        </div>
        <div class="input-group">
            <label for="Confirm_password">Confirm Password</label>
            <input type="password" name="password_2" id="Confirm_password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>Already a member ? <a href="login.php">Sign in</a></p>

    </form>




</body>

</html>