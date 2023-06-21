<?php get_header(); ?>
    <main class="l-main">
        <div class="l-main__inner">
            <article class="p-visual p-visual--archive">
                <h2 class="c-title c-title--archive">Menu:</h2>
                <h3 class="c-text c-text--archive"><?php single_term_title(); ?></h3>
            </article>
        </div><!-- l-main__inner -->
        <article class="p-contents" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php //the_excerpt(); ?><!-- 抜粋 -->
        <?php if ( have_posts() ) : ?>
            <?php $is_first_post = true; ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php if ( $is_first_post ) : ?>
                    <section class="p-info">
                        <h2 class="c-title c-title--info">小見出しが入ります</h2>
                        <p class="c-text c-text--info">
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </p>
                    </section>
                    <?php $is_first_post = false; ?>
                <?php endif; ?>
                <section class="p-card--list">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <img class="p-card--img" src="<?php the_post_thumbnail(); ?>">
                    <?php endif; ?>
                    <div class="p-card--contents">
                        <h3 class="c-title c-title--card-ttl"><?php the_title(); ?></h3>
                        <h4 class="c-title c-title--card-sub">小見出しが入ります</h4>
                        <p class="c-text c-text--card">
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </p>
                        <div class="p-card--button">
                            <button onclick="location.href='<?php the_permalink(); ?>'" class="c-button--card"><a href="<?php the_permalink(); ?>"></a>詳しく見る</button>
                        </div>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
        </article>
        <ul class="p-pagenation">
            <?php wp_pagenavi(); ?>
        </ul>
    </main>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>