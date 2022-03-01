<footer class="site__footer">
    <h2 class="footer__titre">Information supplémentaire</h2>
    <h3 class="footer__author">Fait (en parti) par William Foucher</h3>
    <div class="footer__conteneur">
        <p class="footer__presentation">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam eveniet nesciunt cupiditate magnam! Sed et iusto odit perferendis porro delectus! Voluptatem a doloremque quod cumque maxime veniam sequi sed atque?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora quae repellendus necessitatibus ullam, error ad incidunt quam animi perspiciatis excepturi obcaecati quo accusamus. Omnis sunt odio officia iste qui accusamus!</p>
        <div class="footer__search">
            <?php get_search_form() ?>
        </div>

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
<p id="footer__copyright">3 800, rue Sherbrooke Est Montréal (Québec) H1X 2A2 | 514 254-7131
Copyright © 2014 - Collège de Maisonneuve. Tous droits réservés</p>
</footer>
    <?php wp_footer(); ?>
</body>

</html>