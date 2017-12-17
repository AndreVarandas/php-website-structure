<?php

/**
 * This function "handles" incoming requests.
 * 
 * @param $name - Request to search for.
 * @param string $def - The default request if none is found.
 * @return string
 */
function get($name, $def='')
{
    return isset($_REQUEST[$name]) ? $_REQUEST[$name] : $def;
}