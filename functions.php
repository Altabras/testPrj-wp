<?php
add_theme_support( 'post-thumbnails' );


add_action('after_setup_theme', function () {
    register_nav_menus([
        'primary' => 'Головне меню',
        'footer_1' => 'Меню в підвалі 1',
        'footer_2' => 'Меню в підвалі 2',
        'footer_3' => 'Меню в підвалі 3',
        'footer_4' => 'Меню в підвалі 4',
        'footer_5' => 'Меню в підвалі 5',
    ]);
});


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'  => 'Налаштування теми',
        'menu_title' => 'Налаштування теми',
        'menu_slug'  => 'theme-general-settings',
        'redirect'  => false
    ));

}

?>


