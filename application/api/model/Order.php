<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/8/1
 * Time: 上午1:31
 */

namespace app\api\model;


class Order extends BaseModel
{
    protected $hidden = ['user_id', 'delete_time', 'update_time'];
    protected $autoWriteTimestamp = true;
}