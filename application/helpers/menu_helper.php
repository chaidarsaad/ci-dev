<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('active_link')) {
    function active_link($controller)
    {
        $CI = &get_instance();
        $class = $CI->router->fetch_class(); // Nama controller
        $method = $CI->router->fetch_method(); // Nama method

        return ($class == $controller || $method == $controller) ? 'active' : '';
    }
}

if (!function_exists('menu_open')) {
    function menu_open($controllers = [])
    {
        $CI = &get_instance();
        $class = $CI->router->fetch_class(); // Nama controller

        return in_array($class, $controllers) ? 'menu-open' : '';
    }
}
