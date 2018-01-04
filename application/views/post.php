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
	<div class="main post">
		<h2>Post</h2>
		<?php echo form_open('post') ?>
			<label>Image URL</label>
			<input type="text" name="image">
			<?php echo form_error('image') ?>
			<label>Message</label>
			<textarea name="message"></textarea>
			<?php echo form_error('message') ?>
			<input type="submit" value="Post">
		<?php echo form_close() ?>
	</div>

</div>

<?php $this->load->view('footer.php') ?>