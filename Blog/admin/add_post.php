<?php include 'includes/header.php'; ?>
<?php
//create DB object
$db = new Database();

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
            <option><?php echo $row['name'];?></option>
            <?php endwhile; ?>
        </select>
    </div>
    <div class="form-group">
        <label >Author</label>
        <input type="text" name="author" class="form-control" placeholder="Enter Author Name">
    </div>
    <div class="form-group">
        <label >Tags</label>
        <input type="text" name="tag" class="form-control" placeholder="Enter Tags">
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
    <a href="index.php" class="btn btn-default">Cancel</a>
</form>
<br>

<?php include 'includes/footer.php'; ?>
