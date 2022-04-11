<?php
                    $categories = get_the_category();
?>
<article class="formation__cours <?php echo $categories[1]->slug; ?>">
                        <?php
                        $titre = get_the_title();
                        //582-1w1 Mise en page web
                        //Mise en page web
                        $titreFiltreCours = substr($titre, 3, -6);
                        // $nbHeures = substr($titre, -6);
                        $nbHeures = get_field( "nombre_dheures" );
                        $sigleCours = substr($titre, 0, 4);
                        $descCours = get_the_excerpt();
                        ?>
                        <?php the_post_thumbnail("thumbnail"); ?>
                        <?php get_permalink(); ?>
                        <h3 class="cours__titre">
                            <a href="<?php echo get_permalink(); ?>">
                            <?= $titre; ?>
                            </a>
                            </h3>
                        <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
                        <p class="cours__sigle"><?= $sigleCours; ?> </p>
                        <p class="cours__desc"> <?= $descCours; ?></p>
                    </article>