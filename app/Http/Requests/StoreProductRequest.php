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
        return[
            'name' => "required|min:3",
            'description' => 'required',
            'price' => 'required',
            "image" => 'required'
        ];
        
    }

    public function messages()
    {
        return[
            'required' => ":attribute اجباری است",
        'min' => ":attribute حداقل باید ۳ حرف باشد ",
        ];


    }

    public function attributes()
    {
        return[
            'name' => 'نام محصول',
            "description" => 'توضیحات',
            'price' => 'قیمت محصول',
            'image' => 'عکس محصول'

        ];
    }


}
