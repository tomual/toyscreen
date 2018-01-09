<?php $this->load->view('header.php') ?>

<h2>Settings</h2>
<?php echo form_open('settings') ?>
	<label>Site Title</label>
	<input type="text" name="title" value="<?php echo set_value('title', $site->title) ?>">
	<?php echo form_error('title') ?>
	<label>Profile Image URL</label>
	<input type="text" name="avatar" value="<?php echo set_value('avatar', $site->avatar) ?>">
	<?php echo form_error('avatar') ?>
	<label>Backgroung Image URL</label>
	<input type="text" name="background" value="<?php echo set_value('background', $site->background) ?>">
	<?php echo form_error('background') ?>
	<label>Info Text</label>
	<textarea name="info"><?php echo set_value('info', $site->info) ?></textarea>
	<?php echo form_error('info') ?>
	<br>
	<input type="submit" value="Save">
<?php echo form_close() ?>

<?php $this->load->view('footer.php') ?>