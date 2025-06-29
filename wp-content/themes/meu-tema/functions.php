<?php
function meu_tema_setup() {
    add_theme_support('post-thumbnails'); // Suporte a imagens destacadas
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'meu-tema'),
    ));
}
add_action('after_setup_theme', 'meu_tema_setup');

// Adicionar scripts e estilos
function meu_tema_scripts() {
    wp_enqueue_style('estilo-principal', get_stylesheet_uri());
    wp_enqueue_script('script-principal', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');
?>


