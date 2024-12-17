<?php

namespace App\Helpers\Requests\Address;

class NeighborhoodRuleHelper
{
    public static function rule(string $key = 'neighborhood', bool $optional = false)
    {
        return [
            $key => [
                !$optional ? "required" : "nullable",
                "string",
                "min:6"
            ]
        ];
    }

    public static function attribute(string $key = 'neighborhood'): array
    {
        return [$key => "bairro"];
    }
}
