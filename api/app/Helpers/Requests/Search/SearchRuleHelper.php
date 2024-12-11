<?php

namespace App\Helpers\Requests\Search;

class SearchRuleHelper
{
    public static function rule($key = 'search'): array
    {
        return [
            $key => [
                'sometimes',
                'string',
            ],
        ];
    }

    public static function attribute(string $key = 'search'): array
    {
        return [$key => "busca"];
    }
}
