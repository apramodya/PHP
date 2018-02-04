<?php include 'includes/header.php'; ?>
<?php
//id
$id = $_GET['id'];

//create DB object
$db = new Database();

//query
$query = "select * from categories where id =".$id;

//select
$category = $db->select($query)->fetch_assoc();

//query
$query = "select * from categories";

//select
$categories = $db->select($query);

?>
<?php

if (isset($_POST['submit'])){
    $category = mysqli_real_escape_string($db->link, $_POST['category']);

    if ($category == '' ) $error = "Please add a category";
    else{
        $query = "UPDATE categories SET name = '$category' WHERE id = '$id'";
        $update_row = $db->update($query);

    }
}
?>
<form method="post" action="edit_category.php?id=<?php echo $id?>">
    <div class="form-group">
        <label >Category Name</label>
        <input type="text" name="category" class="form-control" placeholder="Enter Title" value="<?php echo $category['name'];?>">
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
    <a href="index.php" class="btn btn-default">Cancel</a>
    <button type="submit" name="submit" class="btn btn-danger">Delete</button>
</form>
<br>

<?php include 'includes/footer.php'; ?>
