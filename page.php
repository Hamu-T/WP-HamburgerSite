<?php get_header(); ?>
    <main class="l-main">
        <article class="p-visual p-visual--shop u-width">
            <h2 class="c-title c-title--single"><?php the_title(); ?></h2>
        </article>

        <div class="p-singles">
            <?php the_content(); ?>
        </div><!-- p-singles -->
    </main>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>