<?php

namespace App\Helpers\Requests\Auth;

class NameRuleHelper
{
    public static function rule(string $key = 'name', bool $optional = false)
    {
        return [
            $key => [
                !$optional ? "required" : "nullable",
                "string",
                "min:6"
            ]
        ];
    }

    public static function attribute(string $key = 'name'): array
    {
        return [$key => "nome"];
    }
}
