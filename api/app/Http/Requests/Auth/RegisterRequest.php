<?php

namespace App\Http\Requests\Auth;

use App\Helpers\Requests\Auth\EmailRuleHelper;
use App\Helpers\Requests\Auth\NameRuleHelper;
use App\Helpers\Requests\Auth\PasswordRuleHelper;
use App\Traits\BasicFormRequestValidation;
use Illuminate\Foundation\Http\FormRequest;


class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            ...NameRuleHelper::rule(),
            ...EmailRuleHelper::rule(),
            ...PasswordRuleHelper::rule()

        ];
    }

    public function attributes(): array
    {
        return [
            ...NameRuleHelper::attribute(),
            ...EmailRuleHelper::attribute(),
            ...PasswordRuleHelper::attribute()
        ];
    }
}
