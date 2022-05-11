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
    <?php if(have_posts()):the_post(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>