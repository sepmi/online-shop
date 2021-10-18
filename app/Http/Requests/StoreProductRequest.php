<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'description' => 'required',
            'price' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'نام محصول',
            'description' => 'توضیحات',
            'price' => 'قیمت محصول'
        ];
    }

    public function messages()
    {
        return [ 
            'required' => ' نمی تواند خالی باشد:attribute فیلد',
            'min' => 'attribute نمی تواند کمتر از سه حرف داشته باشد'
        ];
    }
}
