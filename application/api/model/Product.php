<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/20
 * Time: 上午12:48
 */

namespace app\api\model;


class Product extends BaseModel
{
    protected $hidden = ['delete_time', 'create_time', 'pivot', 'from', 'category_id', 'main_img_id'];

    public function getMainImgUrlAttr($value, $data)
    {
        return $this->prefixImageUrl($value, $data);
    }

    public static function getMostRecent($count)
    {
        $product = self::limit($count)->order('create_time desc')->select();
        return $product;
    }
}