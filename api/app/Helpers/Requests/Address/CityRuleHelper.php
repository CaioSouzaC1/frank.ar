<?php

namespace App\Helpers\Requests\Address;

class CityRuleHelper
{
    public static function rule(string $key = 'city', bool $optional = false)
    {
        return [
            $key => [
                !$optional ? "required" : "nullable",
                "string",
                "min:4"
            ]
        ];
    }

    public static function attribute(string $key = 'city'): array
    {
        return [$key => "cidade"];
    }
}
