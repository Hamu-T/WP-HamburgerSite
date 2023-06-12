<?php get_header(); ?>
    <main class="l-main">
        <div class="l-main__inner">
            <article class="p-visual p-visual--archive" id="post-<?php the_ID();?>"<?php post_class(); ?>>
                <h2 class="c-title c-title--archive">Menu:</h2>
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
                            <button class="c-button--card">詳しく見る</button>
                        </div>
                    </div>
                </section>
                <?php endwhile; ?>
            <?php endif; ?>
            <!-- <section class="p-card--list">
                <img class="p-card--img" src="./images/menu-thumbnail.jpg" alt="チーズバーガー画像">
                <div class="p-card--contents">
                    <h3 class="c-title c-title--card-ttl">ダブルチーズバーガー</h3>
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
                    <h3 class="c-title c-title--card-ttl">スペシャルチーズバーガー</h3>
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
            <li class="c-page c-page--text">page 1/10</li>
            <li><a href="" class="c-page c-page--first">≪</a></li>
            <li><a href="" class="c-page c-page--previous">前へ</a></li>
            <li><a href="" class="c-page c-page--number">1</a></li>
            <li><a href="" class="c-page c-page--number">2</a></li>
            <li><a href="" class="c-page c-page--number">3</a></li>
            <li><a href="" class="c-page c-page--number">4</a></li>
            <li><a href="" class="c-page c-page--number">5</a></li>
            <li><a href="" class="c-page c-page--number">6</a></li>
            <li><a href="" class="c-page c-page--number">7</a></li>
            <li><a href="" class="c-page c-page--number">8</a></li>
            <li><a href="" class="c-page c-page--number">9</a></li>
            <li><a href="" class="c-page c-page--next">次へ</a></li>
            <li><a href="" class="c-page c-page--last">≫</a></li>
        </ul>
    </main>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>