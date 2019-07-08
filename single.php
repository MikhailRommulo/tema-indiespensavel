<?php get_header(); ?>
    <main>
        <div class="noticia">
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
        </div>
        <//?php tutsup_author_area() ?>
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