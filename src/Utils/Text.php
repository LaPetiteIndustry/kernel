<?php

namespace Lpi\Kernel\Utils;

class Text
{

    public static function slugify($text)
    {
        if (empty($text)) {
            return 'n-a';
        }

        $urlize = new Urlize();
        return $urlize->urlize($text);
    }
}

