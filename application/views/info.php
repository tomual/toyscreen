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
		<h2>Info</h2>
	</div>

</div>

<?php $this->load->view('footer.php') ?>