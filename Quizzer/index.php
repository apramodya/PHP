<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 8/6/17
 * Time: 1:09 PM
 */
?>

<html>
<head>
    <title>Quizzer</title>
    <link rel="stylesheet" href="bootstrap.css" type="text/css">
    <style>
        li{
            list-style: none;
        }
        a{
            text-decoration: none;
        }
        .container{
            padding:30px 150px;
        }
    </style>
</head>
<body>
    <h2 style="border-bottom: 3px gray solid" class="text-center">Welcome to the Question Bank</h2>
    <div class="container" style="border-bottom: 3px gray solid">
        <p>This checks your PHP knowledge</p>
        <ul>
            <li><strong>Number of Questions: </strong>5</li>
            <li><strong>Type: </strong>Multiple Questions</li>
            <li><strong>Estimated Time: </strong>5 minutes</li>
        </ul>
        <a href="questions.php?n=1" class="start">Start Quiz</a>
    </div>
    <div class="container" style="border-bottom: 3px gray solid">
        <p>This checks your HTML knowledge</p>
        <ul>
            <li><strong>Number of Questions: </strong>10</li>
            <li><strong>Type: </strong>Multiple Questions</li>
            <li><strong>Estimated Time: </strong>10 minutes</li>
        </ul>
        <a href="questions.php?n=1" class="start">Start Quiz</a>
    </div>
</body>
</html>
