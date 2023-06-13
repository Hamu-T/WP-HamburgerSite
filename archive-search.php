<?php get_header(); ?>
    <main class="l-main">
        <div class="l-main__inner">
            <article class="p-visual p-visual--archive">
                <h2 class="c-title c-title--archive">Search:</h2>
                <h3 class="c-text c-text--archive"><?php single_term_title(); ?></h3>
            </article>
        </div><!-- l-main__inner -->
        <article class="p-contents">
            <section class="p-info">
                <h2 class="c-title c-title--info">小見出しが入ります</h2>
                <p class="c-text c-text--info">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
            </section>
            <?php if ( have_posts() ) : ?>
                <?php while (have_posts() ) :
                    the_post();
                ?>
                <section class="p-card--list">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <img class="p-card--img" src="<?php the_post_thumbnail(); ?>" alt="メニュー画像">
                    <?php endif; ?>
                        <div class="p-card--contents">
                        <h3 class="c-title c-title--card-ttl result">見出しが入ります</h3>
                        <h4 class="c-title c-title--card-sub">小見出しが入ります</h4>
                        <p class="c-text c-text--card">
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </p>
                        <div class="p-card--button">
                            <button class="c-button--card">詳しく見る</button>
                        </div>
                    </div>
                </section>
                <?php endwhile; ?>
            <?php endif; ?>
            <!-- <section class="p-card--list">
                <img class="p-card--img" src="./images/menu-thumbnail.jpg" alt="チーズバーガー画像">
                <div class="p-card--contents">
                    <h3 class="c-title c-title--card-ttl result">見出しが入ります</h3>
                    <h4 class="c-title c-title--card-sub">小見出しが入ります</h4>
                    <p class="c-text c-text--card">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                    <div class="p-card--button">
                        <button class="c-button--card">詳しく見る</button>
                    </div>
                </div>
            </section>
            <section class="p-card--list">
                <img class="p-card--img" src="./images/menu-thumbnail.jpg" alt="チーズバーガー画像">
                <div class="p-card--contents">
                    <h3 class="c-title c-title--card-ttl result">見出しが入ります</h3>
                    <h4 class="c-title c-title--card-sub">小見出しが入ります</h4>
                    <p class="c-text c-text--card">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                    <div class="p-card--button">
                        <button class="c-button--card">詳しく見る</button>
                    </div>
                </div>
            </section>
            <section class="p-card--list">
                <img class="p-card--img" src="./images/menu-thumbnail.jpg" alt="チーズバーガー画像">
                <div class="p-card--contents">
                    <h3 class="c-title c-title--card-ttl result">見出しが入ります</h3>
                    <h4 class="c-title c-title--card-sub">小見出しが入ります</h4>
                    <p class="c-text c-text--card">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                    <div class="p-card--button">
                        <button class="c-button--card">詳しく見る</button>
                    </div>
                </div>
            </section>
            <section class="p-card--list">
                <img class="p-card--img" src="./images/menu-thumbnail.jpg" alt="チーズバーガー画像">
                <div class="p-card--contents">
                    <h3 class="c-title c-title--card-ttl result">見出しが入ります</h3>
                    <h4 class="c-title c-title--card-sub">小見出しが入ります</h4>
                    <p class="c-text c-text--card">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                    <div class="p-card--button">
                        <button class="c-button--card">詳しく見る</button>
                    </div>
                </div>
            </section> -->
        </article>
        <ul class="p-pagenation">
            <?php wp_pagenavi(); ?>
        </ul>
    </main>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>