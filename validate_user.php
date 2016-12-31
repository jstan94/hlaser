<?php
/**
 * Created by PhpStorm.
 * User: tanzs
 * Date: 27/12/2016
 * Time: 1:56
 */

session_start();

//Set variables.
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'Admin'){
    if ($password == 'admin'){
        $_SESSION['username'] = 'Admin';
        header('location: main.php');
    }

    else {
        header('location: login.php');
    }

}
else {
    header('location: login_error.php');
}