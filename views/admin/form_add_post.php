<?php 
// Check for post info in session data
$post_title = '';
$post_text = '';

extract($_SESSION);

// Remove band info from session data
unset($_SESSION['post_title']);
unset($_SESSION['post_text']);

?>

<h2>Add a new post</h2>
<form action="actions/add_post.php" method="post" class="form-horizontal">
	<div class="control-group">
		<div class="controls">
			<input class="span4" type="text" id="post_title" name="post_title" placeholder="Title" value="<?php echo $post_title; ?>" />
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<textarea name="post_text"><?php echo $post_text; ?></textarea>
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-success">Submit</button>
		<button type="button" class="btn" onclick="window.history.go(-1)">Cancel</button>
	</div>
</form>