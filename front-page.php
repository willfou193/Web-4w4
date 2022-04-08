<?php get_header() ?>
<main class="site__main">
    <h1>Bienvenue!</h1>
    <section class="animation">
        <div class="animation__bloc" id="etudiant"></div>
        <div class="animation__bloc"></div>
        <div class="animation__bloc" id="cours"></div>
    </section>
    <!-- ----------------- Menu accueil -------------------- -->
    <?php
        wp_nav_menu(array("menu"=>"accueil",
        "container"=>"nav"));
    ?>
    <!-- ------------------Menu Evenement-------------------- -->
    <?php
        wp_nav_menu(array("menu"=>"evenement",
        "container"=>"nav"));
    ?>
    <?php if (have_posts()): while(have_posts()) : the_post();?> 
        <?php the_title(); ?>
        <?php the_content(); ?>
        <?php endwhile ?>
    <?php endif ?>  
</main>
<?php get_footer() ?>