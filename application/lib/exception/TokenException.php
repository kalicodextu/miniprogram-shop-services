<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/25
 * Time: 上午1:49
 */

namespace app\lib\exception;


class TokenException extends BaseException
{
    public $code = 401;
    public $msg = 'Token expire in or Token is invalid';
    public $errorCode = 10001;
}