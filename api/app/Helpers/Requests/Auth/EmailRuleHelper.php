<?php

namespace App\Helpers\Requests\Auth;

class EmailRuleHelper
{
    public static function rule(string $key = 'email', bool $optional = false, bool $unique = true, bool $exists = false): array
    {
        return [
            $key => [
                !$optional ? "required" : "nullable",
                "email",
                $unique ? "unique:users,email" : "",
                $exists ? "exists:users,email" : ""
            ]
        ];
    }

    public static function attribute(string $key = 'email'): array
    {
        return [$key => "email"];
    }
}
