<?php

if (!function_exists('style')) {
    function style($asset)
    {
        return HTML::style(asset($asset));
    }
}

if (!function_exists('script')) {
    function script($asset)
    {
        return HTML::script(asset($asset));
    }
}

if (!function_exists('nav')) {
    /**
     * @param      $url
     * @param      $name
     * @param null $icon
     *
     * @return \Illuminate\View\View
     */
    function nav($url, $name, $icon = null)
    {
        $result = View::make('layout.link', compact('url', 'name', 'icon'));

        return $result;
    }
}

if (!function_exists('button')) {
    function button($url, $name, $class, $icon = null)
    {
        return View::make('layout.button', compact('url', 'name', 'class', 'icon'));
    }
}