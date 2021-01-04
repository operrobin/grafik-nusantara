<?php

namespace App\Http\Requests\Admin\EmailConfig;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreEmailConfig extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.email-config.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'driver' => ['required', 'string'],
            'email' => ['required', 'email', 'string'],
            'encryption' => ['required', 'string'],
            'host' => ['required', 'string'],
            'password' => ['required', 'confirmed', 'min:7', 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9]).*$/', 'string'],
            'port' => ['required', 'integer'],
            'username' => ['required', 'string'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
