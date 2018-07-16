<?php

namespace app\api\model;

use think\Model;

class Image extends BaseModel
{
    //
    protected $hidden = ['delete_time', 'id', 'from'];
}
