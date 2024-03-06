<?php
function array_any($array, $function)
{
    foreach ($array as $current) {
        if ($function($current)) {
            return true;
        }
    }
    return false;
}
