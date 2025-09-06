<?php
namespace WG;
use WG\WG_Figure;
require_once __DIR__."/Figure.php";
class WG_GridGallery {
    
    const HEADER = //'<div class=clearfix></div>'.
    '
        <header class="clearfix">
        </header>
    <div id="divId" class="grid-gallery">
    <section class="grid-wrap">
        <ul class="grid">
            <li class="grid-sizer"></li>';
    const SLIDER = '</ul>
    </section>
    <section class="slideshow">
    <ul>';
    const FOOTER = '</ul>
    </section>
    </div>';
    private $echo = '';
    function __construct(array $args = array(), string $divId = null){
        $header = self::HEADER;
        if (isset($divId)) {
            $header = str_replace('id="divId"', 'id="'.$divId.'"', $header);
        } else {
            $header = str_replace('id="divId"', 'id="grid-gallery"', $header);
        }
        $this->echo = $header;
        $categories = array();
        if (is_array($args) && isset($args['cat'])){
            $categories = explode(' ', $args['cat']);
            unset($args['cat']);
        }
        $wg_figure = new WG_Figure($args, $categories);
        $this->echo .= $wg_figure->get_echo();
        $this->echo .= self::SLIDER;
        $wg_figure_slider = new WG_Figure($args, $categories, 'yes');
        $this->echo .= $wg_figure_slider->get_echo();
        $this->echo .= self::FOOTER;
    }
    public function get_echo() {
        return $this->echo;
    }
}