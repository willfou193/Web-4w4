<?php
/**
 * Template Name: Évenement
 *
 *
 * @package WordPress
 * @subpackage cidw_4w4
 */

get_header();
?>

<main class="site__main">
    <article class="atelier">
        <?php if(have_posts()):the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <h2>Description de l'atelier</h2>
        <p class="evenement__animateur">
            <?php
            the_field('date');
            ?>
        </p>
        <p class="evenemnt__local">
            <?php
            the_field('date');
            ?>
            <?php
            the_field('heure');
            ?>
        </p>
        <p class="evenemnt__resume"><?php the_field('endroit');?></p>
        
        <h2>Horaire et dates de l'atelier</h2>
        <p class="evenemnt__duree">
            <?php
            the_field('organisateur'); 
            ?>
        </p>
       <p class="evenement__debut"></p>
       <p class="evenement__fin"></p>
       <p class="evenement__jours"></p>
       <p class="evenement__horaire"></p>

        <?php endif; ?>
    </article>
        </main>
<?php get_footer(); ?>