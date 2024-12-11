<?php

namespace App\Http\Requests\FranchiseeController;

use App\Helpers\Requests\Generic\GenericIdRuleHelper;
use App\Helpers\Requests\Search\PageRuleHelper;
use App\Helpers\Requests\Search\PerPageRuleHelper;
use App\Helpers\Requests\Search\SearchRuleHelper;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class IndexRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            ...SearchRuleHelper::rule(),
            ...PageRuleHelper::rule(),
            ...PerPageRuleHelper::rule(),
            ...GenericIdRuleHelper::rule('admins', key: 'admin_id', column: 'id')
        ];
    }

    public function attributes(): array
    {
        return [
            ...SearchRuleHelper::attribute(),
            ...PageRuleHelper::attribute(),
            ...PerPageRuleHelper::attribute(),
            ...GenericIdRuleHelper::attribute('Admin Id')
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'admin_id' => Auth::user()->admin_id,
            "search" => $this->query("search", ''),
            'page' => $this->query('page', 1),
            'per_page' => $this->query('per_page', 10),
        ]);
    }
}
