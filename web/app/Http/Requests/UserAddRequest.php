<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserAddRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//自动验证
    }

    /**
     * 验证规则
     *
     * @return array
     */
    public function rules()
    {
        return [
            'uname' => 'required|unique:shop_users|regex:/^[a-zA-Z]{1}[a-zA-Z0-9_]{5,17}$/',
            'password' => 'required|regex:/^[a-zA-Z0-9_]{6,18}$/',
            'repassword' => 'required|same:password',
            'email'     => 'required|email'
        ];
    }

    /**
     * 自定义错误信息
     * @return [type] [description]
     */
    public function messages()
    {
        return [
            'uname.required'   =>    '用户必填', 
            'uname.unique'   =>    '用户名存在', 
            'uname.regex'   =>    '用户名不合法', 
            'password.required'   =>    '密码必填', 
            'password.regex'   =>    '密码不合法', 
            'repassword.required'   =>    '确认密码必填', 
            'repassword.same'   =>    '俩次密码不一致', 
            'email.required'   =>    '邮箱必填', 
            'email.email'   =>    '邮箱不合法', 
        ];
    }
}
