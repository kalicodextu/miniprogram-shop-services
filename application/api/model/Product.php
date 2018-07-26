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
    protected $hidden = ['delete_time', 'create_time', 'update_time', 'pivot', 'from', 'category_id', 'main_img_id'];

    public function getMainImgUrlAttr($value, $data)
    {
        return $this->prefixImageUrl($value, $data);
    }

    public function imgs()
    {
        return $this->hasMany('ProductImage', 'product_id', 'id');
    }

    public function properties()
    {
        return $this->hasMany('ProductProperty', 'product_id', 'id');
    }

    public static function getMostRecent($count)
    {
        $product = self::limit($count)->order('create_time desc')->select();
        return $product;
    }

    public static function getProductsByCategoryId($categoryID)
    {
        $products = self::where('category_id', '=', $categoryID)->select();
        return $products;
    }

    public static function getProductDetail($id)
    {
        $product = self::with([
            'imgs' => function ($query) {
                $query->with(['imgUrl'])
                    ->order('order', 'asc');
            }
        ])
            ->with(['properties'])->find($id);
        return $product;
    }
}