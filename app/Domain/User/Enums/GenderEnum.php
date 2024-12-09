<?php

namespace App\Domain\User\Enums;

class GenderEnum
{
    const WOMAN = 'woman';
    const MEN = 'men';
    const TRANS = 'transgender';
    const NONBNONC = 'non-binary/non-conforming';
    const NOT_RESPOND = 'not-respond';

    public static function getAll()
    {
        return [
            self::WOMAN,
            self::MEN,
            self::TRANS,
            self::NONBNONC,
            self::NOT_RESPOND,
        ];
    }
}
