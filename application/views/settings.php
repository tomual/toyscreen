<?php $this->load->view('header.php') ?>

<h2>Settings</h2>
<?php echo form_open('post') ?>
	<label>Site Name</label>
	<input type="text" name="name">
	<?php echo form_error('name') ?>
	<label>Backgroung Image URL</label>
	<input type="text" name="background">
	<?php echo form_error('background') ?>
	<br>
	<input type="submit" value="Save">
<?php echo form_close() ?>

<?php $this->load->view('footer.php') ?>