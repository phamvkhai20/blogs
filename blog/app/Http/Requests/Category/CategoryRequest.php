<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name_category'=>['required','min:2','unique:categories,name_category']
        ];
    }
    public function messages(){
        return [ 
            'required'=>'Trường :attribute không được để trống',
            'min'=>'Trường :attribute ít nhất 2 kí tự',
            'unique'=>'Trường :attribute đã tồn tại',

            
        ];
    }
    public function attributes(){
        return [
            'name_category'=>'Category',
        ];
    }
}
