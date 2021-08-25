<?php
if (!defined('BASEPATH')) exit ('No direct script access allowed');

if(!function_exists('img_loader')){
    function img_loader($name,$format){
        return site_url()."assets/images/".$name. ".".$format;
    }
}

if(!function_exists('css_loader')){
    function css_loader($name){
        return site_url()."assets/css/".$name;
    }
}

if(!function_exists('js_loader')){
    function js_loader($name){
        return site_url()."assets/js/".$name;
    }
}

if(!function_exists('webfonts_loader')){
    function webfonts_loader($name,$format){
        return site_url()."assets/webfonts/".$name. ".".$format;
    }
}

if(!function_exists('fonts_loader')){
    function fonts_loader($name){
        return site_url()."assets/fonts/".$name;
    }
}

?>