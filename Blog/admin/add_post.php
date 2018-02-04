<?php include 'includes/header.php'; ?>
<?php
//create DB object
$db = new Database();

if (isset($_POST['submit'])){
    $title = mysqli_real_escape_string($db->link, $_POST['title']);
    $body = mysqli_real_escape_string($db->link, $_POST['body']);
    $category = mysqli_real_escape_string($db->link, $_POST['category']);
    $author = mysqli_real_escape_string($db->link, $_POST['author']);
    $tags = mysqli_real_escape_string($db->link, $_POST['tags']);

    if ($title == "" || $body == "" || $category == "" || $author == ""){
        $error = "Please fill all the fields";

    }
    else{
        $query = "insert into posts (title, body, category, author, tags) values ('$title','$body','$category','$author','$tags')";
        $insert_row = $db->insert($query);

    }
}

?>
<?php


//query
$query = "select * from categories";

//select
$categories = $db->select($query);

?>

<form method="post" action="add_post.php">
    <div class="form-group">
        <label >Post Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter Title">
    </div>
    <div class="form-group">
        <label >Post Body</label>
        <textarea name="body" class="form-control" placeholder="Enter Post Body"></textarea>
    </div>
    <div class="form-group">
        <label >Category</label>
        <select class="form-control" name="category">
            <?php while ($row = $categories->fetch_assoc()): ?>
            <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
            <?php endwhile; ?>
        </select>
    </div>
    <div class="form-group">
        <label >Author</label>
        <input type="text" name="author" class="form-control" placeholder="Enter Author Name">
    </div>
    <div class="form-group">
        <label >Tags</label>
        <input type="text" name="tags" class="form-control" placeholder="Enter Tags">
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
    <a href="index.php" class="btn btn-default">Cancel</a>
</form>
<br>

<?php include 'includes/footer.php'; ?>
