<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/25
 * Time: 下午11:44
 */

namespace app\api\model;


class ProductProperty extends BaseModel
{
    protected $hidden = [
        'product_id', 'delete_time', 'id'
    ];
}