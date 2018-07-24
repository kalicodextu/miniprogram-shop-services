<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/24
 * Time: 上午12:51
 */

namespace app\api\model;


class Category extends BaseModel
{
    protected $hidden = ['delete_time', 'create_time', 'update_time'];

    public function img()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }
}