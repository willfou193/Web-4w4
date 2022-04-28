<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <?php wp_head(); ?>
    <style>
        .site__header::after{
        background-color:<?= get_theme_mod("background_clippath"); ?> ;
    }
    </style>
</head>
<body <?php body_class('site'); ?> style="background-color:<?= get_theme_mod("background_body"); ?>;">
<header class="site__header">
 
    <section class="site__header__titre">
        <?= get_custom_logo(); ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">    
            <h1>
                <?php bloginfo('name'); ?>
            </h1>
        </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">    
            <h2>
                <?php echo get_bloginfo('description'); ?>
            </h2>
        </a>
    </section>
    <section class="util">
        <div class="icone">
            <?= get_sidebar("entete_1") ?>
        </div>

        <?php get_search_form() ?>
        
    </section>
</header>

<section class="site__barre">
    <input type="checkbox" id="chk-burger">
    <label for="chk-burger" id="burger" class="burger">
    <div class="burger__ligne"></div>
    <div class="burger__ligne"></div>
    <div class="burger__ligne"></div>
    </label>
    <?php 
    $iconeMenu = '<svg class="iconeMenu" width="22px" height="22px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" color="#000000" viewBox="0 0 24 24"><polygon fill-rule="evenodd" points="8 4 12 6 8 8 6 12 4 8 0 6 4 4 6 0 8 4"></polygon></svg>';
   wp_nav_menu(array("menu"=>"principal", 'link_before' => "$iconeMenu"));
  
   
   ?>
    
</section>