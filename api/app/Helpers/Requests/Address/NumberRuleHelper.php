<?php

namespace App\Helpers\Requests\Address;

class NumberRuleHelper
{
    public static function rule(string $key = 'number', bool $optional = false)
    {
        return [
            $key => [
                !$optional ? "required" : "nullable",
                "integer",
                "min:1",
                "max:99999"
            ]
        ];
    }

    public static function attribute(string $key = 'number'): array
    {
        return [$key => "número"];
    }
}
