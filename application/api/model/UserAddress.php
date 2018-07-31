<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/27
 * Time: 上午9:21
 */

namespace app\api\model;


class UserAddress extends BaseModel
{
    protected $hidden = [
        'id', 'delete_time', 'user_id'
    ];
}