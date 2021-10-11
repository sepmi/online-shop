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

    public function attributes()
    {
        return [
            'name' => 'نام',
            'price' => 'قیمت',
            'description' => 'توضیحات',
            'image' => 'عکس',

        ];
    }

    public function messages()
    {
        return [
            "required" => ":attribute را وارد کنید",
            "min" => ":attribute باید حداقل ۳ حرف داشته باشد"
        ];
    }

    public function rules()
    {
        return [
            "name" => "required|min:3",
            'price' => 'required',
            'description' => 'required',
            'image' => 'required'
        ];
    }
}
