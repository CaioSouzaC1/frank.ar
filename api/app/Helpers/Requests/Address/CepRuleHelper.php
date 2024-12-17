<?php

namespace App\Helpers\Requests\Address;

class CepRuleHelper
{
    public static function rule(string $key = 'cep', bool $optional = false)
    {
        return [
            $key => [
                !$optional ? "required" : "nullable",
                "integer",
            ]
        ];
    }

    public static function attribute(string $key = 'cep'): array
    {
        return [$key => "cep"];
    }
}
