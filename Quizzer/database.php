<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 8/6/17
 * Time: 10:24 PM
 */

$host = 'localhost';
$dbname = 'quizzer';
$user = 'apramodya';
$pw = '';

$mysqli = new mysqli($host,$user,$pw,$dbname);

if ($mysqli->connect_error){
    printf("Connect failed %s\n", $mysqli->connect_error);
    exit();
}