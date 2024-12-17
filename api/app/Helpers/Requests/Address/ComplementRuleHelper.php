<?php

namespace App\Helpers\Requests\Address;

class ComplementRuleHelper
{
    public static function rule(string $key = 'complement', bool $optional = true)
    {
        return [
            $key => [
                !$optional ? "required" : "nullable",
                "string",
            ]
        ];
    }

    public static function attribute(string $key = 'complement'): array
    {
        return [$key => "complemento"];
    }
}
