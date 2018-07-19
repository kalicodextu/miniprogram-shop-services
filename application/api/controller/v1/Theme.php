<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/20
 * Time: 上午12:47
 */

namespace app\api\controller\v1;


use app\api\validate\IDCollection;
use app\api\model\Theme as ThemeModel;
use app\lib\exception\ThemeException;

class Theme
{
    public function getSimpleList($ids = '')
    {
        (new IDCollection())->goCheck();
        $ids = explode(',', $ids);
        $result = ThemeModel::with('topicImg', 'headImg')->select($ids);
        if(!$result){
            throw new ThemeException();
        }
        return $result;
    }
}