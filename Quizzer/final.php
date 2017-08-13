<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 8/6/17
 * Time: 10:23 PM
 */

session_start();

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
            margin-top: 20px;
        }
        p{
            padding-top:10px;
        }
        .container{
            padding:30px 150px ;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

    </style>
</head>
<body>
<h2 style="border-bottom: 3px gray solid" class="text-center">Welcome to the Question Bank</h2>
<div class="">
    <div class="container" style="background: #f4f4f4">
        <h2>You have completed the Quiz</h2>
        <p>Congratulations!</p>
        <p>Final Score: <?php echo $_SESSION['score']; ?></p>
        <?php session_destroy(); ?>
<a href="questions.php?n=1" class="btn btn-default">Take Again</a>
    </div>
</div>
</body>
</html>
