<?php

namespace App\Http\Requests\FranchiseController;

// use App\Helpers\Requests\Address\CepRuleHelper;
// use App\Helpers\Requests\Address\CityRuleHelper;
// use App\Helpers\Requests\Address\ComplementRuleHelper;
// use App\Helpers\Requests\Address\CountryRuleHelper;
// use App\Helpers\Requests\Address\NeighborhoodRuleHelper;
// use App\Helpers\Requests\Address\NumberRuleHelper;
// use App\Helpers\Requests\Address\StateRuleHelper;
// use App\Helpers\Requests\Address\StreetRuleHelper;
use App\Helpers\Requests\Auth\NameRuleHelper;
use App\Helpers\Requests\Franchise\ColorRuleHelper;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            ...NameRuleHelper::rule(),
            ...ColorRuleHelper::rule('primary_color'),
            ...ColorRuleHelper::rule('secondary_color'),
            // ...StreetRuleHelper::rule(),
            // ...NumberRuleHelper::rule(),
            // ...CityRuleHelper::rule(),
            // ...CepRuleHelper::rule(),
            // ...StateRuleHelper::rule(),
            // ...CountryRuleHelper::rule(),
            // ...ComplementRuleHelper::rule(),
            // ...NeighborhoodRuleHelper::rule()
        ];
    }

    public function attributes(): array
    {
        return [
            ...NameRuleHelper::attribute(),
            ...ColorRuleHelper::attribute(),
            ...ColorRuleHelper::attribute(),
            // ...StreetRuleHelper::attribute(),
            // ...NumberRuleHelper::attribute(),
            // ...CityRuleHelper::attribute(),
            // ...CepRuleHelper::attribute(),
            // ...StateRuleHelper::attribute(),
            // ...CountryRuleHelper::attribute(),
            // ...ComplementRuleHelper::attribute(),
            // ...NeighborhoodRuleHelper::attribute()
        ];
    }
}
