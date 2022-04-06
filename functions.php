<?php
/* Подключение Css + Js */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/app.min.js', array(), 'null', true);
});

/* Отключение Админ-бара */
show_admin_bar(false);

/* Очистка хука WP_HEAD */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

function pss_disable_emoji()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}

function remove_global_styles()
{
    wp_dequeue_style('global-styles');
}
function wpassist_remove_block_library_css()
{
    wp_dequeue_style('wp-block-library');
}
add_action('init', 'pss_disable_emoji');
add_action('wp_enqueue_scripts', 'wpassist_remove_block_library_css');
add_action('wp_enqueue_scripts', 'remove_global_styles');

/* Свои функции */

/* Добавление в Админ-панель "Настройки темы" для ACF*/
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Основные настройки',
        'menu_title' => 'Настройки темы',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
    ));
}