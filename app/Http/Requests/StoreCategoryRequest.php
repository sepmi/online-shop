<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'name' => 'required|min:3'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'فیلد نام دسته بندی نمی تواند خالی باشد.'
        ];
    }
}
