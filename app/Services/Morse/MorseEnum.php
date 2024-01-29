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

    case DOT = ".-.-.-";
    case COMMA = "--..--";

    case Q_MARK  = "..--..";
    case SLASH = "-..-.";

    public static function fromChar(string $name)
    {
        switch ($name) {
            case ' ':
            case "\r\n":
            case "\r":
            case "\n":
                return constant("self::SPACE");
            case '.':
                return constant("self::DOT");
            case ',':
                return constant("self::COMMA");
            case '?':
                return constant("self::Q_MARK");
            case '/':
                return constant("self::SLASH");
        }

        if (ctype_digit($name)) {
            return constant("self::_$name");
        }

        if (ctype_alpha($name)) {
            return constant("self::$name");
        }

        return '';
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function getCharName($value): array|string
    {
        $name = self::from($value)->name;

        return match ($name) {
            'SPACE' => ' ',
            'DOT' => '.',
            'COMMA' => ',',
            'Q_MARK' => '?',
            'SLASH' => '/',
            default => str_replace('_', '', $name),
        };
    }
}
