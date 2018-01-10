<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Toyscreen - Share your daily game screenshots</title>
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

        <div class="auth">
            <?php if($this->ion_auth->logged_in()): ?>
                Hello, <a href="<?php echo base_url('~' . $this->ion_auth->user()->username) ?>"><?php echo $this->ion_auth->user()->username ?></a>
                <a href="<?php echo base_url('user/logout') ?>"><button class="logout">Log Out</button></a>
            <?php else: ?>
                <a href="<?php echo base_url('user/login') ?>"><button>Log In</button></a>
                <a href="<?php echo base_url('user/register') ?>"><button>Register</button></a>
            <?php endif ?>
        </div>

        <div class="container home">
        <header>
            <a href="<?php echo base_url() ?>"><img src="https://tomual.com/images/toybox/dogs/dog-1.png"></a>
            <a href="<?php echo base_url() ?>"><h2>toyscreen</h2></a>
        </header>