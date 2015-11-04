<?php

namespace App\Http\Requests;

class ProductProviderRequest extends Request
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
            'identificator' => 'required|alpha_num|between:8,11|unique:product_providers,id',
            'name' => 'required',
            'telephone' => 'required|digits:11',
            'fax' => 'digits:11',
            'email' => 'required|unique:product_providers,id|email',
            'address' => 'required',
            'payment' => 'in:Credito,Contado',
            'discount' => 'digits_between:1,2',
            'url' => 'url',
            'discount' => 'numeric',
            'bank_account' => 'digits:20',
        ];
    }
}
