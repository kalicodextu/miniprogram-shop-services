<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/14
 * Time: 9:16 PM
 */

namespace app\api\model;


use think\Db;

class Banner
{
    public static function getBannerByID($id)
    {
        // $result = Db::query('select * from banner_item where banner_id=?', [$id]);
        $result = Db::table('banner_item')
            ->fetchSql()
            ->where('banner_id', '=', $id)
            ->select();
        return $result;
    }
}