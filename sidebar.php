<article class="c-shadow"></article>
<aside class="l-sidebar">
        <div class="l-sidebar__inner">
            <section class="p-menu">
                <button class="l-sidebar__button c-hamburger c-hamburger--sidebar drawer-close"></button>
                <h3 class="c-title c-title--sidebar-title">Menu</h3>
                <?php wp_nav_menu(array(
                    'theme_location'    => 'side_menu',
                    'menu_class' => 'sidebar-menu',

                ));
                ?>
            </section>
        </div>
    </aside>
