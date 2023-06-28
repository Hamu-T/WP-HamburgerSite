<?php
//テーマサポート
function hamburger_theme_setup() {
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails');
    add_theme_support( 'html5', array( 'search-form' ) );
    register_nav_menus( array(
        'side_menu'     => 'サイドメニュー',
        'history_menu'   => 'ヒストリー',
        'shop_menu'     => 'ショップ',
        'takeout_menu'  => 'テイクアウト',
        'eatin_menu'    => 'イートイン'
    ) );
}
add_action( 'after_setup_theme', 'hamburger_theme_setup' );

function hamburger_scripts() {
    wp_enqueue_style( 'noto-sans-jp', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap', array() );
    wp_enqueue_style( 'm-plus-1', 'https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&display=swap' );
    wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,400&display=swap' );
    wp_enqueue_style( 'destyle', 'https://unpkg.com/destyle.css@1.0.5/destyle.css' );
    wp_enqueue_style( 'hambuger', get_template_directory_uri() . '/css/hamburger.css', array(),date('ymdHis', filemtime( get_template_directory().'/css/hamburger.css')));
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/JS/style.js', array(), '1.0', true );
    wp_enqueue_script( 'search-script', get_template_directory_uri() . '/JS/search.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'hamburger_scripts' );


function get_first_paragraph() {
    global $post;
    $content = apply_filters('the_content', $post->post_content);
    $content = str_replace(']]>', ']]&gt;', $content);
    $paragraphs = explode('</p>', $content);
    $first_paragraph = strip_tags($paragraphs[1]);
    return '<p>' . $first_paragraph . '</p>';
}


// adminbarを非表示にする
add_filter( 'show_admin_bar', '__return_false' );

// 固定ページを除外し、投稿のみを検索の対象にする
function SearchFilter( $query ) {
	if ( $query -> is_search ) {
		$query -> set( 'post_type', 'post' );
	}
	return $query;
}
add_filter( 'pre_get_posts', 'SearchFilter' );