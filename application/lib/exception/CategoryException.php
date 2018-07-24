<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/24
 * Time: 上午1:11
 */

namespace app\lib\exception;


class CategoryException extends BaseException
{
    public $code = 404;
    public $msg = 'category not found';
    public $errorCode = 50000;
}