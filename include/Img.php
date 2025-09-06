<?php
/*
<img src="img/thumb/1.png" alt="img01"/>
*/
namespace WG;
class WG_IMG {
    private $echo;
    function __construct(int $productId){
        $product = wc_get_product($productId); $this->echo = $product->get_image();
        
    }

    public function get_echo() {
        return $this->echo;
    }
}