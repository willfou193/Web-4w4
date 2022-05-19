<?php
/**
 * Template Name: Atelier
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
            the_field('animateur');
            ?>
        </p>
        <p class="evenement__local">
            <?php
            the_field('local_ou_se_deroulera_latelier');
            ?>
        </p>
        <p class="evenement__resume">
            <?php the_field('description');?>
        </p>
        
        <h2>Horaire et dates de l'atelier</h2>
        <p class="evenement__duree">
            <?php
            the_field('duree_dune_seance_datelier'); 
            ?>
        </p>
       <p class="evenement__debut">
            <?php    
            the_field('date_de_debut_de_latelier'); 
            ?>
       </p>
       <p class="evenement__fin">
             <?php    
            the_field('date_de_fin_de_latelier'); 
            ?>
       </p>
       <p class="evenement__jours">
             <?php    
            the_field('jours_de_la_semaine_de_latelier'); 
            ?>
       </p>
       <p class="evenement__horaire">
            <?php    
            the_field('heure_de_debut'); 
            ?>
            <p> à </p>
            <?php    
            the_field('heure_de_fin'); 
            ?>
       </p>

        <?php endif; ?>
    </article>
        </main>
<?php get_footer(); ?>