<?php

namespace App\Http\Requests\Admin\Collection;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;

class StoreCollection extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.collection.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'category_id' => ['required', 'exists:collection_categories,id'],
            'created_when' => ['required', 'string'],
            'created_who' => ['required', 'string'],
            'description' => ['required', 'string'],
//            'image' => ['required'],
            'name' => ['required', 'string'],

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
