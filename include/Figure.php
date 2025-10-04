<?php

namespace WG;

/*
Fejrész
<li>
    <figure>
*/
/*
Lábrész
</figure>
    </li>
*/

require_once __DIR__ . "/Img.php";
require_once __DIR__ . "/Figcaption.php";

use WG\WG_IMG;
use WG\WG_Figcaption;

class WG_Figure
{
    const HEADER = '<li><figure>';
    const FOOTER = '</figure></li>';
    private $echo;
    function __construct(array $args = array(), array $categories_slug = array(), string $is_slider = 'no', bool $is_full = true)
    {
        $categories = array();
        foreach ($categories_slug as $category_slug){
            $category = get_term_by('slug', $category_slug, 'product_cat', ARRAY_A);

            if (!$category && isset($category_slug)) return '';
            if ($category)
                $categories[] = $category['term_id'];
        }
        $categories = ( count($categories) > 0 ) ? array('categories' => $categories) : null;
        $products = array();
        $limit = 5;
        $page = 0;
        if (isset($args['limit']) && intval($args['limit']) > 0){
            $limit = intval($args['limit']);
            if (isset($args['page']) && intval($args['page']) > 0){
                $page = intval($args['page']) - 1;
            }
        }
        $order_by = array();
        if (isset($args['order'])) {
            $order_by = array('order' => $args['order'], 'by' => 'asc');
            if (isset($args['by']) && $args['by'] == 'desc') {
                $order_by['by'] = $args['by'];
            } if (isset($args['by']) && $args['by'] !== 'asc') {
                exit;
            }

        }

        foreach ($args as $key => $arg) {
            if ($key !== 'order' && $key !== 'by') $order_by[$key] = $arg;
        }

        if (empty($categories)) {
            $products = wc_get_products(array(
                'limit' => $limit,  // Attempt to fetch all products
                'page' => $page,
                'status' => 'publish',
            ) + $order_by);
        } else {
            $products = wc_get_products(array(
                'limit' =>  $limit,  // Attempt to fetch all products
                'page' => $page,
                'status' => 'publish',
            ) + $order_by + $categories);
        }
        //$products = $query->get_products();
        $this->echo = '';
        foreach ($products as $product) {
            $this->echo .= self::HEADER;
            $this->echo .= '<a href="'. $product->get_permalink().'" target="_blank">';

            $wg_img = new WG_IMG($product->get_id());
            $wg_figcaption = new WG_Figcaption($product->get_id());
            if ($is_slider == 'yes') {
                $this->echo .= $wg_figcaption->get_echo();
                $this->echo .= $wg_img->get_echo();
            } else {
                $this->echo .= $wg_img->get_echo();
                $this->echo .= $wg_figcaption->get_echo();
            }
            $this->echo .= '</a>';
            $this->echo .= self::FOOTER;
        }
    }
    public function get_echo()
    {
        return $this->echo;
    }
}
