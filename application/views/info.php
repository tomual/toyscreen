<?php $this->load->view('header.php') ?>

<h2>Info</h2>
<?php if(!empty($site->avatar)): ?>
	<div class="avatar"><img src="<?php echo $site->avatar ?>"></div>
<?php endif ?>
<?php echo nl2br($site->info) ?>

<?php $this->load->view('footer.php') ?>