<?php
session_start();

// initializing variables

$username = "";
$email = "";
$errors = array();

//connect to the database 

$db = mysqli_connect('localhost', 'root', 'root', 'registration');
if (!$db) {
    // If the connection failed, handle the error
    die('Database connection failed: ' . mysqli_connect_error());
} else {
    // If the connection was successful, you can proceed with database operations
    echo 'Database connection successful!';
}
