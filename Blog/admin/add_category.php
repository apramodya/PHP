<?php include 'includes/header.php'; ?>

<form method="post" action="add_category.php">
    <div class="form-group">
        <label >Category Name</label>
        <input type="text" name="title" class="form-control" placeholder="Enter Title">
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
    <a href="index.php" class="btn btn-default">Cancel</a>
</form>
<br>

<?php include 'includes/footer.php'; ?>
