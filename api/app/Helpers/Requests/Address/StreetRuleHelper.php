<?php

namespace App\Helpers\Requests\Address;

class StreetRuleHelper
{
    public static function rule(string $key = 'street', bool $optional = false)
    {
        return [
            $key => [
                !$optional ? "required" : "nullable",
                "string",
                "min:10"
            ]
        ];
    }

    public static function attribute(string $key = 'street'): array
    {
        return [$key => "rua"];
    }
}
