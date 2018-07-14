<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/14
 * Time: 10:31 AM
 */

namespace app\lib\exception;


use Exception;
use think\exception\Handle;
use think\facade\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;

    public function render(Exception $e)
    {
        if ($e instanceof BaseException) {
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        } else {
            $this->code = 500;
            $this->msg = 'server interval error';
            $this->errorCode = 999;
        }
        $url = Request::url();
        $result = [
            'msg' => $this->msg,
            'error_code' => $this->errorCode,
            'request_url' => $url
        ];
        return json($result, $this->code);
    }
}