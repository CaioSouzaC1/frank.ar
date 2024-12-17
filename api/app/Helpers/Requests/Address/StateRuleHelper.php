<?php

namespace App\Helpers\Requests\Address;

class StateRuleHelper
{
    public static function rule(string $key = 'state', bool $optional = false)
    {
        return [
            $key => [
                !$optional ? "required" : "nullable",
                "string",
            ]
        ];
    }

    public static function attribute(string $key = 'state'): array
    {
        return [$key => "estado"];
    }
}
