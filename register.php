<?php
require './config/config.php';
require './includes/form_handlers/register_handler.php';
require './includes/form_handlers/login_handler.php';
?>

<!DOCTYPE html>
    <head>
        <title>Welcome to E-Chinchilla!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital@1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <script src="./assets/js/register.js"></script>


        <link rel="stylesheet" type="text/css" href="./assets/css/register_style.css">


    </head>
    <body>

        <?php 
            if(isset($_POST['register_button'])) {
                echo '<script>
                    $(document).ready(function() {
                        $("#first").hide();
                        $("#second").show();
                    });
                </script>';
            }
        ?>

        <div class="container">
        <div class="login-container">
            <div class="header">
                <span class="main-text">E-Chinchilla</span>
                <span class="additional-text">For all your chinchilla needs</span>
            </div>
            <div id="first">
            <form class="login-form" action="register.php" method="POST">
            <input type="email" name="log_email" placeholder="Email Adress" value="<?php if(isset($_SESSION['log_email'])) {
                echo $_SESSION['log_email'];
            }?>" required>
            <br>
            <input type="password" name="log_password" placeholder="Password">
            <br>
            <input type="submit" name="login_button" value="login">

            <?php if(in_array("Email or password was incorrect<br>", $error_array)) echo '<div class="error"></div>Email or password was incorrect<br>'; ?>
            <br>
            <a href="#" id="signup" class="signup">Need an account? register here!</a>
        </form>
            </div>

        <div id="second">
        <form class="login-form" action="register.php" method="post">
            <input type="text" name="reg_fname" placeholder="First name" value="<?php if(isset($_SESSION['reg_fname'])) {
                echo $_SESSION['reg_fname'];
            }?>" required>

            <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array))
            echo '<div class="error">Your first name must be between 2 and 25 characters<br></div>';
            ?>

            <br>
            <input type="text" name="reg_lname" placeholder="Last name" value="<?php if(isset($_SESSION['reg_lname'])) {
                echo $_SESSION['reg_lname'];
            }?>" required>

            <?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array))
            echo '<div class="error">Your last name must be between 2 and 25 characters<br></div>';
        
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
            echo '<div class="error">E-mail already in use<br></div>';
            if(in_array("invalid e-mail format<br>", $error_array))
            echo '<div class="error">invalid e-mail format<br></div>';
            if(in_array("Emails don't match<br>", $error_array))
            echo '<div class="error">Emails do not match<br></div>';
            ?>

            <br>
            <input type="password" name="reg_password" placeholder="Password" required>
            <br>
            <input type="password" name="reg_password2" placeholder="Confirm Password" required>

            <?php if(in_array("Your passwords do not match<br>", $error_array))
            echo '<div class="error">Your passwords do not match<br></div>';
            if(in_array("Your password can only contain english characters or numbers<br>", $error_array))
            echo '<div class="error">Your password can only contain english characters or numbers<br></div>';
            if(in_array("Your passwords must be between 5 and 30 characters<br>", $error_array))
            echo '<div class="error">Your passwords must be between 5 and 30 characters<br></div>';
            ?>

            <br>
            <input type="submit" name="register_button" value="register">
            
            <?php
            if(in_array("<span> You're all set! Time to log into E-chinchilla! </span><br>", $error_array))
            echo "<span> You're all set! Time to log into E-chinchilla! </span><br>";
            ?>
            <br>
            <a href="#" id="signin" class="signin">Already have an account? Sign in here!</a>
        </form>
        </div>
        </div>

        </div>
        <a href="https://github.com/OROBA5"><img class="github" src="./assets/images/login_form/github.png" alt="github account"></a>
    </body>
</html>