<?php

namespace App\Http\Requests\FranchiseeController;

use App\Helpers\Requests\Generic\GenericIdRuleHelper;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DestroyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            ...GenericIdRuleHelper::rule('admins', key: 'admin_id', column: 'id'),
            ...GenericIdRuleHelper::rule('franchisees', key: 'id', column: 'id')
        ];
    }

    public function attributes(): array
    {
        return [
            ...GenericIdRuleHelper::attribute('Admin Id'),
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'admin_id' => Auth::user()->admin_id,
            'id' => $this->route('id')
        ]);
    }
}
