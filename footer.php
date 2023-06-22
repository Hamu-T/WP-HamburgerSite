    <footer class="l-footer">
        <h3 class="c-text c-text--footer">
            <?php wp_nav_menu(array(
                'theme_location' => 'shop_menu',
                ));
            ?> | 
            <?php wp_nav_menu(array(
                'theme_location' => 'history_menu',
                ));
            ?>
        </h3>
        <p class="c-text c-text--copyright">Copyright: RaiseTech</p>
    </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>