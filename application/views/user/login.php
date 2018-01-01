<?php $this->load->view('header.php') ?>

<h1>Login</h1>
<div class="row">
    <div class="col-md-3">

        <?php echo $this->session->flashdata('message') ?>

        <form action="<?php echo base_url('user/login') ?>" method="post" accept-charset="utf-8">
            <div>
                <label for="identity">Email</label>
                <input type="text" class="form-control" name="identity" value="" id="identity">
                <?php echo form_error('identity') ?>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" value="" id="password">
                <?php echo form_error('password') ?>
            </div>

        <br>
        <label class="checkbox checked" for="remember">
            <span class="icons"><span class="first-icon"></span><span class="second-icon fa fa-check"></span></span><input type="checkbox" value="" id="remember" name="remember" data-toggle="checkbox">
            Remember Me
        </label>

        <input type="submit" class="btn btn-primary btn-embossed" name="submit" value="Login">
        </form>
        <br>
        <a href="forgot_password"><?php echo lang('login_forgot_password') ?></a>
    </div>
</div>
<?php $this->load->view('footer.php') ?>