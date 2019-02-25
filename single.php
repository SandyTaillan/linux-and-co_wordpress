<?php get_header(); ?>
    <main class="main-principal">
        <div class="col-principale">
            <section class="section-principale">
                <h1><?php the_title(); ?></h1>
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>

                <div class="article-index">
                    <div class="img-article sous-image">
                                <?php the_post_thumbnail() ?>
                    </div>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                     <?php else:
                    echo "Il n'y a pas de résultats !";
                     endif; ?>
                    <div id="postdata">
                        <p>Publié le <?php echo get_the_date(); ?> - modifié le <?php the_modified_date(); ?><br>
                            Catégorie(s) : <a href="<?php the_permalink(); ?>"><?php the_category( ', ' ); ?></a><br>
                    </div>
                    <div class="separation">
                        <span></span><span></span><span></span><span></span><span></span><span></span>
                    </div>
                </div>

            </section>
            <section id="pub2">
                <h3>Publicité</h3>
                <div id="pub2A">
                </div>
            </section>
        </div>
        <?php get_sidebar(); ?>
    </main>
<?php get_footer(); ?>