<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/desk.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/celulares.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/tablets.css" />
    <link rel="icon" href="<?php bloginfo('template_directory') ?>/img/logo.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">			
    <title><?php wp_title( '', true, 'right' ); ?></title>
    <?php wp_head(); ?> 
</head>
<body>
<header>
        <i id="menu-hamburger" class="fas fa-bars"></i>
        <a id="inicio" href="http://indiespensavel.com/"><div class="logo"></div></a>       
        <nav>
            <ul>
                <li><a class="cat-ativa" href="<?php echo esc_url(get_category_link(get_category_by_slug( 'noticias' ))) ?>"><?php echo  get_cat_name(get_cat_ID('Notícias' )) ?></a></li>
                <li><a class="cat-ativa" href="<?php echo esc_url(get_category_link(get_category_by_slug( 'tv' ))) ?>"><?php echo  get_cat_name(get_cat_ID('TV')) ?></a></li>
                <li><a class="cat-ativa" href="<?php echo esc_url(get_category_link(get_category_by_slug( 'cinema' ))) ?>"><?php echo  get_cat_name(get_cat_ID('Cinema')) ?></a></li>
                <li><a class="cat-ativa" href="<?php echo esc_url(get_category_link(get_category_by_slug( 'musica' ))) ?>"><?php echo  get_cat_name(get_cat_ID('Música')) ?></a></li>
                <li><a class="cat-ativa" href="<?php echo esc_url(get_category_link(get_category_by_slug( 'quadrinhos' ))) ?>"><?php echo  get_cat_name(get_cat_ID('Quadrinhos')) ?></a></li>
                <li><a class="cat-ativa" href="<?php echo esc_url(get_category_link(get_category_by_slug( 'games' ))) ?>"><?php echo  get_cat_name(get_cat_ID('Games')) ?></a></li>
                <li>+
                    <ul class="mais-opcoes">
                        <li><a href="<?php echo esc_url(get_category_link(get_category_by_slug('entrevistas'))) ?>"><?php echo  get_cat_name(get_cat_ID('Entrevistas')) ?></a></li>
                        <li><a href="<?php echo esc_url(get_category_link(get_category_by_slug('podcast'))) ?>"><?php echo  get_cat_name(get_cat_ID('Podcast')) ?></a></li>
                        <li><a href="<?php echo esc_url(get_category_link(get_category_by_slug('artigos'))) ?>"><?php echo  get_cat_name(get_cat_ID('Artigos')) ?></a></li>
                        <li><a href="<?php echo esc_url(get_category_link(get_category_by_slug( 'especiais' ))) ?>"><?php echo  get_cat_name(get_cat_ID('Especiais')) ?></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <nav id="menu-mobile">
            <ul>
                <p id="fechar-menu">x</p>
                <?php
                    $categories = get_categories( array(
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    ) ); 
                    foreach( $categories as $category ) {
                        if($category->term_id > 1){
                            $category_link = sprintf( 
                            '<a href="%1$s" alt="%2$s">%3$s</a>',
                            esc_url( get_category_link( $category->term_id ) ),
                            esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                            esc_html( $category->name )
                            );     
                            echo '<li>' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</li> ';
                        }                        
                    }
                    ?>                 
            </ul>
        </nav>
        <div class="rede-social">
            <ul>
                <li><a href="https://twitter.com/indiespensavels" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/indiespensavel" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/indiespensavel" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            </ul>
        </div>        
    </header>   