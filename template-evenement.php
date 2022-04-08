<?php
/**
 * Template Name: Évènement
 *
 *
 * @package WordPress
 * @subpackage cidw_4w4
 */

get_header();
?>

<main class="site__main">
<h1>template-evenement</h1>
    <?php if(have_posts()):the_post(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>