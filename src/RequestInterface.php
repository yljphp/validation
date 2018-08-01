<?php
/**
 * Created by PhpStorm.
 * User: yanglijing
 * Date: 2018/8/1
 * Time: 下午12:12
 */

namespace Yljphp\Validation;


interface RequestInterface
{
    public function rules();

    public function messages();

    public function getRequestData();

    public function attributes();
}