<div class="article-index">
    <div class="img-article">

        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium') ?></a>
    </div>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
    <div class="separation">
        <span></span><span></span><span></span><span></span><span></span><span></span>
    </div>
</div>
