<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            "title" => "required|min:3"
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'نام'
        ];
    }

    public function messages()
    {
        return [
            "required" => ":attribute را وارد کنید",
            "min" => ":attribute باید حداقل ۳ حرف داشته باشد"
        ];
    }


}
