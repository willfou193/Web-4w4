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
<h1><?php the_title(); ?></h1>
    <?php if(have_posts()):the_post(); ?>
    
    <article class="article">
        
        <div class="article__contenu">
            <?php if(has_post_thumbnail()):?>
            <figure class="contenu__figure">
                <?php the_post_thumbnail("medium"); ?>
            </figure>
            <?php endif; ?>  
        <?php the_content(); ?>
        </div>
    </article>
    <?php endif; ?>
</main>
<?php get_footer(); ?>