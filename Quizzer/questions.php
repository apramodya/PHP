<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 8/6/17
 * Time: 10:06 PM
 */
include 'database.php';

// get question
$number = $_GET['n'];
$query = "SELECT * FROM questions WHERE question_number = $number";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$question = $result->fetch_assoc();

// get choices
$query = "SELECT * FROM choices WHERE question_number = $number";
$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
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
            <h4>Question <?php echo $number ?> of 5</h4>
        <p><?php echo $question['text'] ?> </p>
        <form method="post" action="process.php">
            <ul>
                <?php  while ($row = $choices->fetch_assoc()): ?>
                    <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"><?php echo " ".$row['text']?></li>
                <?php endwhile; ?>
            </ul>
            <input type="submit" value="Submit" class="btn bg-info">
        </form>
        </div>
    </div>
</body>
</html>