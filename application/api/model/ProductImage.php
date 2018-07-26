<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/25
 * Time: 下午11:41
 */

namespace app\api\model;


class ProductImage extends BaseModel
{
    protected $hidden = [
        'img_id', 'delete_time', 'create_time', 'product_id'
    ];

    public function imgUrl()
    {
        return $this->belongsTo('Image', 'img_id', 'id');
    }
}
