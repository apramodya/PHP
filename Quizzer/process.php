<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 8/6/17
 * Time: 10:23 PM
 */
include 'database.php';
session_start();

if (!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
}

if ($_POST){
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];
    $next = $number+1;

    $query = "SELECT * FROM questions";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $total = $result->num_rows;

    $query = "SELECT * FROM choices WHERE question_number = $number AND is_correct = 1";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $row = $result->fetch_assoc();
    $correct_choice = $row['id'];

    if ($correct_choice == $selected_choice) $_SESSION['score']++;

    if ($number == $total){
        header("Location: final.php");
        exit();
    }
    else{
        header("Location: questions.php?n=".$next);
    }


}