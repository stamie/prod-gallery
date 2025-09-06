<?php
/*
<figcaption>
    <h3>Letterpress asymmetrical</h3>
    <p>Chillwave hoodie ea gentrify aute sriracha consequat.</p>
</figcaption>

*/

namespace WG;


class WG_Figcaption
{
    private $echo;
    private function lang(string $string, string $lang) {
        switch ($lang) {
            case 'hu':
                switch ($string) {
                    case 'aviable':
                        return 'elérhető';
                }
            break;
            default:
                return $string;
        }
        return $string;
    
    }
    function __construct(int $productId, string $lang = "hu")
    {
        $product = wc_get_product($productId);
        
        $aviable = ($product->get_stock_status()=='instock')?('<br>'.$this->lang('aviable', $lang)): '';
        $this->echo = '<figcaption>
    <h3>'.$product->get_title().'</h3>
    <p>'.$aviable.$product->get_short_description().'</p>
</figcaption>';
        
    }
    public function get_echo()
    {
        return $this->echo;
    }
}
