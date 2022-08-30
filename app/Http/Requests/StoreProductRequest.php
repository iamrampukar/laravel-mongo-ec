<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'product_name_en'       => ['required'],
            'product_name_ja'       => ['required'],
            'detail'                => ['required'],
            'category'                => ['required'],
            'price'                => ['required'],
        ];
    }
}
