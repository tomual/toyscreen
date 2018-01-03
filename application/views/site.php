<?php $this->load->view('header.php') ?>

<div class="container">
	
	<div class="header">
		<h1><?php echo $site->title ?></h1>
	</div>
	<div class="menu">
		<ul>
			<li><a href="<?php echo base_url("~{$site->user->username}") ?>">Home</a></li>
			<li><a href="<?php echo base_url("~{$site->user->username}/archive") ?>">Archive</a></li>
			<li><a href="<?php echo base_url("~{$site->user->username}/board") ?>">Board</a></li>
			<li><a href="<?php echo base_url("~{$site->user->username}/info") ?>">Info</a></li>
		</ul>
	</div>
	<div class="main">
		<?php if($post): ?>
			<img src="<?php echo $post->image ?>">
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
	</div>

</div>

<?php $this->load->view('footer.php') ?>