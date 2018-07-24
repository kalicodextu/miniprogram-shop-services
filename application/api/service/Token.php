<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/25
 * Time: 上午1:30
 */

namespace app\api\service;


class Token
{
    public static function gennerateToken()
    {
        $randeChars = getRandChars(32);
        $timestmp = $_SERVER['REQUEST_TIME_FLOAT'];
        $salt = config('secure.token_salt');
        return md5($randeChars . $timestmp . $salt);
    }
}