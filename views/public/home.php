<div id="feed">
	<h3>Recent Posts</h3>
	<div class="post first-post">
	</div>
	<?php 
	// Connect to the database
	$conn = new mysqli('localhost',DB_USERNAME,DB_PASSWORD,DB_NAME);
	
	// Construct the query (SQL)
	$sql = "SELECT * FROM posts ORDER BY post_id DESC ";
	
	// Execute the query
	$results = $conn->query($sql);
	
	$post = $results->fetch_assoc();
	
	$postid = $post['post_id'];
	echo "<div class=\"post\">";
	echo "<h4><a href=\"./?p=public/post&amp;id=$postid\">";
	echo $post['post_title'];
	echo "</a></h4><h6> Posted on ";
	echo formate_date($post['post_datepublished']);
	echo "</h6><p>";
	echo $post['post_text'];
	echo "</p></div>";
	
	while($post = $results->fetch_assoc())	{
		$postid = $post['post_id'];
		echo "<div class=\"post\">";
		echo "<h4><a href=\"./?p=public/post&amp;id=$postid\">";
		echo $post['post_title'];
		echo "</a></h4><h6> Posted on ";
		echo formate_date($post['post_datepublished']);
		echo "</h6></div>";
	}
	
	?>
</div>