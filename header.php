<!DOCTYPE html>
<html <?php language_attributes();//言語設定を自動的に出力 ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/destyle.css@1.0.5/destyle.css">
    <link rel="stylesheet" href="./css/hambuger.css"> -->
<?php wp_enqueue_style( 'noto-sans-jp', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap', array() ); ?>
<?php wp_enqueue_style( 'm-plus-1', 'https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&display=swap' ); ?>
<?php wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,400&display=swap' ); ?>
<?php wp_enqueue_style( 'destyle', 'https://unpkg.com/destyle.css@1.0.5/destyle.css' ); ?>
<?php wp_enqueue_style( 'hambuger', get_template_directory_uri() . '/css/hambuger.css' ); ?>
<?php wp_head(); ?>
</head>
<body class="c-layout c-no_scroll">
    <header class="l-header">
        <div class="l-header__inner">
            <h1 class="c-title c-title--header"><a href="<?php echo esc_url( home_url('/')); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <?php get_search_form(); ?>
            <button class="c-hamburger c-hamburger--header drawer-open">Menu</button>
        </div><!-- header__inner -->
    </header>
