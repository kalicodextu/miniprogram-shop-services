<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/14
 * Time: 8:13 PM
 */

namespace app\api\validate;


class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger',
        'num' => 'in:1,2,3'
    ];
    protected $message = [
        'id' => 'id must be positive integer'
    ];
}