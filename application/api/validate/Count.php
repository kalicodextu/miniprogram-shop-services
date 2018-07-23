<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/23
 * Time: 下午11:50
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule = [
        'count' => 'isPositiveInteger|between:1,15'
    ];
}