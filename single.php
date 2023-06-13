<?php get_header(); ?>
    <main class="l-main">
        <article class="p-visual p-visual--single">
            <h2 class="c-title c-title--single"><?php the_title(); ?></h2>
        </article>
            
        <div class="p-singles">
            <div class="p-titles">
                <?php the_content(); ?> 
    </main>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>