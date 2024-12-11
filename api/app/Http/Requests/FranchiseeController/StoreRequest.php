<?php

namespace App\Http\Requests\FranchiseeController;

use App\Helpers\Requests\Auth\EmailRuleHelper;
use App\Helpers\Requests\Auth\NameRuleHelper;
use App\Helpers\Requests\Auth\PasswordRuleHelper;
use App\Helpers\Requests\Generic\GenericIdRuleHelper;
use App\Traits\BasicFormRequestValidation;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreRequest extends FormRequest
{

    use BasicFormRequestValidation;

    public function rules(): array
    {
        return [
            ...NameRuleHelper::rule(),
            ...EmailRuleHelper::rule(),
            ...PasswordRuleHelper::rule(),
            ...GenericIdRuleHelper::rule('admins', key: 'admin_id', column: 'id')
        ];
    }

    public function attributes(): array
    {
        return [
            ...NameRuleHelper::attribute(),
            ...EmailRuleHelper::attribute(),
            ...PasswordRuleHelper::attribute(),
            ...GenericIdRuleHelper::attribute('Admin Id')
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'admin_id' => Auth::user()->admin_id
        ]);
    }
}
