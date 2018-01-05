<?php $this->load->view('header_home.php') ?>

<div class="auth">
    <?php if($this->ion_auth->logged_in()): ?>
        Hello, <a href="<?php echo base_url('~' . $this->ion_auth->user()->username) ?>"><?php echo $this->ion_auth->user()->username ?></a>
        <a href="<?php echo base_url('user/logout') ?>"><button class="logout">Log Out</button></a>
    <?php else: ?>
        <a href="<?php echo base_url('user/login') ?>"><button>Log In</button></a>
        <a href="<?php echo base_url('user/register') ?>"><button>Register</button></a>
    <?php endif ?>
</div>

<h1>Share your daily game screenshot</h1>

<p>Create your personal game screenshot log - post a screenshot every day to see your progress over time. Simply provide an image URL and a message for the day!</p>

<a href="<?php echo base_url('user/register') ?>">Get started</a>

<?php $this->load->view('footer_home.php') ?>