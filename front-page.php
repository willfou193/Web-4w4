<?php get_header() ?>
<main class="site__main">
    <h1>Bienvenue!</h1>
    <section class="animation">
        <div class="animation__bloc">1</div>
        <div class="animation__bloc">2</div>
        <div class="animation__bloc">3</div>
        <div class="animation__bloc">4</div>
        <div class="animation__bloc">5</div>
    </section>

    <?php if (have_posts()): while(have_posts()) : the_post();?> 
        <?php the_title(); ?>
        <?php the_content(); ?>
        <?php endwhile ?>
    <?php endif ?>  
</main>
<?php get_footer() ?>