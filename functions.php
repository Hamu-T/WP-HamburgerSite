<?php
//テーマサポート
function hamburger_theme_setup() {
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails');
    add_theme_support( 'html5', array( 'search-form' ) );
    register_nav_menus( array(
        'side_menu'     => 'サイドメニュー'
    ) );
}
add_action( 'after_setup_theme', 'hamburger_theme_setup' );

function hamburger_scripts() {
    wp_enqueue_style( 'noto-sans-jp', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap', array() );
    wp_enqueue_style( 'm-plus-1', 'https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&display=swap' );
    wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,400&display=swap' );
    wp_enqueue_style( 'destyle', 'https://unpkg.com/destyle.css@1.0.5/destyle.css' );
    wp_enqueue_style( 'hambuger', get_template_directory_uri() . '/css/hamburger.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/JS/style.js', array(), '1.0', true );
    wp_enqueue_script( 'search-script', get_template_directory_uri() . '/JS/search.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'hamburger_scripts' );

function hamburger_widgets_init() {
    register_sidebar ( array(
        'name'          => 'カテゴリーウィジェット',
        'id'            => 'category_widget',
        'description'   => 'カテゴリー用ウィジェットです',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
        'after_title'   =>"</h2>\n",
    ));
}
add_action( 'widgets_init', 'hamburger_widgets_init');
