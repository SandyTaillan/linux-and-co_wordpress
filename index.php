<?php get_header(); ?>
<main class="main-principal">
    <section class="section-principale">
        <h1>L'actualité du site</h1>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                    <!-- Appel du contenu de cette loop du fichier content.php -->
                    <?php get_template_part('template-parts/post/content'); ?>
                <?php endwhile; ?>
            <?php else:
                echo "Il n'y a pas de résultats !";
            endif; ?>
        <div id="pub2">
            <h3>Publicité</h3>
            <div id="pub2A">

            </div>
        </div>
    </section>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>




<!--            <div id="pub2">-->
<!--                <h3>Publicité</h3>-->
<!--                <div id="pub2A">-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        --><?php //get_sidebar(); ?>

</main>
