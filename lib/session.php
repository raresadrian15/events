<?php

include('customer.php');
session_start();// Starting Session

    if(isset($_SESSION['login_user'])) {
        // Establishing Connection with Server by passing server_name, user_id and password as a parameter
        $connection = mysql_connect("localhost", "root", "");
        // Selecting Database
        $db = mysql_select_db("events_db", $connection);
        // Storing Session
        $user_check = $_SESSION['login_user'];
        // SQL Query To Fetch Complete Information Of User
        $ses_sql = mysql_query("select * from users where user_name='$user_check'", $connection);

        $row = mysql_fetch_assoc($ses_sql);
        $user_name = $row['user_name'];
        $user_password = $row['user_password'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $adress = $row['adress'];
        $phone = $row['phone'];
        $email= $row['email'];
        $customer = new Customer($user_name, $user_password, $first_name, $last_name, $adress, $phone, $email); //!!!!!
        $_SESSION['user']= $customer;
        if (!isset($customer)) {
            mysql_close($connection); // Closing Connection
           // header('Location: index.php'); // Redirecting To Home Page
        }
        mysql_close($connection); // Closing Connection
    }
?>

