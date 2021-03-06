<?php $this->load->view('header_home.php') ?>

<h1>Register</h1>
<div class="row">
    <div class="col-md-3">

        <span class="error"><?php echo $message?></span>

        <form action="<?php echo base_url('user/register') ?>" method="post" accept-charset="utf-8">

            <div class="<?php if(form_error('identity')) echo 'has-error' ?>">
                <label>Username</label>
                <input type="text" class="form-control" name="identity" value="<?php echo set_value('identity') ?>">
                <?php echo form_error('identity') ?>
            </div>

            <div class="<?php if(form_error('first_name')) echo 'has-error' ?>">
                <label>First Name</label>
                <input type="text" class="form-control" name="first_name" value="<?php echo set_value('first_name') ?>">
                <?php echo form_error('first_name') ?>
            </div>
            
            <div class="<?php if(form_error('email')) echo 'has-error' ?>">
                <label>E-mail Address</label>
                <input type="email" class="form-control" name="email" value="<?php echo set_value('email') ?>">
                <?php echo form_error('email') ?>
            </div>

            <div class="<?php if(form_error('password')) echo 'has-error' ?>">
                <label>Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo set_value('password') ?>">
                <?php echo form_error('password') ?>
            </div>

            <div class="<?php if(form_error('password2')) echo 'has-error' ?>">
                <label>Password (Confirm)</label>
                <input type="password" class="form-control" name="password2" value="<?php echo set_value('password2') ?>">
                <?php echo form_error('password2') ?>
            </div>

            <input type="submit" class="btn btn-primary btn-embossed" name="submit" value="Register">
        </form>
    </div>
</div>

<?php $this->load->view('footer_home.php') ?>