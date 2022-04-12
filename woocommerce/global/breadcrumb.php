<?php
/**
 * Shop breadcrumb
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if (!defined('ABSPATH')) {
    exit;
}

if ($breadcrumb) {

    echo $wrap_before;

    if (is_single() && get_post_type() == 'product') {

        echo $prepend;

        if ($terms = get_the_terms($post->ID, 'product_cat')) {

            $referer = wp_get_referer();

            $printed = array();

            foreach ($terms as $term) {

                if (in_array($term->id, $printed)) {
                    continue;
                }

                $referer_slug = (strpos($referer, '/' . $term->slug . '/'));

                if (!$referer_slug == false) {

                    $printed[] = $term->id;

                    $category_name = $term->name;
                    $ancestors = get_ancestors($term->term_id, 'product_cat');
                    $ancestors = array_reverse($ancestors);

                    foreach ($ancestors as $ancestor) {
                        $ancestor = get_term($ancestor, 'product_cat');

                        if (!is_wp_error($ancestor) && $ancestor) {
                            echo $before . '<a href="' . get_term_link($ancestor->slug, 'product_cat') . '">' . $ancestor->name . '</a>' . $after . $delimiter;
                        }

                    }

                    echo $before . '<a href="' . get_term_link($term->slug, 'product_cat') . '">' . $category_name . '</a>' . $after . $delimiter;
                }
            }

        }

        echo $before . get_the_title() . $after;

    } else {

        foreach ($breadcrumb as $key => $crumb) {

            echo $before;

            if (!empty($crumb[1]) && sizeof($breadcrumb) !== $key + 1) {
                echo '<a href="' . esc_url($crumb[1]) . '">' . esc_html($crumb[0]) . '</a>';
            } else {
                echo esc_html($crumb[0]);
            }

            echo $after;

            if (sizeof($breadcrumb) !== $key + 1) {
                echo $delimiter;
            }

        }
    }

    echo $wrap_after;

}