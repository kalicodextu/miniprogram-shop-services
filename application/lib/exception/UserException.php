<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/27
 * Time: 上午8:29
 */

namespace app\lib\exception;


class UserException extends BaseException
{
    public $code = 404;
    public $msg = 'user not found';
    public $errorCode = 60000;
}