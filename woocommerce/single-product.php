<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header();?>

<main class="page wcpage">
   <section class="wcpage-single wcpage-single__box __container">
      <?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
do_action('woocommerce_before_main_content');
?>

      <?php while (have_posts()): ?>
      <?php the_post();?>

      <?php wc_get_template_part('content', 'single-product');?>

      <?php endwhile; // end of the loop. ?>

      <?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */

do_action('woocommerce_after_main_content');
?>
   </section>
</main>

<script>
/* Замена названия страны. Флаг + Страна */
document.getElementsByTagName("table")[0].innerHTML = document.getElementsByTagName("table")[0].innerHTML.replace(
   /Италия/g,
   '<img class="flag-icon" src="<?php bloginfo('template_url');?>/assets/img/flags/it.svg" alt="Флаг Италия">Италия'
);
document.getElementsByTagName("table")[0].innerHTML = document.getElementsByTagName("table")[0].innerHTML.replace(
   /Германия/g,
   '<img class="flag-icon" src="<?php bloginfo('template_url');?>/assets/img/flags/de.svg" alt="Флаг Германия">Германия'
);
document.getElementsByTagName("table")[0].innerHTML = document.getElementsByTagName("table")[0].innerHTML.replace(
   /Индия/g,
   '<img class="flag-icon" src="<?php bloginfo('template_url');?>/assets/img/flags/in.svg" alt="Флаг Индия">Индия'
);
document.getElementsByTagName("table")[0].innerHTML = document.getElementsByTagName("table")[0].innerHTML.replace(
   /Испания/g,
   '<img class="flag-icon" src="<?php bloginfo('template_url');?>/assets/img/flags/es.svg" alt="Флаг Испания">Испания'
);
document.getElementsByTagName("table")[0].innerHTML = document.getElementsByTagName("table")[0].innerHTML.replace(
   /Китай/g,
   '<img class="flag-icon" src="<?php bloginfo('template_url');?>/assets/img/flags/cn.svg" alt="Флаг Китай">Китай'
);
document.getElementsByTagName("table")[0].innerHTML = document.getElementsByTagName("table")[0].innerHTML.replace(
   /Португалия/g,
   '<img class="flag-icon" src="<?php bloginfo('template_url');?>/assets/img/flags/pt.svg" alt="Флаг Португалия">Португалия'
);
document.getElementsByTagName("table")[0].innerHTML = document.getElementsByTagName("table")[0].innerHTML.replace(
   /Россия/g,
   '<img class="flag-icon" src="<?php bloginfo('template_url');?>/assets/img/flags/ru.svg" alt="Флаг Россия">Россия'
);
document.getElementsByTagName("table")[0].innerHTML = document.getElementsByTagName("table")[0].innerHTML.replace(
   /Турция/g,
   '<img class="flag-icon" src="<?php bloginfo('template_url');?>/assets/img/flags/tr.svg" alt="Флаг Турция">Турция'
);

/* Декор нулей у рубля по тегам*/
document.getElementsByTagName("bdi")[0].innerHTML = document.getElementsByTagName("bdi")[0].innerHTML.replace(/.00/g,
   '<span class="wcpage-single__zero">.00</span>');
</script>

<?php
get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */