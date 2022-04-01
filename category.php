<?php get_header() ?>
<main class="site__main">
    <h1>Liste des cours du programme TIM</h1>
    <section class="formation">
        <div class="conteneur__cours">
            <?php
                wp_nav_menu(array(
                    "menu"=>"categorie_cours",
                ));
            ?>  
        </div>
       

        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                <?php
                $categories = get_the_category();
                if(is_category(array('cours', 'web','jeu','utilitaire','video','creation-3d','design'))){
                    get_template_part('gabarit/content','cours');
                }else
                get_template_part('gabarit/content','macrame');
                //var_dump($categories);    
                //echo $categories[1]->slug;
                ?>
                
                <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>