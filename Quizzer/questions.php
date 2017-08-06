<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 8/6/17
 * Time: 10:06 PM
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
p{
    padding-top:30px;
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
            <h4>Question 1 of 5</h4>
        <p>What does PHP stands for? </p>
        <form method="post" action="process.php">
            <ul>
                <li><input name="choice" type="radio" value="1"> PHP Hypertext Preprocessor</li>
                <li><input name="choice" type="radio" value="1"> Personal Home Page</li>
                <li><input name="choice" type="radio" value="1"> Private Home Page</li>
                <li><input name="choice" type="radio" value="1"> Personal Hypertext Preprocessor</li>
            </ul>
            <input type="submit" value="Submit" class="btn bg-info">
        </form>
        </div>
    </div>
</body>
</html>