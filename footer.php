    <footer class="l-footer">
        <h3 class="c-text c-text--footer">
            <?php wp_nav_menu(array(
                'menu' => 'shop',
                ));
            ?> | 
            <?php wp_nav_menu(array(
                'menu' => 'history',
                ));
            ?>
        </h3>
        <p class="c-text c-text--copyright">Copyright: RaiseTech</p>
    </footer>
    <!-- <script src="./JS/style.js"></script> -->
    </div>
    <?php wp_footer(); ?>
</body>
</html>