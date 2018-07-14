<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/14
 * Time: 1:04 AM
 */

namespace app\api\validate;


class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];

    protected function isPositiveInteger($value, $rule='', $data='', $field='')
    {
        if(is_numeric($value)&&is_int($value + 0)&&($value + 0)>0){
            return true;
        }
        else{
            return $field . ' must be positive int';
        }
    }
}