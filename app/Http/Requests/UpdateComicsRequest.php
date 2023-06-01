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
            'description' => 'nullable|min:1|max:2000',
            'thumb' => 'nullable|max:350',
            'price' => 'required|min:1|max:25',
            'series' => 'required|min:1|max:50',
            'sale_date' => 'required|before_or_equal:today|after:1900/01/01',
            'type' => 'required|min:1|max:50',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'the title is required',
            'title.min' => 'the title must contain at least 1 character',
            'title.max' => 'the title must contain no more than 50 characters',
            'description.min' => 'the description must contain at least 1 character',
            'description.max' => 'the description must contain no more than 2000 characters',
            'thumb.max' => 'the thumb must contain no more than 350 characters',
            'price.required' => 'the price is required',
            'price.min' => 'the price must contain at least 1 character',
            'price.max' => 'the price must contain no more than 25 characters',
            'series.required' => 'required',
            'series.min' => 'the series must contain at least 1 character',
            'series.max' => 'the series must contain no more than 50 characters',
            'sale_date.required' => 'required',
            'sale_date.before_or_equal' => 'the sale date cannot be later than today\'s date',
            'sale_date.after' => 'the sale date must be after 1900-01-01',
            'type.min' => 'the type must contain at least 1 character',
            'type.max' => 'the type must contain no more than 50 characters',
        ];
    }
}
