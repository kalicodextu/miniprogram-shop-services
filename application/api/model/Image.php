<?php

namespace app\api\model;

class Image extends BaseModel
{
    //
    protected $hidden = ['delete_time', 'id', 'from'];
    public function getUrlAttr($value, $data)
    {
        return $this->prefixImageUrl($value, $data);
    }
}
