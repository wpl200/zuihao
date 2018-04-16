<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GoodsAddRequest extends Request
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
            'gname' => 'required|gname',
            'price' => 'required|price',
            'stock' => 'required|stock',
        ];
    }

    /**
     * 自定义错误信息
     * @return [type] [description]
     */
    public function messages()
    {
        return [
            'gname.required'   =>    '商品名称必填', 
            'price.required'   =>    '商品价格必填', 
            'stock.required'   =>    '商品库存必填', 
        ];
    }
}
