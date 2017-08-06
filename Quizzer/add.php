<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 8/6/17
 * Time: 10:37 PM
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
    <div class="container">
        <h3>Add Questions</h3>
        <form method="post" action="add.php" >
            <div class="form-group">
                <label>Question Number: </label>
                <input type="number" name="question_number" class="form-control">
            </div>
            <div class="form-group">
                <label>Question: </label>
                <input type="text" name="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Choice #1: </label>
                <input type="text" name="choice1" class="form-control">
            </div>
            <div class="form-group">
                <label>Choice #2: </label>
                <input type="text" name="choice2" class="form-control">
            </div>
            <div class="form-group">
                <label>Choice #3: </label>
                <input type="text" name="choice3" class="form-control">
            </div>
            <div class="form-group">
                <label>Choice #4: </label>
                <input type="text" name="choice4" class="form-control">
            </div>
            <div class="form-group">
                <label>Correct Choice Number: </label>
                <input type="number" name="answer" class="form-control">
            </div>
            <div>
                <input type="submit" name="Submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>
