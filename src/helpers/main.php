<?php
function array_any($array, $registration)
{
    foreach ($array as $current) {
        if ($current->getRegistration() == $registration) {
            return true;
        }
    }
    return false;
}
