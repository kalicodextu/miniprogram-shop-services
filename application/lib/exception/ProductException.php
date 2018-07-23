<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/24
 * Time: 上午12:05
 */

namespace app\lib\exception;


class ProductException extends BaseException
{
    public $code = 404;
    public $msg = 'product not found';
    public $errorCode = 20000;
}