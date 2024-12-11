<?php

namespace App\Helpers\Requests\Auth;

class PasswordRuleHelper
{
    public static function rule(string $key = 'password', bool $optional = false)
    {
        return [
            $key => [
                !$optional ? "required" : "nullable",
                "string",
                "min:6"
            ]
        ];
    }

    public static function attribute(string $key = 'password'): array
    {
        return [$key => "senha"];
    }
}
