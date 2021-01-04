<?php

namespace App\Http\Requests\Admin\Config;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateConfig extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.config.edit', $this->config);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['sometimes', Rule::unique('configs', 'name')->ignore($this->config->getKey(), $this->config->getKeyName()), 'string'],
//            'type' => ['sometimes', 'string'],
            'content' => ['sometimes', 'string'],

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
        $sanitized['type'] = 'content';
        return $sanitized;
    }
}
