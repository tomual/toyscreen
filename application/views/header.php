<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo empty(has_meta('title')) ? '' : get_meta('title') . ' | ' ?> Tomual</title>
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
        <script src="<?php echo base_url('js/vendor/modernizr-2.8.3.min.js') ?>"></script>
    </head>
    <body>
        <div class="container">
            <header>
                <span class="site-name">tomual <small>personal site and portfolio <span>🗗</span></small></span>
            </header>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url() ?>">home</a></li>
                    <li><a href="<?php echo base_url('software') ?>">software</a></li>
                    <li><a href="<?php echo base_url('stuff') ?>">stuff</a></li>
                    <li><a href="<?php echo base_url('gallery') ?>">gallery</a></li>
                    <li><a href="<?php echo base_url('blog') ?>">blog</a></li>
                    <li><a href="<?php echo base_url('about') ?>">about</a></li>
                </ul>
            </nav>
            <div class="main">