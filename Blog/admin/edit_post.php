<?php include 'includes/header.php'; ?>
<?php
//id
$id = $_GET['id'];

//create DB object
$db = new Database();

//query
$query = "select * from posts where id =".$id;

//select
$post = $db->select($query)->fetch_assoc();

//query
$query = "select * from categories";

//select
$categories = $db->select($query);

?>

<form method="post" action="edit_post.php">
    <div class="form-group">
        <label >Post Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter Title" value="<?php echo $post['title'];?>">
    </div>
    <div class="form-group">
        <label >Post Body</label>
        <textarea name="body" class="form-control " placeholder="Enter Post Body" style="text-align: justify">
            <?php echo $post['body'];?>
        </textarea>
    </div>
    <div class="form-group">
        <label >Category</label>
        <select class="form-control" name="category">
            <?php while ($row = $categories->fetch_assoc()): ?>
                <?php if ($row['id'] == $post['category']) $selected = 'selected'; else $selected = ''; ?>
                <option <?php echo $selected ?> ><?php echo $row['name']; ?></option>
            <?php endwhile; ?>
        </select>
    </div>
    <div class="form-group">
        <label >Author</label>
        <input type="text" name="author" class="form-control" placeholder="Enter Author Name" value="<?php echo $post['author'];?>">
    </div>
    <div class="form-group">
        <label >Tags</label>
        <input type="text" name="tag" class="form-control" placeholder="Enter Tags" value="<?php echo $post['tags'];?>">
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
    <a href="index.php" class="btn btn-default">Cancel</a>
    <button type="submit" name="submit" class="btn btn-danger">Delete</button>
</form>
<br>

<?php include 'includes/footer.php'; ?>
