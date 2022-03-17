<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('site'); ?>>
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
    <label for="chk-burger" id="burger">
    <svg  width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
    </label>
    <?php 
    $iconeMenu = '<svg class="iconeMenu" width="22px" height="22px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" color="#000000" viewBox="0 0 24 24"><polygon fill-rule="evenodd" points="8 4 12 6 8 8 6 12 4 8 0 6 4 4 6 0 8 4"></polygon></svg>';
   wp_nav_menu(array("menu"=>"principal", 'link_before' => "$iconeMenu"));
  
   
   ?>
    
</section>