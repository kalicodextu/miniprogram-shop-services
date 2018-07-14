<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/14
 * Time: 3:06 AM
 */

namespace app\api\model;


use think\Exception;

class Banner
{
    public static function getBannerByID($id){
        try{
            1/0;
        }
        catch (Exception $ex){
            throw $ex;
        }
        return 'get banner by id';
    }
}