<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            // 'name' => 'required',
            // 'display_image' => 'required|mimes:png,jpg,jpeg|max:2048',
            // 'other_images.*' => 'required|mimes:png,jpg,jpeg|max:2048',
            // 'condition' => 'required',
            // 'ending_date' => 'required|date|after_or_equal:today',
            // 'starting_price' => 'required|numeric',
            // 'description' => 'required',
        ];
    }
}
