<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 8/6/17
 * Time: 10:37 PM
 */

include 'database.php';

if ($_POST['Submit']){
    $question_number = $_POST['question_number'];
    $question_text = $_POST['text'];
    //choices
    $choices = array();
    $choices[1] = $_POST['choice1'];
    $choices[2] = $_POST['choice2'];
    $choices[3] = $_POST['choice3'];
    $choices[4] = $_POST['choice4'];

    $correct_choice = $_POST['answer'];

    $query = "INSERT INTO questions (question_number,text) VALUES ('$question_number','$question_text')";
    $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

    if ($insert_row){
        foreach ($choices as $choice => $value){
            if ($value != ''){
                if ($correct_choice == $choice) $is_correct = 1;
                else $is_correct = 0;
                $query = "INSERT INTO choices(question_number,is_correct,text) VALUES ('$question_number','$is_correct','$value')";
                $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
                if ($insert_row) continue;
                else die('Error '.$mysqli->error.__LINE__);
            }
        }
        $msg = "Question has been added";
    }
}
$query = "SELECT * FROM questions";
$questions = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $questions->num_rows;
$next = $total+1;
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
    <h2 style="border-bottom: 3px gray solid" class="text-center"><a href="index.php" style="text-decoration: none; color: black">Welcome to the Question Bank</a></h2>
    <div class="container">
        <h3>Add Questions</h3>
        <?php if (isset($msg)) echo '<p>'.$msg.'</p>'?>
        <form method="post" action="add.php" >
            <div class="form-group">
                <label>Question Number: </label>
                <input type="text" name="question_number" class="form-control" value="<?php echo $next;?>" disabled >
            </div>
            <div class="form-group">
                <label>Question: </label>
                <input type="text" name="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Choice #1: </label>
                <input type="text" name="choice1" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Choice #2: </label>
                <input type="text" name="choice2" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Choice #3: </label>
                <input type="text" name="choice3" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Choice #4: </label>
                <input type="text" name="choice4" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Correct Choice Number: </label>
                <input type="number" name="answer" class="form-control" required placeholder="1">
            </div>
            <div>
                <input type="submit" name="Submit" class="btn btn-primary">
                <input type="reset" name="reset" class="btn btn-primary">
            </div>
        </form>

    </div>
</body>
</html>
