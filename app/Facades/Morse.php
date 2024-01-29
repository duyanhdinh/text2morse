<?php

namespace App\Facades;

use App\Services\Morse\MorseService;
use Illuminate\Support\Facades\Facade;

/**
 * @method static string encode(string $s)
 * @method static string encodeSecure(string $s)
 * @method static string decode(string $s)
 * @method static string decodeSecure(string $s)
 * @method static string validEncode(string $s)
 * @method static string validDecode(string $s)
 *
 * @see MorseService
 */
class Morse extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'morse';
    }

}
