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

add_theme_support( 'post-thumbnails' );



//Shortcode

function include_sidebar_shortcode() {
    ob_start(); // Начать буферизацию вывода
    include('parts/sidebar.php'); // Подключение файла sidebar.php
    return ob_get_clean(); // Возврат содержимого буфера и очистка его
}
add_shortcode('my_sidebar', 'include_sidebar_shortcode'); // Добавление шорткода [my_sidebar]






