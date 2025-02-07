<?php

namespace App\Http\Controllers;

use Hotmeteor\Regex\Regex;

class RegularExpressionController extends Controller
{
    public function show() 
    {
        $subject = __('Slam Dunk Jump Special Issue');
        echo $subject . __(' contains only alphabets: ') . (Regex::isAlpha($subject, $allowWhitespace = false) ? __('Yes') : __('No')) . PHP_EOL;
        echo $subject . __(' contains only alphanumerics: ') . (Regex::isAlphanumeric($subject, $allowWhitespace = false) ? __('Yes') : __('No')) . PHP_EOL;
        echo $subject . __(' contains only alphanumerics and dashes: ') . (Regex::isAlphadash($subject, $allowWhitespace = false) ? __('Yes') : __('No')) . PHP_EOL;
        echo $subject . __(' contains only numerics: ') . (Regex::isDigits($subject, $allowWhitespace = false) ? __('Yes') : __('No')) . PHP_EOL;
    }
}
