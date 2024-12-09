<?php

namespace App\Support;

use Manny\Manny;

class Mask
{
    const MAX_NUMBER_SIZE = 10;
    /**
     * Masks CPF
     *
     */
    public static function cpf(string $cpf): string
    {
        return Manny::mask($cpf, '111.111.111-11');
    }

    /**
     * Masks Date
     *
     */
    public static function date(string $date, $pattern = '11/11/1111'): string
    {
        return Manny::mask($date, $pattern);
    }

    /**
     * Masks Phone
     *
     */
    public static function phone(string $phone): string
    {
        $pattern = mb_strlen(self::strip($phone)) > self::MAX_NUMBER_SIZE ? '(11) 11111-1111' : '(11) 1111-11111';

        return Manny::mask($phone, $pattern);
    }

    public static function cep(string $cep): string
    {
        return Manny::mask($cep, '11111-111');
    }

    /**
     * Strip values from a string, default is keep only numbers
     * Available options are
     *    alpha - keep the alphabetical characters (case insensitive)
     *    num - keep the digits (0-9)
     *    comma - keep commas
     *    dot - keep periods
     *    dash - keep dashes/hyphens
     *    space - keep spaces
     *
     */
    public static function strip(string $string, array $options = ['num']): string
    {
        return Manny::stripper($string, $options);
    }
}
