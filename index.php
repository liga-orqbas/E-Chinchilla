<?php
require './config/config.php';

//decaring vaiables to prevent errors

$fname ="";
$lname ="";
$email ="";
$email2 ="";
$password ="";
$password2 ="";
$date ="";
$error_array = ""; //holds error messages

if(isset($_POST['register_button'])) {
    //registration form values

    
    $fname = strip_tags($_POST['reg_fname']); // strip tags prevents inserting stuff like <head></head> for example
    $fname = str_replace(' ', '', $fname); // remove spaces
    $fname = ucfirst(strtolower($fname));//convert to lowercase then capitalise the first letter

    $lname = strip_tags($_POST['reg_lname']);
    $lname = str_replace(' ', '', $lname);
    $lname = ucfirst(strtolower($lname));

    $email = strip_tags($_POST['reg_email']);
    $email = str_replace(' ', '', $email);
    $email = ucfirst(strtolower($email));

    $email2 = strip_tags($_POST['reg_email2']);
    $email2 = str_replace(' ', '', $email2);
    $email2 = ucfirst(strtolower($email2));

    $password = strip_tags($_POST['reg_password']);
    $password = str_replace(' ', '', $password);
    $password = ucfirst(strtolower($password));

    $password2 = strip_tags($_POST['reg_password2']);
    $password2 = str_replace(' ', '', $password2);
    $password2 = ucfirst(strtolower($password2));
}
?>

<html>
    <head>
        <title>
            Social media clone
        </title>
    </head>
    <body>
        Hello world
    </body>
</html>