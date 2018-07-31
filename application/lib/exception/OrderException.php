<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/31
 * Time: 上午1:28
 */

namespace app\lib\exception;


class OrderException extends BaseException
{
    public $code = 404;
    public $msg = 'order not exist';
    public $errorCode = 80000;
}