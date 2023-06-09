<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRquest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
                'title' => ['required', 'max:150', Rule::unique('posts')->ignore($this->post)],
                'cover_image' => 'nullable|max:255|url',
                'content' => 'nullable',
                'category_id' => 'nullable|exists:categories,id'
            
        ];
    }
}
