<?php

namespace App\Services\Morse;

enum MorseEnum: string
{
    case a = ".-";
    case b = "-...";
    case c = "-.-.";
    case d = "-..";
    case e = ".";
    case f = "..-.";
    case g = "--.";
    case h = "....";
    case i = "..";
    case j = ".---";
    case k = "-.-";
    case l = ".-..";
    case m = "--";
    case n = "-.";
    case o = "---";
    case p = ".--.";
    case q = "--.-";
    case r = ".-.";
    case s = "...";
    case t = "-";
    case u = "..-";
    case v = "...-";
    case w = ".--";
    case x = "-..-";
    case y = "-.--";
    case z = "--..";
    case _0 = "-----";
    case _1 = ".----";
    case _2 = "..---";
    case _3 = "...--";
    case _4 = "....-";
    case _5 = ".....";
    case _6 = "-....";
    case _7 = "--...";
    case _8 = "---..";
    case _9 = "----.";
    case SPACE = "/";

    public static function fromChar(string $name)
    {
        if ($name === ' ') {
            return constant("self::SPACE");
        }

        if (ctype_digit($name)) {
            return constant("self::_$name");
        }

        return constant("self::$name");
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function getCharName($value)
    {
        $name = self::from($value)->name;

        if ($name === 'SPACE') return ' ';

        return str_replace('_', '', $name);
    }
}
