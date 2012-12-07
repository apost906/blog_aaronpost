<?php
// Connect to the database
$conn = new mysqli('localhost',DB_USERNAME,DB_PASSWORD,DB_NAME);

// Construct the query (SQL)
$sql = "SELECT * FROM posts ORDER BY post_id DESC ";

// Execute the query
$results = $conn->query($sql);

?>
<table class="table table-striped table-condensed table-bordered">
	<tr>
		<th>Post</th>
		<th>Date Posted</th>
	</tr>
<?php while($post = $results->fetch_assoc()): ?>
	<tr>
		<td><?php echo $post['post_title'] ?></td>
		
		<td><?php echo formate_date($post['post_datepublished']); ?></td>
		<td class="actions">
			<a class="btn btn-warning btn-mini" title="EDIT" href="./?p=admin/form_edit_post&amp;id=<?php echo $post['post_id']?>"><i class="icon-edit icon-white"></i></a>
			<a class="btn btn-danger btn-mini" title="DELETE" href="actions/delete_post.php?id=<?php echo $post['post_id']?>"><i class="icon-trash icon-white"></i></a>
		</td>
	</tr>
<?php endwhile; ?>
</table>
<a class="btn btn-primary" href="./?p=admin/form_add_post"><i class="icon-plus icon-white"></i> Add Post</a>