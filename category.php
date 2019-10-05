<?php get_header(); ?> 
    <main>
    <?php
        $page_object = get_queried_object();
        $categoriaID = get_cat_ID($page_object->cat_name); 
    ?>      
        <section class="mais-lidas">
            <div class="titulo-mais-lidas">
                <span>mais lidas</span>
            </div>
            <div class="noticias-editorias">
            <?php 
               $arg_mais_lidas = array(
                'range' => 'last24hours',
                'cat' => $categoriaID,
                'limit' => 10,
                'thumbnail_width' => 500,
                'thumbnail_height' => 250,
                'excerpt_length' => 100,
                'stats_category' => 1,
                'post_html' => 
                '
                <li class="mais-lidas-unidade-categoria">
                <div class="noticia-editoria">
                    <a href="{url}">
                    <div style="background-image:url({thumb_url});"></div>                    
                    <div>{text_title}</div>
                    <div>
                        <p>{summary}</p>
                    </div>
                    </a>
                </div>
                </li>'
            );
            
            wpp_get_mostpopular( $arg_mais_lidas );
            ?>
            </div>
            <button id="btn_anterior_mais_lidas" class="anterior"><i class="fas fa-caret-left"></i></button>
            <button id="btn_proximo_mais_lidas" class="proximo"><i class="fas fa-caret-right"></i></button>
        </section>
        <section class="noticias-categoria">
            <div class="titulo-noticias-categoria">
                <span>Postagens</span>
            </div>
            <div class="noticias-categoria-container">
        <?php
            $the_post_id = get_the_ID();    
            $args_post = array('post_type' => 'post', 'posts_per_page' => 20, 'cat' => $categoriaID);
            $the_query_post = new WP_Query( $args_post );
            if($the_query_post -> have_posts()):
                while($the_query_post -> have_posts()):
                    $the_query_post ->the_post();
        ?>
            <div class="noticia-categoria">
                <a href="<?php the_permalink()?>">
                    <div><img src="<?php the_post_thumbnail_url( 'corte_retangular_medio' )?>"></div>                                        
                    <div><?php the_title()?></div>
                    <div>
                        <p><?php the_excerpt()?></p>
                    </div>
                </a>
            </div>
        <?php                   
                 endwhile;
            endif;
        ?>
            </div>
        </section>
        <script src="<?php bloginfo('template_directory') ?>/js/slider-mais-lidas-categoria.js"></script>
        <script src="<?php bloginfo('template_directory') ?>/js/cor-por-categoria.js"></script>
    </main>
<?php get_footer(); ?>