<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/30
 * Time: 上午12:19
 */

namespace app\lib\exception;


use app\api\model\BaseModel;

class ForbiddenException extends BaseException
{
    public $code = 403;
    public $msg = 'forbidden';
    public $errorCode = 10001;
}