<?php get_header() ?>
<main class="site__main">
    <h1>Bienvenue!</h1>
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

    <!-- ------------------Menu Atelier----------------------- -->
    <div class="menu__atelier">
        <h3>Les Atelier à venir</h3>
        <?php
            wp_nav_menu(array("menu"=>"atelier",
            "container"=>"nav"));
        ?>
    </div>
    
    <?php if (have_posts()):the_post();?> 
        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>
    <?php endif ?>  
</main>
<?php get_footer() ?>