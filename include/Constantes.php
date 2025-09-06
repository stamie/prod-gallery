<?php
namespace WG;

class WG_Constantes {
    
    protected $WG_Url ='';
    protected $WG_Dir = "/wp-content/plugins/prod-gallery";
    
    public function __construct()
    {
        $this->WG_Url = get_option('siteurl', null);
        
    }
    public function get_ownUrl() {

        return $this->WG_Url.$this->WG_Dir;
    }
    public function get_url() {
        return $this->WG_Url;
    }
    public function get_dir() {
        return $this->WG_Dir;
    }
}
