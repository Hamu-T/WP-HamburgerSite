<?php get_header(); ?>
    <main class="l-main">
        <div class="l-main__inner">
            <article class="p-visual p-visual--archive u-width">
                <h2 class="c-title c-title--archive">Search:</h2>
                <h3 class="c-text c-text--archive"></h3>
            </article>
        </div><!-- l-main__inner -->
        <article class="p-contents" id="post-<?php the_ID(); ?>" <?php post_class('sidebar-menu','takeout'); ?>>
        <?php if ( have_posts() ) : ?>
            <?php $is_first_post = true; ?>
            <?php while ( have_posts() ) :
                the_post();
            ?>
                <?php if ( $is_first_post ) : ?>
                    <section class="p-info">
                        <h2 class="c-title c-title--info">検索結果</h2>
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
                        <img class="p-card--img" src="<?php echo esc_url( get_the_post_thumbnail_url() );  ?>" alt="">
                    <?php endif; ?>
                    <div class="p-card--contents">
                        <h3 class="c-title c-title--card-ttl result"><?php the_title(); ?></h3>
                        <h4 class="c-title c-title--card-sub"><?php the_excerpt(); ?></h4>
                        <p class="c-text c-text--card">
                            <?php echo get_first_paragraph(); ?>
                        </p>
                        <div class="p-card--button">
                            <button onclick="location.href='<?php the_permalink(); ?>'" class="c-button--card"><a href="<?php the_permalink(); ?>"></a>詳しく見る</button>
                        </div>
                    </div>
                </section>
            <?php endwhile;
        else : ?>
            <p>お探しの商品は見つかりませんでした。</p>
        <?php endif; ?>
        </article>
        <ul class="p-pagenation">
            <?php wp_pagenavi(); ?>
        </ul>
    </main>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>