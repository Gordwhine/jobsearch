<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
        // return ($this->isMethod('POST') ? $this->store() : $this->authenticate());
        return $this->store();
    }

     /**
     *  this validate the create job form
     */
    protected function store()
    {
        return [
            'username' => 'required|min:3',
            'email' => ['required','email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
        ];
    }

    /**
     *  this validate the Edit job form
     */
    // protected function authenticate()
    // {
    //     return [
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ];
    // }
}
