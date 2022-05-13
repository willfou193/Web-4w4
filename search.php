
<?php
/**
 * le modèle de recherche search.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cidw-4w4
 */
 get_header();?>
<main class="site__main">
    <section class="site__main__recherche">
        <h1>Résultat de recherche</h1>
    </section>
    <section class="recherche">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <a href="<?php echo get_permalink();?>">   
                <h2><?php the_title() ?></h2> 
            </a>
            <p>
                <?php echo wp_trim_words(get_the_content(),20); ?>
            </p>
            <hr>
        <?php endwhile ?>
        <?php else : ?>
            <h2>Aucun résultat pour la recherche</h2>
        <?php endif ?>
    </section>
    
</main>
<?php get_footer(); ?>