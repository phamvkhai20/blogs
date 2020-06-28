<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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

            
            'title'=>['required','min:20'],
            'title2'=>['required','min:50'],
            'content'=>['required','min:50'],
        ];
    }
    public function messages(){
        return [ 
            'required'=>'Trường :attribute không được để trống',
            'min'=>'Trường :attribute ít nhất 50 kí tự',
            'required'=>'Trường :attribute không được để trống',
            'min'=>'Trường :attribute ít nhất 50 kí tự',
            'required'=>'Trường :attribute không được để trống',
            'min'=>'Trường :attribute ít nhất 50 kí tự',
        ];
    }
    public function attributes(){
        return [
            'title'=>'Tiêu đề chính',
            'title2'=>'Tiêu đề phụ',
            'content'=>'Nội Dung',
        ];
    }
}
