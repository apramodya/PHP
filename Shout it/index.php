<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 8/5/17
 * Time: 7:40 PM
 */

include 'database.php';

$query = "SELECT * FROM shouts ORDER BY id DESC";
$shouts = mysqli_query($con, $query);
?>

<html>
    <head>
        <title>Shout it!</title>
        <link href="bootstrap.css" type="text/css" rel="stylesheet">
        <style>
            #messagebox{
                margin: 10px auto;
                overflow: auto;
                min-height: 40px;
                max-height: 300px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="jumbotron">
                <h2 class="text-center">Shout it</h2>
                <div class="row" id="messagebox">
                    <div class="col-sm-12 pull-right" >
                        <ul class="list-group">
                            <?php while ($row = mysqli_fetch_assoc($shouts)) : ?>
                                <li class="list-group-item"><span><?php echo $row['time'] ?> -</span> <strong><?php echo $row['user'] ?>:</strong> <?php echo $row['message'] ?></li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div id="input" class="col-sm-offset-3 col-sm-6">
                        <?php  if (isset($_GET['error'])):?>
                            <div style="color: red; padding: 5px ">
                                <?php echo $_GET['error'] ?>
                            </div>
                        <?php endif ?>
                        <form method="post" action="process.php" class="form-horizontal">
                            <input class="form-control" type="text" name="user" placeholder="Enter you name">
                            <input class="form-control" type="text" name="message" placeholder="Enter you message">
                            <br><br>
                            <input type="submit" name="submit" value="Shout it out" class="btn btn-default center-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
