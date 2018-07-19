<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/20
 * Time: 上午1:19
 */

namespace app\api\validate;


class IDCollection extends BaseValidate
{
    protected $rule = [
        "ids" => 'require|checkIDs'
    ];
    protected $message = [
        'ids' => 'ids参数必须为以逗号分隔的多个正整数'
    ];

    protected function checkIDs($value)
    {
        $values = explode(',', $value);
        if (empty($value)) {
            return false;
        }
        foreach ($values as $id) {
            if (!$this->isPositiveInteger($id)) {
                return false;
            }
        }
        return true;
    }
}