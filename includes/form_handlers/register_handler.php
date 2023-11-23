<?php

//decaring vaiables to prevent errors

$fname ="";
$lname ="";
$email ="";
$email2 ="";
$password ="";
$password2 ="";
$date ="";
$error_array = array(); //holds error messages

if(isset($_POST['register_button'])) {
    //registration form values

    
    $fname = strip_tags($_POST['reg_fname']); // strip tags prevents inserting stuff like <head></head> for example
    $fname = str_replace(' ', '', $fname); // remove spaces
    $fname = ucfirst(strtolower($fname));//convert to lowercase then capitalise the first letter
    $_SESSION['reg_fname'] = $fname; // stores first name into session variable

    $lname = strip_tags($_POST['reg_lname']);
    $lname = str_replace(' ', '', $lname);
    $lname = ucfirst(strtolower($lname));
    $_SESSION['reg_lname'] = $lname;

    $email = strip_tags($_POST['reg_email']);
    $email = str_replace(' ', '', $email);
    $_SESSION['reg_email'] = $email;

    $email2 = strip_tags($_POST['reg_email2']);
    $email2 = str_replace(' ', '', $email2);
    $_SESSION['reg_email2'] = $email2;

    $password = strip_tags($_POST['reg_password']);
    $password = str_replace(' ', '', $password);

    $password2 = strip_tags($_POST['reg_password2']);
    $password2 = str_replace(' ', '', $password2);

    $date = date("Y-m-d"); //current date

    if($email == $email2) {
        //check if email is in valid format
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $email = filter_var($email, FILTER_VALIDATE_EMAIL);

        // check if email exists
        $e_check = mysqli_query($con, "SELECT email FROM users WHERE email = '$email'");

        //count number of rows returned
        $num_rows = mysqli_num_rows($e_check); // Contains number of results of the row

        if($num_rows > 0) {
            array_push($error_array, "E-mail already in use<br>");
        }

        }
        else {
            array_push($error_array, "invalid e-mail format<br>");
        }
    }
    else {
        array_push($error_array, "Emails don't match<br>");
    }

    if(strlen($fname) > 25 || strlen($fname) < 2) {
        array_push($error_array, "Your first name must be between 2 and 25 characters<br>");
    }

    if(strlen($lname) > 25 || strlen($lname) < 2) {
        array_push($error_array, "Your last name must be between 2 and 25 characters<br>");
    }

    if($password != $password2) {
        array_push($error_array, "Your passwords do not match<br>");
    }

    else {
        if(preg_match('/[^A-Za-z0-9]/', $password)) {
            array_push($error_array, "Your password can only contain english characters or numbers<br>");
        }
    }

    if(strlen($password) > 30 || strlen($password) < 5) {
        array_push($error_array, "Your passwords must be between 5 and 30 characters<br>");
    }

    if(empty($error_array)) {
        $password = md5($password); //encrypts password before sending to database

        //generate username by concatanating first name and last name

        $username = strtolower($fname . "_" . $lname);

        $check_username_query = mysqli_query($con, "SELECT username FROM users WHERE username = '$username'");

        $i = 0;
        // if username exists add number to username
        while(mysqli_num_rows($check_username_query) != 0) {
            $i++; // add 1 to i
            $username = $username . "_" . $i;
            $check_username_query = mysqli_query($con, "SELECT username FROM users WHERE username = '$username'" );
        }

        //Profile picture assignment
        $rand =rand(1, 3); //random number between 1 and 3

        if($rand == 1)
        $profile_pic = "assets/images/profile_pics/default/pfpdef.jpg";
        else if($rand == 2)
        $profile_pic = "assets/images/profile_pics/default/pfpdef2.jpg";
        else if($rand == 3)
        $profile_pic = "assets/images/profile_pics/default/pfpdef3.jpg";

        $query = mysqli_query($con, "INSERT INTO users VALUES ( '', '$fname', '$lname', '$username', '$email', '$password', '$date', '$profile_pic', '0', '0', 'no', ',')");

        array_push($error_array, "<span> You're all set! Time to log into E-chinchilla! </span><br>");

        //clear session variables

        $_SESSION['reg_fname'] = "";
        $_SESSION['reg_lname'] = "";
        $_SESSION['reg_email'] = "";
        $_SESSION['reg_email2'] = "";
    }
};
?>