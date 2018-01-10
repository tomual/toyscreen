<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $site->title ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo base_url('css/normalize.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('css/main.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>">
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