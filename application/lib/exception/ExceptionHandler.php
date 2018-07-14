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

class ExceptionHandler extends Handle
{
    public function render(Exception $e)
    {
        return json('~~~~');
    }
}