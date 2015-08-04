<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * @param string: resim ismi( belirtilen resim tema klasöründe bulunan img klasörü içinde olmalıdır).
 *
 * return string: resmin tam path ini verir.
 * */

function theme_image($img){
    $CI = & get_instance();
    $data = & $CI->load->_ci_cached_vars;
    $image = $data['template_image_folder'].ltrim($img,'/');
    return $image;

}
