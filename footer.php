<footer class="site__footer">
    <h2 class="footer__titre">Information supplémentaire</h2>
    <h3 class="footer__author">Fait (en parti) par William Foucher</h3>
    <!-- premier groupe de colonne (desktop) -->
    <div class="footer__conteneur">
        
        <div class="footer__widget">
            <h2>Derniers articles</h2>
            <?php dynamic_sidebar( 'footer_colonne1' ); ?>
        </div>
        
        <div class="footer__search">
            <?php get_search_form() ?>
        </div>
        <div class="footer__page">
            <h2>Pages annexes</h2>
            <?php 
                $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#f00"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
                wp_nav_menu(array(
                                    "menu"=>"simple",
                                    "container"=>"nav",
                                    "container_class"=>"site__footer__menu",
                                    "menu_class"=>"site__footer__menu__ul",

                                    "link_before"=>$icone)); 
            ?>
        </div>
       
    </div>
    <!-- autres rangées -->
    <div class="footer__conteneur__2">
        <div class="footer__widget">
                <?php dynamic_sidebar( 'footer_conteneur2_colonne1' ); ?>
        </div>
        <div class="lien-externe">
            <h2>Liens externe</h2>
            <?php
                wp_nav_menu(array(
                    "menu"=>"externe",
                    "link_before"=>$icone));
            ?>
        </div>
        <div class="footer__widget">
                <?php dynamic_sidebar( 'footer_colonne3' ); ?>
        </div>
        
    </div>
    <div class="reseau"> <?php dynamic_sidebar( 'footer_ligne1' ); ?></div>
    <p id="footer__copyright">3 800, rue Sherbrooke Est Montréal (Québec) H1X 2A2 | 514 254-7131
    Copyright © 2014 - Collège de Maisonneuve. Tous droits réservés</p>
</footer>
    <?php wp_footer(); ?>
</body>

</html>