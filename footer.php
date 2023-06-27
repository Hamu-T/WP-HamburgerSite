    <footer class="l-footer">
        <div class="p-footer">
            <?php wp_nav_menu(array(
                'theme_location' => 'shop_menu',
                'menu_class'    =>  'footer--shop',
                ));
            ?>
            <?php wp_nav_menu(array(
                'theme_location' => 'history_menu',
                'menu_class'    =>  'footer--history',
                ));
            ?>
        </div>
        <p class="c-text c-text--copyright">Copyright: RaiseTech</p>
    </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>