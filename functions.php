<?php
//テーマサポート
add_theme_support( 'title-tag' );

//タイトル出力
function hamburger_title($title) {
    if( is_front_page() && is_home() ) {
        $title = get_bloginfo( 'name', 'display' );
    } elseif (is_singular() ) {
        $title = single_post_title( '', false );
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'hamburger_title' );

function hamburger_script() {
    wp_enqueue_style( 'noto-sans-jp', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap', array() );
    wp_enqueue_style( 'm-plus-1', 'https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&display=swap' );
    wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,400&display=swap' );
    wp_enqueue_style( 'destyle', 'https://unpkg.com/destyle.css@1.0.5/destyle.css' );
    wp_enqueue_style( 'hambuger', get_template_directory_uri() . '/css/hambuger.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/JS/style.js', array(), '1.0', true );
    wp_enqueue_script( 'search-script', get_template_directory_uri() . '/JS/search.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'hamburger_script' );