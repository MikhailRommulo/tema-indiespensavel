<?php get_header(); ?> 
    <main>
        <section class="noticia">
            <div class="alinhamento-noticias">
                <div class="corpo-noticia">
                    <div class="imagem-noticia" style="background-image: url(<?php the_post_thumbnail_url('corte_quadrado_grande') ?>);"></div>
                    <div class="titulo-noticia">
                        <h1><?php the_title() ?></h1>
                        <time datetime="<?php the_modified_time('c'); ?>">
                           <?php echo 'Publicado: '.get_the_time('d \d\e F \d\e Y').' | Modificado: '.get_the_modified_time('d \d\e F \d\e Y'); ?>
                        </time>

                    </div>
                    <div class="texto-noticia">
                        <p>
                        <?php echo $post -> post_content ?>
                        </p>
                    </div>
                </div> 
                <div class="ultimas-editoria">
                <?php
                $the_cat = the_category_ID ('');
                $the_post_id = get_the_ID();    
                $args_post = array('post_type' => 'post', 'posts_per_page' => 5, 'cat' => $the_cat, 'post__not_in' => array($the_post_id));
                $the_query_post = new WP_Query( $args_post );
                if($the_query_post -> have_posts()):
                    while($the_query_post -> have_posts()):
                        $the_query_post ->the_post();
                ?>
                    <a href ="<?php the_permalink()?>" class="ultimas-editoria-cor">                        
                            <div class="img-noticia ultimas-editoria-cor" style="background-image: url(<?php the_post_thumbnail_url('corte_quadrado_pequeno') ?>)"></div>                      
                        
                            <div class="texto-noticia-editoria">
                                <p> <?php the_title() ?> </p>
                            </div>
                        
                    </a>
                <?php                   
                 endwhile;
                endif;
                ?>
                </div> 
            </div>        
        </section>
        <section class="autor">
            <div class="foto-autor" <?php $email = get_the_author_email(); $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] ); $usegravatar = get_option('woo_gravatar');?> style="background-image: url(<?php echo $grav_url; ?>)"></div>
            <div class="descricao-autor">
                <div class="nome-autor"><?php echo get_the_author_firstname().' '.get_the_author_lastname() ?></div>
                <div class="info-autor"><?php the_author_description() ?></div>
                <?php if ( function_exists( 'wpsabox_author_box' ) ) echo wpsabox_author_box(); ?>
                <div class="rede-sociais-autor">                    
                    <a class="link-redes-sociais-autor" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="link-redes-sociais-autor" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="link-redes-sociais-autor" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>
        <?php 
            $categoriaNome = get_cat_name( the_category_ID('') );
            echo '<input type="hidden" id="pegar-categoria" value="'.$categoriaNome.'"/>';
        ?> 
        <script src="<?php bloginfo('template_directory') ?>/js/pegar-redes-sociais.js"></script>
        <script src="<?php bloginfo('template_directory') ?>/js/cor-por-categoria-single.js"></script>            
    </main>
    <?php comments_template(); ?>
    <script>
        var disqus_config = function () {
        this.language = "pt_BR";
        };
    </script>
<?php get_footer(); ?>