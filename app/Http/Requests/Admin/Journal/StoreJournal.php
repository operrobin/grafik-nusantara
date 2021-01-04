<?php

namespace App\Http\Requests\Admin\Journal;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreJournal extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.journal.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'content' => ['required', 'string'],
            'published_at' => ['nullable', 'date'],
            'tags' => ['nullable'],
            'title' => ['required', 'string'],

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

        if (!empty($sanitized['tags'])) {
            $sanitized['tags'] = implode(',', $sanitized['tags']);
        }

        return $sanitized;
    }
}
