<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Title</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo base_url('css/normalize.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('css/main.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css') ?>">
    </head>
    <body>
        <div class="container">
            <header>
                <h2>Toyscreen</h2>
                <?php if($this->ion_auth->logged_in()): ?>
                    <?php var_dump($this->ion_auth->user()) ?>
                    Hello, <?php echo $this->ion_auth->user()->username ?>
                    <a href="<?php echo base_url('user/logout') ?>">Log Out</a>
                <?php else: ?>
                    <a href="<?php echo base_url('user/login') ?>">Log In</a>
                    <a href="<?php echo base_url('user/register') ?>">Register</a>
                <?php endif ?>
            </header>
        </div>

        <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url('js/vendor/modernizr-2.8.3.min.js') ?>"></script>
        <script src="<?php echo base_url('js/plugins.js') ?>"></script>
        <script src="<?php echo base_url('js/main.js') ?>"></script>

        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-89678350-1','auto');ga('send','pageview');
        </script>
    </body>
</html>
