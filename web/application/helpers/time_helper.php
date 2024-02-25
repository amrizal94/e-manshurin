<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('minutes')) {
    function minutes($var)
    {
        return $var * 60;
    }
}

if (!function_exists('hours')) {
    function hours($var)
    {
        return $var * minutes(60);
    }
}

if (!function_exists('days')) {
    function days($var)
    {
        return $var * hours(24);
    }
}
