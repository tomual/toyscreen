<?php $this->load->view('header.php') ?>

<h2>Archive</h2>

<?php if(empty($posts)): ?>
	<p>The site has no posts</p>
<?php endif ?>
<ul>
<?php foreach($posts as $post): ?>
	<li><a href="<?php echo  base_url('~' . $this->ion_auth->user()->username . '/' . $post->post_id) ?>"><?php echo date('j M Y', strtotime($post->posted)) ?></a></li>
<?php endforeach ?>
</ul>

<?php $this->load->view('footer.php') ?>