<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 8/14/17
 * Time: 8:35 PM
 */

include 'includes/header.php';
//create DB object
$db = new Database();

//check url or category
if (isset($_GET['category'])) {
    $category = $_GET['category'];
    //query
    $query = "select * from posts where category=".$category ;

    //select
    $posts = $db->select($query);
} else {
    //query
    $query = "select * from posts";

    //select
    $posts = $db->select($query);
}

//query
$query = "select * from categories";

//select
$categories = $db->select($query);

?>
<?php if ($posts): ?>
    <?php while ($row = $posts->fetch_assoc()): ?>
        <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
            <p class="blog-post-meta"><?php echo formatDate($row['date']); ?> by <a
                        href="#"><?php echo $row['author']; ?></a></p>
            <p><?php echo shortenText($row['body'], 500); ?></p>
            <a href="post.php?id=<?php echo urlencode($row['id']); ?>" class="readmore">Read More</a>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    <p>No any posts yet</p>
<?php endif; ?>


<? include 'includes/footer.php'; ?>