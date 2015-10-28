<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClientRequest extends Request
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
            'identificator' => 'required|unique:clients|numeric|digits_between:8,9',
            'name' => 'required|alpha_num',
            'lastname' => 'required|alpha_num',
            'mobile' => 'required|digits:11',
            'email' => 'required|unique:clients|email',
            'address' => 'required|alpha_num',
            'telephone' => 'required|digits:11',
            'birthday' => 'date',
            'sex' => 'size:1|in:f,m,F,M',
            'discount' => 'numeric',
            'clientsince' => 'date',
            'lastvisit' => 'date',
            'observation' => 'alpha_num',
            'sendmail' => 'size:1|in:s,n,S,N',

        ];
    }
}