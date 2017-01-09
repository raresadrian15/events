<?php
$error='';

if(isset($_POST['register'])){
    if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])){
        $error="Invalid Data";
        header("location: ../screens/login.php");
    }
    else {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        // Establishing Connection with Server by passing server_name, user_id and password as a parameter
        $connection = mysql_connect("localhost", "root", "");
        // To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $email = stripslashes($email);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        $email = mysql_real_escape_string($email);

        $db = mysql_select_db("events_db", $connection);
        $query = mysql_query("INSERT INTO users" . "(tip, user_name, user_password, first_name,
        last_name, phone, email)" . "VALUES ('user','$username', '$password', '', '', '', '$email')", $connection);
        if (!$query) {
            die('Could not enter data: ' . mysql_error());
        } else {
            echo "<i>New Accout successfully created! </i>" ."<b id='login'><a href='../screens/login.php'>Log In</a></b>";
        }

        mysql_close($connection); // Closing Connection
    }
}

?>