<?php
require './config/config.php';
require './includes/form_handlers/register_handler.php';
require './includes/form_handlers/login_handler.php';
?>

<html>
    <head>
        <title>Welcome to E-Chinchilla!</title>
    </head>
    <body>

        <form action="register.php" method="POST">
            <input type="email" name="log_email" placeholder="Email Adress" value="<?php if(isset($_SESSION['log_email'])) {
                echo $_SESSION['log_email'];
            }?>" required>
            <br>
            <input type="password" name="log_password" placeholder="Password">
            <br>
            <input type="submit" name="login_button" value="login">

            <?php if(in_array("Email or password was incorrect<br>", $error_array)) echo "Email or password was incorrect<br>"; ?>

        </form>

        <form action="register.php" method="post">
            <input type="text" name="reg_fname" placeholder="First name" value="<?php if(isset($_SESSION['reg_fname'])) {
                echo $_SESSION['reg_fname'];
            }?>" required>

            <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array))
            echo "Your first name must be between 2 and 25 characters<br>";
            ?>

            <br>
            <input type="text" name="reg_lname" placeholder="Last name" value="<?php if(isset($_SESSION['reg_lname'])) {
                echo $_SESSION['reg_lname'];
            }?>" required>

            <?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array))
            echo "Your last name must be between 2 and 25 characters<br>";
        
            ?>

            <br>
            <input type="text" name="reg_email" placeholder="E-mail" value="<?php if(isset($_SESSION['reg_email'])) {
                echo $_SESSION['reg_email'];
            }?>" required>
            <br>
            <input type="text" name="reg_email2" placeholder="Confirm email" value="<?php if(isset($_SESSION['reg_email2'])) {
                echo $_SESSION['reg_email2'];
            }?>" required>

            <?php if(in_array("E-mail already in use<br>", $error_array))
            echo "E-mail already in use<br>";
            if(in_array("invalid e-mail format<br>", $error_array))
            echo "invalid e-mail format<br>";
            if(in_array("Emails don't match<br>", $error_array))
            echo "Emails don't match<br>";
            ?>

            <br>
            <input type="password" name="reg_password" placeholder="Password" required>
            <br>
            <input type="password" name="reg_password2" placeholder="Confirm Password" required>

            <?php if(in_array("Your passwords do not match<br>", $error_array))
            echo "Your passwords do not match<br>";
            if(in_array("Your password can only contain english characters or numbers<br>", $error_array))
            echo "Your password can only contain english characters or numbers<br>";
            if(in_array("Your passwords must be between 5 and 30 characters<br>", $error_array))
            echo "Your passwords must be between 5 and 30 characters<br>";
            ?>

            <br>
            <input type="submit" name="register_button" value="register">
            
            <?php
            if(in_array("<span> You're all set! Time to log into E-chinchilla! </span><br>", $error_array))
            echo "<span> You're all set! Time to log into E-chinchilla! </span><br>";
            ?>
        </form>
    </body>
</html>