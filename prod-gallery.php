<?php

/**
 * Plugin Name: Prod Gallery
 * Plugin URI: https://github.com/stamie/prod-gallery
 * Description: An ecommerce toolkit that helps you sell anything. Beautifully.
 * Version: 1.1.4
 * Author: Emese Stampel
 * Author URI: https://github.com/stamie
 * Text Domain: prod-gallery
 * License: GPLv3
 * Requires at least: 6.8
 * Requires PHP: 7.4
 *
 * @package ProdGallery
 */

use WG\WG_GridGallery;
use WG\WG_Constantes;

defined('ABSPATH') || exit;
defined('WC_PLUGIN_FILE') || require_once __DIR__ . '/../woocommerce/woocommerce.php';

require_once __DIR__ . '/include/Autoload.php';

function WG_add_styles_and_scripts()
{
    $WG_Constantes = new WG_Constantes();
    wp_enqueue_style('WGStyle1', $WG_Constantes->get_ownUrl() . "/css/component.css", array(), '1.1', 'all');
    wp_enqueue_style('WGStyle2', $WG_Constantes->get_ownUrl() . "/css/demo.css", array('WGStyle1'), '1.1', 'all');
    wp_enqueue_script("WGJs0", $WG_Constantes->get_ownUrl() . "/js/modernizr.custom.js", array('jquery'), '1.1', false);
    wp_enqueue_script("WGJs1", $WG_Constantes->get_ownUrl() . "/js/imagesloaded.js", array('WGJs0'), '1.1', true);
    wp_enqueue_script("WGJs2", $WG_Constantes->get_ownUrl() . "/js/masonry.js", array('WGJs1'), '1.1', true);
    wp_enqueue_script("WGJs3", $WG_Constantes->get_ownUrl() . "/js/classie.js", array('WGJs2'), '1.1', true);
    wp_enqueue_script("WGJs4", $WG_Constantes->get_ownUrl() . "/js/cbpgridgallery.js", array('WGJs3'), '1.1', true);
    wp_enqueue_script("WGJs5", $WG_Constantes->get_ownUrl() . "/js/loadgrids.js", array('WGJs4'), '1.1', true);
    
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
