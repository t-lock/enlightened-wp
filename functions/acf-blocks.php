<?php
add_action('acf/init', 'my_acf_init_block_types');

function my_acf_init_block_types() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'testimonial',
            'title'             => __('Testimonial'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'template-parts/blocks/testimonial/testimonial.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
            'enqueue_assets' => function(){
              wp_enqueue_style( 'block-testimonial', get_template_directory_uri() . '/template-parts/blocks/testimonial/testimonial.css' );
              wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/template-parts/blocks/testimonial/testimonial.js', array('jquery'), '', true );
            },
        ));
    }
}
