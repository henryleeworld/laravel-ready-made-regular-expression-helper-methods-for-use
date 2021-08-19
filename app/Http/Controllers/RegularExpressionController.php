<?php

namespace App\Http\Controllers;

use Hotmeteor\Regex\Regex;

class RegularExpressionController extends Controller
{
    public function show() 
    {
        $subject = '快為北條麗寫出戀愛小說！(01)';
        echo $subject . '是否為字母字元組成：' . (Regex::isAlpha($subject, $allowWhitespace = false) ? '是' : '否') . PHP_EOL;
        echo $subject . '是否為字母數字組成：' . (Regex::isAlphanumeric($subject, $allowWhitespace = false) ? '是' : '否') . PHP_EOL;
        echo $subject . '是否為字母數字破折號組成：' . (Regex::isAlphadash($subject, $allowWhitespace = false) ? '是' : '否') . PHP_EOL;
        echo $subject . '是否為數字組成：' . (Regex::isDigits($subject, $allowWhitespace = false) ? '是' : '否') . PHP_EOL;
    }
}
