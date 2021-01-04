<?php

namespace App\Http\Requests\Admin\EmailConfig;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateEmailConfig extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.email-config.edit', $this->emailConfig);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'driver' => ['sometimes', 'string'],
            'email' => ['sometimes', 'email', 'string'],
            'encryption' => ['sometimes', 'string'],
            'host' => ['sometimes', 'string'],
            'password' => ['sometimes', 'confirmed', 'min:7', 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9]).*$/', 'string'],
            'port' => ['sometimes', 'integer'],
            'username' => ['sometimes', 'string'],
            
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
