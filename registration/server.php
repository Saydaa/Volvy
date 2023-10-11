<?php
session_start();

// initializing variables

$username = "";
$email = "";
$errors = array();

//connect to the database 

$db = mysqli_connect('localhost', 'root', 'root', 'registration');

// error handling of the connection to database 

if (!$db) {
    // If the connection failed, handle the error
    die('Database connection failed: ' . mysqli_connect_error());
} else {
    // If the connection was successful, you can proceed with database operations
    echo 'Database connection successful!';
}

//REGISTER USER 
if (isset($_POST['reg_user'])) {

    //Escaping special characters to help prevent SQL injection 
    //The sanitized form values are then stored in variables and ready for a safe insertion into mySQL database
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    /*form validation: ensure that the form is correctly filled 
    by addind (array_push()) corresponding error unto $errors array */

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }
}
