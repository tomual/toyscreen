<?php $this->load->view('header.php') ?>
<div class="post">
	<?php if($post): ?>
		<img src="<?php echo $post->image ?>" class="screen">
		<h2><?php echo date('l jS M Y g:iA', strtotime($post->posted)) ?></h2>
		<?php echo $post->message ?>
	<?php else: ?>
		<?php if(!$this->uri->segment(2)): ?>
			<p>This site does not have any posts yet.</p>
		<?php else: ?>
			<h2>Post not found</h2>
			<p>The post was not found.</p>
		<?php endif ?>
	<?php endif ?>
</div>
<div class="pagination">
	<?php if(!empty($next)): ?>
		<a href="<?php echo base_url('~' . $site->user->username . '/' . $next->post_id) ?>" class="next">&laquo; Next</a>
	<?php endif ?>
	<?php if(!empty($prev)): ?>
		<a href="<?php echo base_url('~' . $site->user->username . '/' . $prev->post_id) ?>" class="prev">Previous &raquo;</a>
	<?php endif ?>
</div>

<?php $this->load->view('footer.php') ?>