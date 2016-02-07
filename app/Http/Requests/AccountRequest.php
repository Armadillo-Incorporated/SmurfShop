<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AccountRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'steam_id' => 'required|unique:steam_accounts',
            'username' => 'required|unique:steam_accounts',
            'steam_password' => 'required|confirmed',
            'digits' => 'exists:digits,digits',
            'rank' => 'exists:ranks,rank',
            'email' => 'required|email|unique:email_accounts',
            'email_password' => 'required|confirmed',
        ];
    }
}
