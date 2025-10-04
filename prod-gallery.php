<?php

/**
 * Plugin Name: Prod Gallery
 * Plugin URI: https://github.com/stamie/prod-gallery
 * Description: An ecommerce toolkit that helps you sell anything. Beautifully.
 * Version: 1.1.5
 * Author: Emese Stampel
 * Author URI: https://github.com/stamie
 * Text Domain: prod-gallery
 * License: GPLv3
 * Requires at least: 6.8
 * Requires PHP: 7.4
 * Requires Plugins: woocommerce
 * @package ProdGallery
 */

use WG\WG_GridGallery;
use WG\WG_ProductButton;

defined('ABSPATH') || exit;
defined('WC_PLUGIN_FILE') || require_once __DIR__ . '/../woocommerce/woocommerce.php';

include_once __DIR__."/include/GridGallery.php";
include_once __DIR__."/include/ProductButton.php";

function WG_add_styles_and_scripts()
{
    wp_enqueue_style('WGStyle1', plugin_dir_url(__FILE__) . "/css/component.css", array(), '1.1', 'all');
    wp_enqueue_style('WGStyle2', plugin_dir_url(__FILE__) . "/css/demo.css", array('WGStyle1'), '1.1', 'all');
    wp_enqueue_script("WGJs0", plugin_dir_url(__FILE__) . "/js/modernizr.custom.js", array('jquery'), '1.1', false);
    wp_enqueue_script("WGJs1", plugin_dir_url(__FILE__) . "/js/imagesloaded.js", array('WGJs0'), 'v3.1.4', true);
    wp_enqueue_script("WGJs2", plugin_dir_url(__FILE__) . "/js/masonry.js", array('WGJs1'), 'v3.1.4', true);
    wp_enqueue_script("WGJs3", plugin_dir_url(__FILE__) . "/js/classie.js", array('WGJs2'), 'v3.1.4', true);
    wp_enqueue_script("WGJs4", plugin_dir_url(__FILE__) . "/js/cbpgridgallery.js", array('WGJs3'), 'v3.1.4', true);
    wp_enqueue_script("WGJs5", plugin_dir_url(__FILE__) . "/js/loadgrids.js", array('WGJs4'), 'v3.1.4', true);
    
}
add_action('wp_enqueue_scripts', 'WG_add_styles_and_scripts');

function wg_run_figure($args)
{
    $id = 'grid-gallery';
    if (isset($args) && isset($args['id'])) {
        $id = $args['id'];
        unset($args['id']);
    }
    $argoments = array();
    if (is_array($args)) {
        $argoments = $args;
    }
    $gridGallery = new WG_GridGallery($argoments, $id);

    return $gridGallery->get_echo();
}

add_shortcode('es-product-gallery', 'wg_run_figure');

function wg_run_button($args)
{
    $echo = new WG_ProductButton($args);

    return $echo->get_echo();
}

add_shortcode('es-product-gallery-button', 'wg_run_button');
