<?php

namespace WG;

class WG_ProductButton {
    private $echo;
    function __construct(array $args){
        $this->echo = '<button class="grid-gallery-button" attr-id="';
        if (isset($args['id'])){
            $this->echo .= $args['id'].'" '; 
        } else {
            $this->echo .= 'grid-gallery" ';
        }
        foreach ($args as $key => $arg) {
            if ($key != 'id') {
                $this->echo .= 'attr-'.$key . '="'.$arg.'" '; 
            }
        }
        $this->echo .= '>További bútorok</button>';
        
    }

    public function get_echo() {
        return $this->echo;
    }

}