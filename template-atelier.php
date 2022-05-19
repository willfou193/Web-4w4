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
        <h3>Description de l'atelier</h3>
            <section class="evenement__animateur">
            <p>L'animateur de l'atelier <div class="contenuField"><?php the_field('animateur');?></div></p>
            </section>
            <section class="evenement__local">
            <p> L'animateur de l'atelier :<div class="contenuField"><?php the_field('local_ou_se_deroulera_latelier');?></div></p>
            </section>
            <section class="evenement__resume">
                <?php the_field('description');?>
            </section>
        
        <h3>Horaire et dates de l'atelier</h3>
        <section class="evenement__duree">
                <p>Durée de chacune des séances est de <div class="contenuField"><?php the_field('duree_dune_seance_datelier'); ?></div></p>
        </section>
        <section class="evenement__debut">
                <p>Date de début  <div class="contenuField"><?php the_field('date_de_debut_de_latelier'); ?></div></p>
        </section>
        <section class="evenement__fin">
                <p>Date de fin <div class="contenuField"><?php the_field('date_de_fin_de_latelier'); ?></div></p>    
        </section>
        <section class="evenement__jours">
                <p>La formation se donnera : <div class="contenuField"><?php the_field('jours_de_la_semaine_de_latelier'); ?></div></p>
        </section>
        <section class="evenement__horaire">
                <div>l'horaire :<div class="contenuField"><?php the_field('heure_de_debut');?> <p> à </p><?php the_field('heure_de_fin');?></div></div>
        </section>

        <?php endif; ?>
    </article>
        </main>
<?php get_footer(); ?>