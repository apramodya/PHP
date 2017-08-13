<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 8/6/17
 * Time: 9:58 AM
 */

include 'database.php';

if (isset($_POST['submit'])){
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    date_default_timezone_set('Asia/Colombo');
    $time = date('h:m:s',time());

    if (!isset($user) || $user == '' || !isset($message) || $message == '') {
        $error = "Please enter a name and your message";
        header("Location: index.php?error=".$error);
    }
    else {
        $query = "INSERT INTO shouts (user,message,time) VALUES ('$user','$message','$time')";

        if (!mysqli_query($con, $query)){
            die('Error '. mysqli_error($con));
        }
        else{
            header("Location: index.php");
            exit();
        }
    };
}