<?php

/**
 *
 */
function route_class()
{
    $name = Route::currentRouteName();
    return $name ? str_replace('.', '-', $name) : $name;
}