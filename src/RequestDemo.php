<?php
/**
 * Created by PhpStorm.
 * User: yanglijing
 * Date: 2018/8/1
 * Time: 下午1:35
 */

namespace Yljphp\Validation;


class RequestDemo implements RequestInterface
{
    public function rules()
    {
        return [
            'username' => 'required|min:5',
            'password' => 'confirmed',
        ];
    }

    public function messages()
    {
        return [
            'required'             => ':attribute 不能为空须。',
            'min'                  => ':attribute 至少为 :min 个字符。',//或直接直接写名字最少5个字符
        ];
    }

    public function getRequestData()
    {
        return [
            'username' => 'sssss'
        ];
        //通过其他方法获取要验证的参数数组
    }

    public function attributes()
    {
        return [
            'username' => '用户名',
            'password' => '密码',
        ];
    }


}