<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/14
 * Time: 2:02 AM
 */

namespace app\api\validate;


use think\Exception;
use think\facade\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $params = Request::param();
        $result = $this->check($params);
        if(!$result){
            $error = $this->error;
            throw new Exception($error);
        }

    }
}