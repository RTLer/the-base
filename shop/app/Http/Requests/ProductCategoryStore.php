<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryStore extends FormRequest
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
            'slug'=>[
                'required',
                'min:3',
                'max:50',
            ],
            'name'=>[
                'required',
                'min:3',
                'max:50',
            ],
        ];
    }

    public function messages()
    {
        return [
            'category_id.required'=>'in field elzami ast',
            'category_id.numeric'=>'in field adadi ast',
        ];
    }
}
