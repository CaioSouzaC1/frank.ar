<?php

namespace App\Http\Requests\FranchiseUnitController;

use App\Helpers\Requests\Address\CepRuleHelper;
use App\Helpers\Requests\Address\CityRuleHelper;
use App\Helpers\Requests\Address\ComplementRuleHelper;
use App\Helpers\Requests\Address\CountryRuleHelper;
use App\Helpers\Requests\Address\NeighborhoodRuleHelper;
use App\Helpers\Requests\Address\NumberRuleHelper;
use App\Helpers\Requests\Address\StateRuleHelper;
use App\Helpers\Requests\Address\StreetRuleHelper;
use App\Helpers\Requests\Auth\NameRuleHelper;
use App\Helpers\Requests\Generic\GenericIdRuleHelper;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            ...StreetRuleHelper::rule(),
            ...NumberRuleHelper::rule(),
            ...CityRuleHelper::rule(),
            ...CepRuleHelper::rule(),
            ...StateRuleHelper::rule(),
            ...CountryRuleHelper::rule(),
            ...ComplementRuleHelper::rule(),
            ...NeighborhoodRuleHelper::rule(),
            ...GenericIdRuleHelper::rule('franchises', 'franchise_id', exists: true),
            ...GenericIdRuleHelper::rule('users', 'user_id', exists: true),
            ...NameRuleHelper::rule()
        ];
    }

    public function attributes(): array
    {
        return [
            ...StreetRuleHelper::attribute(),
            ...NumberRuleHelper::attribute(),
            ...CityRuleHelper::attribute(),
            ...CepRuleHelper::attribute(),
            ...StateRuleHelper::attribute(),
            ...CountryRuleHelper::attribute(),
            ...ComplementRuleHelper::attribute(),
            ...NeighborhoodRuleHelper::attribute(),
            ...GenericIdRuleHelper::attribute('franchise_id', 'Id da Franquia'),
            ...GenericIdRuleHelper::attribute('user_id', 'Id do usuário'),
            ...NameRuleHelper::attribute()
        ];
    }
}