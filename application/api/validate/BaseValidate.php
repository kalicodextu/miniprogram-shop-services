<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/14
 * Time: 8:11 PM
 */

namespace app\api\validate;


use app\lib\exception\BaseException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $request = Request::instance();
        $param = $request->param();
        $result = $this->check($param);
        if(!$result) {
            $error = $this->error;
            throw new BaseException($error);
        }
        else{
            return true;
        }
    }
}