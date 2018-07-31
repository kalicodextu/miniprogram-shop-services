<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/27
 * Time: 上午8:48
 */

namespace app\lib\exception;


class SuccessMessage extends BaseException
{
    public $code = 201;
    public $msg = 'success';
    public $errorCode = 0;

}