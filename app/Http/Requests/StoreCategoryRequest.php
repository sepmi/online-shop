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

   
    public function rules()
    {
        return [
            "title" => "required|min:3",
            
        ];
    }

    // public function attributes()
    // {
        
    // }

    public function messages()
    {
        return [
            "title.required" => "اسم را وارد کنید",
            "title.min" => "اسم باید حداقل ۳ حرف داشته باشد"
        ];
    }


}
