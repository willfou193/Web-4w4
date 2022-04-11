<?php get_header() ?>
<main class="site__main">
    <h1>Bienvenue!</h1>
    <section class="animation">
        <div class="animation__bloc" id="etudiant"></div>
        <div class="animation__bloc"></div>
        <div class="animation__bloc" id="cours"></div>
    </section>
    <!-- ----------------- Menu accueil -------------------- -->
    <div class="menu__accueil">
        <h3>Le département TIM</h3>
        <?php
            wp_nav_menu(array("menu"=>"accueil",
            "container"=>"nav"));
        ?>
    </div>
    
    <!-- ------------------Menu Evenement-------------------- -->
    <div class="menu__evenement">
        <h3>Événements</h3>
        <?php
            wp_nav_menu(array("menu"=>"evenement",
            "container"=>"nav"));
        ?>
    </div>
    
    <?php if (have_posts()): while(have_posts()) : the_post();?> 
        <?php the_title(); ?>
        <?php the_content(); ?>
        <?php endwhile ?>
    <?php endif ?>  
</main>
<?php get_footer() ?>