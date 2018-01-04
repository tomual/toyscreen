<?php $this->load->view('header.php') ?>

<?php if($post): ?>
	<img src="<?php echo $post->image ?>" class="screen">
	<h2><?php echo $post->posted ?></h2>
	<?php echo $post->message ?>
<?php else: ?>
	<?php if(!$this->uri->segment(2)): ?>
		<p>This site does not have any posts yet.</p>
	<?php else: ?>
		<h2>Post not found</h2>
		<p>The post was not found.</p>
	<?php endif ?>
<?php endif ?>

<?php $this->load->view('footer.php') ?>