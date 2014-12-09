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

function min_to_time($value)
{
    $hours = floor($value / 60);
    $min = $value - ($hours * 60);

    return str_pad($hours, 2, '0', STR_PAD_LEFT) . ':' . str_pad($min, 2, '0', STR_PAD_LEFT);
}