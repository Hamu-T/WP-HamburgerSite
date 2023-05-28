<?php get_header(); ?>
    <main class="l-main">
        <div class="l-main__inner">
            <article class="p-visual p-visual--front">
                <h2 class="c-title c-title--front">ダミーサイト</h2>
            </article>
        </div><!-- l-main__inner -->
        <article class="p-outin">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="p-outin__box c-outin c-outin--takeout">
                <ul class="p-outin__inner c-outin__container">
                    <li class="p-outin__title c-outin__title">
                        <h2 class="c-title c-title--outin_title">Take Out</h2>
                        <div class="c-border c-border--outin"></div>
                    </li>
                    <div class="p-outin__content c-outin__block">
                        <ul class="c-outin__inner">
                            <li class="c-title c-title--outin_subtitle">Take Out</li>
                            <li class="c-text c-text--outin_content">
                                <?php the_content(); ?>
                            </li>
                        </ul>
                        <ul class="c-outin__inner">
                            <li class="c-title c-title--outin_subtitle">Take Out</li>
                            <li class="c-text c-text--outin_content">
                                <?php the_content(); ?>
                            </li>
                        </ul><!-- c-outin__inner -->
                    </div><!-- c-outin__block -->
                </ul>
            </section><!-- p-outin__box -->
            <section class="p-outin__box c-outin c-outin--eatin">
                <ul class="p-outin__inner c-outin__container">
                    <li class="p-outin__title c-outin__title">
                        <h2 class="c-title c-title--outin_title">Eat In</h2>
                        <div class="c-border c-border--outin"></div>
                    </li>
                    <div class="p-outin__content c-outin__block">
                        <ul class="c-outin__inner">
                            <li class="c-title c-title--outin_subtitle">Eat In</li>
                            <li class="c-text c-text--outin_content">
                                <?php the_content(); ?>
                            </li>
                        </ul>
                        <ul class="c-outin__inner">
                            <li class="c-title c-title--outin_subtitle">Eat In</li>
                            <li class="c-text c-text--outin_content">
                                <?php the_content(); ?>
                            </li>
                        </ul><!-- c-outin__inner -->
                    </div><!-- c-outin__block -->
                </ul>
            </section><!-- p-outin__box -->
            <?php endwhile; endif; ?>
        </article><!-- p-outin -->
        <article class="p-map">
            <div class="p-map__wrapper">
                <iframe class="p-map__google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477988418773!2d139.74285797483594!3d35.658584831219265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1682934737277!5m2!1sja!2sjp"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <section class="p-map__section">
                <h2 class="c-title c-title--map">見出しが入ります</h2>
                <div class="c-border c-border--map"></div>
                <p class="c-text c-text--map">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
            </section><!-- p-map__section -->
            <div class="p-map__bg-layer"></div><!-- textを覆う黒のカーテン -->
        </article><!-- p-map -->
    </main>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>