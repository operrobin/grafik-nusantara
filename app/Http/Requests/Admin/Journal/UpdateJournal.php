<?php

namespace App\Http\Requests\Admin\Journal;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateJournal extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.journal.edit', $this->journal);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'content' => ['sometimes', 'string'],
            'published_at' => ['nullable', 'date'],
            'tags' => ['nullable'],
            'title' => ['sometimes', 'string'],
            'publish_now' => ['nullable', 'boolean'],
            'unpublish_now' => ['nullable', 'boolean'],

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

        if (!empty($sanitized['tags'])) {
            $sanitized['tags'] = implode(',', $sanitized['tags']);
        }

        if (isset($sanitized['publish_now']) && $sanitized['publish_now'] === true) {
            $sanitized['published_at'] = Carbon::now();
        }

        if (isset($sanitized['unpublish_now']) && $sanitized['unpublish_now'] === true) {
            $sanitized['published_at'] = null;
        }

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
