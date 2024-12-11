<?php

namespace App\Http\Requests\Auth;

use App\Helpers\Requests\Auth\EmailRuleHelper;
use App\Helpers\Requests\Auth\PasswordRuleHelper;
use Illuminate\Foundation\Http\FormRequest;


class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            ...EmailRuleHelper::rule(unique: false, exists: true),
            ...PasswordRuleHelper::rule()
        ];
    }

    public function attributes(): array
    {
        return [
            ...EmailRuleHelper::attribute(),
            ...PasswordRuleHelper::attribute()
        ];
    }
}
