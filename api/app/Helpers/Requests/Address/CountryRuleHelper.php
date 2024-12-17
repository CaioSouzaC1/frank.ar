<?php

namespace App\Helpers\Requests\Address;

class CountryRuleHelper
{
    public static function rule(string $key = 'country', bool $optional = false)
    {
        return [
            $key => [
                !$optional ? "required" : "nullable",
                "string",
                "min:3"
            ]
        ];
    }

    public static function attribute(string $key = 'country'): array
    {
        return [$key => "país"];
    }
}
