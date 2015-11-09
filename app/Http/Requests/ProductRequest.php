<?php

namespace App\Http\Requests;

class ProductRequest extends Request
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
            'code' => 'required|unique:products,id|numeric|digits:4',
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'active' => 'size:1|in:Y,N',
            'observation' => 'alpha_num',

        ];
    }
}
