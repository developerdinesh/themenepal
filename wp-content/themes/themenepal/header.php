<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--Start of  Wrapper-->
<div id="wrapper">
    <!--Start Header-->
    <header id="header" class="site-header">
        <div class="tn-container">
            <div class="header-wrap clearfix">
                <div class="site-branding main-logo">
                    <a href="<?= site_url(); ?>">
                        <img src="<?= site_icon_url(); ?>" alt="<?php ?>" title="">
                    </a>
                </div>
                <nav id="main-navigation" class="site-navigation" role="navigation">
                    <span class="navbar-responsive"><i class="fa fa-bars" aria-hidden="true"></i></span>
                    <!--<ul class="nav-main">
                        <li><a href="">home</a></li>
                        <li><a href="">services</a></li>
                        <li><a href="">portfolio</a></li>
                        <li><a href="">contact us</a></li>
                    </ul>-->
                    <?php
                    $args=array(
                        'theme_location'=>'primary',
                        'container'     =>false,
                        'menu_class'  =>'nav-main',
                    );
                    wp_nav_menu($args);
                    ?>
                    <ul class="account-registration">
                        <li><a href="">login</a></li>
                        <li><a href="">register</a></li>
                    </ul>
                    <nav>
            </div>
        </div>
    </header>