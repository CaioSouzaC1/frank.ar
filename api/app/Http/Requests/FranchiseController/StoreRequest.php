<?php

namespace App\Http\Requests\FranchiseController;


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
        ];
    }

    public function attributes(): array
    {
        return [
            ...NameRuleHelper::attribute(),
            ...ColorRuleHelper::attribute(),
            ...ColorRuleHelper::attribute(),
        ];
    }
}
