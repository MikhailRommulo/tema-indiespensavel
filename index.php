<?php get_header(); ?> 
    <main>       
        <section class="slider-master">
        <?php 
        $args_slide = array('post_type' => 'slides','cat'=>1);
        $the_query_slides = new WP_Query( $args_slide );
        if($the_query_slides -> have_posts()):
            while($the_query_slides -> have_posts()):
                $the_query_slides ->the_post();
                $principal = intval(get_post_meta( get_the_id(), 'post-principal', true));
                $secundario1 = intval(get_post_meta( get_the_id(), 'post-secundario1', true));
                $secundario2 = intval(get_post_meta( get_the_id(), 'post-secundario2', true));            
        ?>
            <div class="slider">        
                <div class="principal">                
                    <div class="overflow-hidden">
                    <?php                        
                        $args_post = array('post_type' => 'post', 'p'=> $principal);
                        $the_query_post = new WP_Query( $args_post );
                        if($the_query_post -> have_posts()):
                                $the_query_post ->the_post();
                    ?>
                    <a href="<?php the_permalink() ?>">
                        <div style="background-image: url(<?php the_post_thumbnail_url('corte_quadrado_medio') ?>);">                                                             
                            <p><?php the_title(); ?></p>
                            <p><?php the_excerpt(); ?></p>                        
                        </div>
                    </a>
                    <?php  
                        endif;                    
                    ?>
                    </div>
                </div>
                <div class="secundario">
                    <div>
                        <div class="overflow-hidden">
                        <?php 
                            $args_post = array('post_type' => 'post', 'p'=> $secundario1);
                            $the_query_post = new WP_Query( $args_post );
                            if($the_query_post -> have_posts()):
                                    $the_query_post ->the_post();
                        ?>
                        <a href="<?php the_permalink() ?>">
                            <div style="background-image: url(<?php the_post_thumbnail_url('corte_retangular_medio') ?>);">                                                                                      
                                <p><?php the_title(); ?></p>
                                <?php the_excerpt(); ?>
                            </div>
                        </a>
                        <?php                         
                            endif;      
                        ?>
                        </div>
                    </div>
                    <div>
                        <div class="overflow-hidden">
                        <?php 
                            $args_post = array('post_type' => 'post', 'p'=> $secundario2);
                            $the_query_post = new WP_Query( $args_post );
                            if($the_query_post -> have_posts()):
                                    $the_query_post ->the_post();
                        ?>
                        <a href="<?php the_permalink() ?>">
                            <div style="background-image: url(<?php the_post_thumbnail_url('corte_retangular_medio') ?>);">                                                                                      
                                <p><?php the_title(); ?></p>
                                <?php the_excerpt() ?>
                            </div>
                        </a>
                        <?php 
                            endif;      
                        ?>
                        </div>
                    </div>
                </div>      
            </div>
            <?php 
                endwhile;
            endif;
            ?>
            <button id="btn_anterior_slider" class="anterior"><i class="fas fa-caret-left"></i></button>
            <button id="btn_proximo_slider" class="proximo"><i class="fas fa-caret-right"></i></button>
        </section>
        <section class="ultimas-noticias">
            <div class="titulo-ultimas">
                <span>últimas notícias</span>
            </div>
            <div class="rolagem-noticias">
            <?php 
                $args_post = array('post_type' => 'post', 'posts_per_page' => 20);
                $the_query_post = new WP_Query( $args_post );
                if($the_query_post -> have_posts()):
                    while($the_query_post -> have_posts()):
                        $the_query_post ->the_post();
            ?>
                <div class="noticia">
                <a href="<?php the_permalink() ?>">                    
                    <div style="background-image: url(<?php the_post_thumbnail_url('corte_retangular_pequeno') ?>);"></div>
                    <div>
                        <p><?php the_title() ?></p>
                    </div> 
                    </a>                   
                </div>              
            <?php            
                endwhile;
            endif;
            ?>          
            </div>
            <button id="btn_anterior_ultimas" class="anterior"><i class="fas fa-caret-left"></i></button>
            <button id="btn_proximo_ultimas" class="proximo"><i class="fas fa-caret-right"></i></button>
        </section>
        <section class="mais-lidas">
            <div class="titulo-mais-lidas">
                <span>mais lidas</span>
            </div>
            <div class="noticias-editorias">
            <?php 
                
                $arg_mais_lidas = array(
                    'range' => 'last24hours',
                    'limit' => 6,
                    'thumbnail_width' => 500,
                    'thumbnail_height' => 250,
                    'excerpt_length' => 155,
                    'stats_category' => 1,
                    'post_html' => 
                    '
                    <li>
                    <div class="noticia-editoria">
                        <div>{thumb}</div>
                        <div>{category}</div>
                        <a href="{url}">
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
        </section>
        <script src="<?php bloginfo('template_directory') ?>/js/slider-principal.js"></script>
        <script src="<?php bloginfo('template_directory') ?>/js/slider-ultimas.js"></script>
    </main>
<?php get_footer(); ?>