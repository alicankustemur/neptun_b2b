<?php defined('BASEPATH') OR exit('No direct script access allowed');


if ( ! function_exists('no_parse') ) {
    function no_parse($string = '') {
        return str_replace(array('{{','}}'), array('&#123;&#123;','&#125;&#125;'), $string);
    }
}


if ( ! function_exists('str_to_bool') ) {
    function str_to_bool($value = '', $strict = false) {
        if ( is_bool($value) ) {
            return $value;
        }
        elseif ( in_array(strtolower($value), array('no', 'n', 'false', '0')) ) {
            $bool = false;
        }
        elseif ($strict) {
            $bool = in_array(strtolower($value), array('yes', 'y', 'true', '1'));
        }
        else {
            $bool = true;
        }
        return $bool;
    }
}

/* EOF */