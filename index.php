<?php
function isFirstLetterUpperCase($str)
{
    $regexp = '/[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo " Hop le";
    } else {
        echo " Ko hop le";
    }
}

isFirstLetterUpperCase("Nguyen van Nam");