<?php

namespace App\Services\Morse;

class MorseService
{
    public function encode($s): string
    {
        return trim(array_reduce(
            str_split(strtolower($s)),
            fn($final, $c) => $final . ' ' . MorseEnum::fromChar($c)->value
        ));
    }

    public function encodeSecure($s): string
    {
        return $this->encode($this->validEncode($s));
    }

    public function decode($s): string
    {
        $values = MorseEnum::values();
        $decode .= array_reduce(
            explode(' ', $s),
            function ($final, $c) use (&$decode, $values) {
                if (in_array($c, $values)) {
                    $final .= MorseEnum::getCharName($c);
                } else  $final .= $c;

                return $final;
            }
        );

        return $decode;
    }

    public function decodeSecure($s): string
    {
        return $this->decode($this->validDecode($s));
    }

    public function validEncode($s): string
    {
        return strval(preg_replace("/[^a-zA-Z0-9 .,?\/\r\n]+/", "", $s));
    }

    public function validDecode($s): string
    {
        return strval(preg_replace("/[^\-. \/]+/", "", $s));
    }

}
