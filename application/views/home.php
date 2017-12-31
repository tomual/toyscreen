<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>tomual</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">

        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo base_url('css/normalize.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('css/main.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/home.css') ?>">
    </head>
    <body>
        <div class="container">
            <header>
                <h1>tomual <small>personal site and portfolio <span>🗗</span></small></h1>
                <img src="<?php echo base_url('images/banner.png') ?>">
            </header>
            <nav>
                <p>↓ select a menu item below.</p>
                <ul>
                    <!-- <li><a href="<?php echo base_url() ?>">home</a></li> -->
                    <li><a href="<?php echo base_url('software') ?>">software</a></li>
                    <li><a href="<?php echo base_url('stuff') ?>">stuff</a></li>
                    <li><a href="<?php echo base_url('gallery') ?>">gallery</a></li>
                    <li><a href="<?php echo base_url('blog') ?>">blog</a></li>
                    <li><a href="<?php echo base_url('about') ?>">about</a></li>
                </ul>
            </nav>
            <section class="whats-new">
                <h2>what's new</h2>
                <br>
                <ul>
                    <li>2017-12-30: new layout</li>
                    <li>2017-11-25: blog // firefox quantum</li>
                    <li>2017-11-07: site to codeingiter</li>
                </ul>
            </section>
            <footer>
                copyright &copy;  tomual 2017 // contact
            </footer>
        </div>


        <!-- <script src="js/vendor/modernizr-3.5.0.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
