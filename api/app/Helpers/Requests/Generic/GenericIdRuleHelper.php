<?php

namespace App\Helpers\Requests\Generic;

class GenericIdRuleHelper
{
    public static function rule(string $table, string $key = 'id', string $column = 'id', bool $optional = false, bool $unique = false, bool $exists = true): array
    {
        return [
            $key => [
                !$optional ? "required" : "nullable",
                "uuid",
                $unique ? "unique:$table,$column" : "",
                $exists ? "exists:$table,$column" : ""
            ]
        ];
    }

    public static function attribute(string $key = 'id'): array
    {
        return [$key => "id"];
    }
}
