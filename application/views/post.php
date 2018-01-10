<?php $this->load->view('header.php') ?>

<h2>Post</h2>
<?php echo form_open('post') ?>
	<label>Image URL</label>
	<input type="text" name="image">
	<?php echo form_error('image') ?>
	<label>Message</label>
	<textarea name="message" rows="7"></textarea>
	<?php echo form_error('message') ?>
	<br>
	<input type="submit" value="Post">
<?php echo form_close() ?>

<?php $this->load->view('footer.php') ?>