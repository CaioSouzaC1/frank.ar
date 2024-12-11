<?php

namespace App\Helpers\Requests\Search;

class PageRuleHelper
{
    public static function rule($key = 'page'): array
    {
        return [
            $key => [
                'sometimes',
                'integer',
            ],
        ];
    }

    public static function attribute(string $key = 'page'): array
    {
        return [$key => "Página"];
    }
}
