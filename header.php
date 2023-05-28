<!DOCTYPE html>
<html <?php language_attributes();//言語設定を自動的に出力 ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
