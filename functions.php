<?php
    add_theme_support('post-thumbnails', array('post'));

    add_image_size( 'corte_quadrado_grande', 850, 516, true );

    add_image_size( 'corte_quadrado_medio', 650, 552, true );

    add_image_size( 'corte_quadrado_pequeno', 100, 98, true );

    add_image_size( 'corte_retangular_medio', 650, 276, true );

    add_image_size( 'corte_retangular_pequeno', 300, 176, true );
    
    function criar_custom_post_slide(){
        $args_slides_post_type = array(
            'labels' => array('name' => 'Slides'),
            'public' => true,
            'menu_icon' => 'dashicons-slides',
            'supports' => array('title','category'),
            'register_meta_box_cb' => 'slide_meta_box',
            'taxonomies' => array('category')
        );
        register_post_type( 'slides', $args_slides_post_type );
    }
    add_action( 'init', 'criar_custom_post_slide');

    function slide_meta_box(){
        add_meta_box( 'campos_slide', __('Posts'), 'campos_slide', 'slides');
    }

    function campos_slide(){
        global $post;
        $post_principal = get_post_meta( $post -> ID, 'post-principal', true );
        ?>
        <label for="slide-principal">Post principal:</label>
        <input type="text" name="post-principal" id="post-princiapl" value="<?php echo $post_principal; ?>">
        <?php
        $post_secundario1 = get_post_meta($post -> ID,'post-secundario1', true)
        ?>
        <label for="slide-principal">Post secundário:</label>
        <input type="text" name="post-secundario1" id="post-secundario1" value="<?php echo $post_secundario1; ?>">
        <?php
         $post_secundario2 = get_post_meta($post -> ID,'post-secundario2', true)
        ?>
        <label for="slide-principal">Post secundário:</label>
        <input type="text" name="post-secundario2" id="post-secundario2" value="<?php echo $post_secundario2; ?>">
        <?php
    }

    function salvar_campos_slides(){
        global $post;
        update_post_meta( $post->ID, 'post-principal', $_POST['post-principal'] );
        update_post_meta( $post->ID, 'post-secundario1', $_POST['post-secundario1'] );
        update_post_meta( $post->ID, 'post-secundario2', $_POST['post-secundario2'] );
    }
    add_action( 'save_post', 'salvar_campos_slides');
