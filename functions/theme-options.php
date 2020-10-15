<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_text', 'Text Field' ),
            Field::make( 'radio_image', 'crb_background_image', __( 'Choose Background Image' ) )
                ->set_options( array(
                    'mountain' => 'https://source.unsplash.com/X1UTzW8e7Q4/800x600',
                    'temple' => 'https://source.unsplash.com/ioJVccFmWxE/800x600',
                    'road' => 'https://source.unsplash.com/5c8fczgvar0/800x600',
                ) )
        ) );
}



// This only has to happen once, pretty sure

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( get_template_directory() . '/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}
