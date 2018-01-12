<?php $this->load->view('header.php') ?>

<h2>Board</h2>

<?php if($this->input->method() != 'post'): ?>
	<button id="board-form-button" onclick="openBoardForm()">Post a Message</button>
<?php endif ?>
<div id="board-form" style="<?php echo ($this->input->method() != 'post') ? 'display:none' : '' ?>">
	<?php echo form_open() ?>
		<label>Name</label>
		<input type="text" name="name">
		<?php echo form_error('name') ?>
		<label>Message</label>
		<textarea name="message" rows="4"></textarea>
		<?php echo form_error('message') ?>
		<label>Captcha</label>
		<?php echo $captcha['image'] ?>
		<input type="text" name="captcha" value="" />
		<?php echo form_error('captcha') ?>
		<br>
		<button type="submit">Post</button>
	<?php echo form_close() ?>
</div>

<div class="messages">
	<?php foreach($messages as $message): ?>
		<div class="message">
			<b><?php echo $message->name ?></b> <small><?php echo date('d M Y @ H:ia', strtotime($message->posted)) ?></small><br>
			<?php echo $message->message ?>
		</div>
	<?php endforeach ?>
</div>

<?php $this->load->view('footer.php') ?>