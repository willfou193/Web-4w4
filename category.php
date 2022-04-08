<?php get_header() ?>
<main class="site__main">
    <h1>Liste des cours du programme TIM</h1>
    <section class="formation">
        <a href="?cletri=title&ordre=asc"><svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M6.47 10.78a.75.75 0 010-1.06l5.25-5.25a.75.75 0 011.06 0l5.25 5.25a.75.75 0 11-1.06 1.06L13 6.81v12.44a.75.75 0 01-1.5 0V6.81l-3.97 3.97a.75.75 0 01-1.06 0z"></path></svg></a>
        <a href="?cletri=title&ordre=desc"><svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M4.97 13.22a.75.75 0 000 1.06l6.25 6.25a.75.75 0 001.06 0l6.25-6.25a.75.75 0 10-1.06-1.06l-4.97 4.97V3.75a.75.75 0 00-1.5 0v14.44l-4.97-4.97a.75.75 0 00-1.06 0z"></path></svg></a>
        <div class="conteneur__cours">
            <?php
                wp_nav_menu(array(
                    "menu"=>"categorie_cours",
                ));
            ?>  
            <?php
                $slug_categorie_de_la_page = trouve_la_categorie(array('cours', 'web','jeu','utilitaire','video','creation-3d','design'));
                $ma_categorie = get_category_by_slug($slug_categorie_de_la_page);
                echo "<h3>" .  $ma_categorie->description ."</h3>";

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