<?php

session_start();
$error='';

if(isset($_POST['login'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
        $error="Username or Password is invalid";
    }
    else{
        $username=$_POST['username'];
        $password=$_POST['password'];
        // Establishing Connection with Server by passing server_name, user_id and password as a parameter
        $connection = mysql_connect("localhost", "root", "");
        // To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        $db = mysql_select_db("events_db", $connection);
        $query = mysql_query("select * from users where user_password='$password' AND user_name='$username'", $connection);
        $rows = mysql_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user']=$username;
            header("location: ../index.php");
        }else{
            $error="Username or Password is invalid";
        }
        mysql_close($connection); // Closing Connection
    }
}



?>