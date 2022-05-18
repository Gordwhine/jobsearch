<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateJobRequest extends FormRequest
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
        return ($this->isMethod('POST') ? $this->store() : $this->update());
    }

    /**
     *  this validate the create job form
     */
    protected function store()
    {
        return [
            'email' => 'required|email',
            'jobTitle' => 'required',
            'jobLocation' => 'required',
            'jobType' => 'required',
            'jobDescription' => 'required',
            'companyName' => ['required', Rule::unique('jobs', 'company_name')],
            'tagline' => 'nullable',
            // 'tagline.*' => 'nullable|string',
            'companyDescription' => 'nullable',
            'website' => 'required|nullable|url',
            'facebookhandle' => 'nullable',
            'twitterhandle' => 'nullable',
            'linkedinhandle' => 'nullable',
        ];
    }

    /**
     *  this validate the Edit job form
     */
    protected function update()
    {
        return [
            'email' => 'required|email',
            'jobTitle' => 'required',
            'jobLocation' => 'required',
            'jobType' => 'required',
            'jobDescription' => 'required',
            'companyName' => 'required',
            'tagline' => 'nullable',
            // 'tagline.*' => 'nullable|string',
            'companyDescription' => 'nullable',
            'website' => 'nullable|url',
            'facebookhandle' => 'nullable',
            'twitterhandle' => 'nullable',
            'linkedinhandle' => 'nullable',
        ];
    }
}
