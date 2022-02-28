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
<h1>Erreur 404</h1>
<section class="erreur-404">
    <p>La page que vous tentez d'accèder n'existe pas veuillez écrire une section valide dans l'URL</p>
    <?php
		the_widget( 'WP_Widget_Recent_Posts' );
	?>
</section>
    
</main>
<?php get_footer(); ?>