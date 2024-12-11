<?php

namespace App\Helpers\Requests\Search;

class PerPageRuleHelper
{
    public static function rule($key = 'per_page'): array
    {
        return [
            $key => [
                'sometimes',
                'integer',
            ],
        ];
    }

    public static function attribute(string $key = 'per_page'): array
    {
        return [$key => "Items por página"];
    }
}
