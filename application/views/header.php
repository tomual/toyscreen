<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo ($this->uri->segment(2) && !is_numeric($this->uri->segment(2))) ? ucfirst($this->uri->segment(2)) . ' | ' : '' ?><?php echo $site->title ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php echo base_url('css/normalize.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('css/main.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>">

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TFG9N9Q');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body>
        
        <style type="text/css">
            body {
                <?php if( !empty($site->background)): ?>
                    background: url(<?php echo $site->background ?>);
                <?php endif ?>
            }
        </style>
        <div class="container"> 
            <div class="header">
                <h1><a href="<?php echo base_url("~{$site->user->username}") ?>"><?php echo $site->title ?></a></h1>
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