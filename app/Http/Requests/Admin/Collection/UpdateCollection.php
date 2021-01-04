<?php

namespace App\Http\Requests\Admin\Collection;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateCollection extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.collection.edit', $this->collection);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'category_id' => ['sometimes', 'exists:collection_categories,id'],
            'created_when' => ['sometimes', 'string'],
            'created_who' => ['sometimes', 'string'],
            'description' => ['sometimes', 'string'],
//            'image_path' => ['sometimes', 'string'],
            'name' => ['sometimes', 'string'],

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

        $sanitized['image_path'] = 'default';

        return $sanitized;
    }
}
