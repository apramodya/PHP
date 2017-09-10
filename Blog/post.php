<?php include 'includes/header.php';

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

<div class="blog-post">
    <h2 class="blog-post-title"><?php echo $post['title']; ?></h2>
    <p class="blog-post-meta"><?php echo formatDate($post['date']); ?> by <a href="#"><?php echo $post['author']; ?></a></p>
    <p><?php echo $post['body']; ?></p>
</div><!-- /.blog-post -->



<?php include 'includes/footer.php';?>
