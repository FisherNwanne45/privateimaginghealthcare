<?php
include_once('session.php');
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    } else {
        // Define $username and $password
        $username = $_POST['username'];
        $password = $_POST['password'];
        // Establishing Connection with Server by passing server_name, user_id and password as a parameter

        // To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
        // Selecting Database

        // SQL query to fetch information of registered users and find user match
        $query = "SELECT * FROM login WHERE password='$password' AND username='$username'";
        $result = mysqli_query($connection, $query);
        $rows = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);


        if ($rows == 1) {
            $_SESSION['login_user'] = $username; // Initializing Session
            header("location: index.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
        }
        mysqli_close($connection); // Closing Connection
    }
}
