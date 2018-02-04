<?php include 'includes/header.php'; ?>
<?php
//create DB object
$db = new Database();

if (isset($_POST['submit'])){
    $category = mysqli_real_escape_string($db->link, $_POST['category']);

    if ($category == '' ) $error = "Please add a category";
    else{
        $query = "insert into categories (name) values ('$category')";
        $insert_row = $db->insert($query);

    }
}

?>
<form method="post" action="add_category.php">
    <div class="form-group">
        <label >Category Name</label>
        <input type="text" name="category" class="form-control" placeholder="Enter Title">
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
    <a href="index.php" class="btn btn-default">Cancel</a>
</form>
<br>

<?php include 'includes/footer.php'; ?>
