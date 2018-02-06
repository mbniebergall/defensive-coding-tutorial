<?php

class RegularExpressions
{
    public static function digits(int $length = 5) : string
    {
        return '/^\\d{' . $length . '}$/';
    }

    public static function dateTime() : string
    {
        return '/^(19|20|21)\\d{2}-(0[1-9]|1[012])-' .
            '(0[1-9]|[12][0-9]|3[01]) ' .
            '([01][0-9]|2[0123]):([0-5][0-9]):([0-5][0-9])$/';
    }

    public static function dateTimezone() : string
    {
        return '/^(19|20|21)\\d{2}-(0[1-9]|1[012])-' .
            '(0[1-9]|[12][0-9]|3[01])T' .
            '([01][0-9]|2[0123]):([0-5][0-9]):([0-5][0-9])' .
            '(\\+|\\-)(0[0-9]|1[012]):(00|30)$/';
    }

    public static function time() : string
    {
        return '/^([01][0-9]|2[0123]):([0-5][0-9]):([0-5][0-9])$/';
    }

    public static function date() : string
    {
        return '/^(19|20|21)\\d{2}-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])$/';
    }

    public static function phone() : string
    {
        return '/^\d{3}-?\d{3}-?\d{4}$/';
    }

    public static function postalCode() : string
    {
        return '/^\d{5}-?\d{4}$/';
    }

    public static function alphaCaps() : string
    {
        return '/^[A-Z]+$/';
    }

    public static function alphanumeric() : string
    {
        return '/^[a-zA-Z0-9]+$/';
    }
}