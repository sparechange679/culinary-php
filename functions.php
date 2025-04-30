<?php

function isUrl($url)
{
    return $_SERVER['REQUEST_URI'] === $url;
}

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}
