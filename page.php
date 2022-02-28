<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _underscore
 */

get_header();
?>

<main class="site__main">
<h1>Exemple de page</h1>
    <?php if(have_posts()):the_post(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>