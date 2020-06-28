<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
class loginRequest extends FormRequest
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
            'email'=> ['required','email','exists:users,email'],
            'password'=>['required','min:6'],
            // app()->make(CheckPassword::class)
        ];
    }

    public function messages(){
        return [ 
            'required'=>'Trường :attribute không được để trống',
            'email'=>'Trường :attribute không đúng định dạng',
            'exists'=>'Trường :attribute không tồn tại trong hệ thống',
            'required'=>'Trường :attribute không được để trống',
            'min'=>'Trường :attribute ít nhất 6 kí tự',
        ];
    }
    public function attributes(){
        return [
            'email'=>'email',
            'password'=>'mật khẩu'
        ];
    }

}
