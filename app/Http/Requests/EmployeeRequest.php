<?php

namespace App\Http\Requests;

class EmployeeRequest extends Request
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
            'identificator' => 'required|unique:employees,id|numeric|digits_between:8,9',
            'name' => 'required|alpha_num',
            'lastname' => 'required|alpha_num',
            'mobile' => 'required|digits:11',
            'email' => 'required|unique:employees,id|email',
            'address' => 'required',
            'telephone' => 'required|digits:11',
            'birthday' => 'date',
            'sex' => 'size:1|in:F,M',
            'employeesince' => 'date',
            'observation' => 'alpha_num',
        ];
    }
}
