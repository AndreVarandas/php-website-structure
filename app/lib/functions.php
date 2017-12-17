<?php

/**
 * @param $name
 * @param string $def
 * @return string
 */
function get($name, $def='')
{
    return isset($_REQUEST[$name]) ? $_REQUEST[$name] : $def;
}