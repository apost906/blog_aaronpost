<?php 

$conn = new mysqli('localhost',DB_USERNAME,DB_PASSWORD,DB_NAME);

$sql = "SELECT * FROM posts WHERE post_id={$_GET['id']}";

$results = $conn->query($sql);

$post = $results->fetch_assoc();

$post_title = $post['post_title'];

$post_text = $post['post_text'];

?>

<h2><?php echo $post_title; ?></h2>
<p><?php echo $post_text; ?></p>