<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/14
 * Time: 12:31 AM
 */

namespace app\api\validate;


use think\Validate;

class TestValidate extends Validate
{
    protected $rule = [
        'name' => 'require|max:12',
        'email' => 'email'];
}