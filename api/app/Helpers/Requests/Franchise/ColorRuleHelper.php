<?php

namespace App\Helpers\Requests\Franchise;

class ColorRuleHelper
{
    public static function rule(string $key = 'primary_color', bool $optional = false)
    {
        return [
            $key => [
                !$optional ? "required" : "nullable",
                "string",
                "regex:/^#([a-fA-F0-9]{3}|[a-fA-F0-9]{6})$/"
            ]
        ];
    }

    public static function attribute(string $key = 'primary_color'): array
    {
        return [$key => "cor"];
    }
}
