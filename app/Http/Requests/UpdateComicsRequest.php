<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // default is false, turn on true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:200',
            'description' => 'nullable',
            'thumb' => 'nullable|max:255',
            'price' => 'required|max:25',
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => 'nullable',
        ];
    }
}
