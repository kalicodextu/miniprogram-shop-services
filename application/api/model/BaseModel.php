<?php

namespace app\api\model;

use think\Model;

class BaseModel extends Model
{
    //
    protected $hidden = ['delete_time'];
}
