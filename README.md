# 表单验证扩展

>大部分代码基于网络，初版v1.0可能存在很多bug


### 使用方法

1,自己定义request规则、提示信息等

```php

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


```

2. 验证表单请求参数

```php

request_validate(new RequestDemo(),$errors)


```