<?php

namespace app\api\model;

class Image extends BaseModel
{
    //
    protected $hidden = ['delete_time', 'create_time', 'update_time', 'id', 'from'];

    public function getUrlAttr($value, $data)
    {
        return $this->prefixImageUrl($value, $data);
    }
}
