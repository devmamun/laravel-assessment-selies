<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BookUpdateRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:191',
            'author' => 'required|max:191',
            'sale_price' => 'required|numeric',
            'discount_price' => 'nullable|numeric',
            'status' => 'in:active,inactive,pending',
            'image' => 'nullable|mimes:jpeg,jpg,png|max:2048',
        ];

    }
}
