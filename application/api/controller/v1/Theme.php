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
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\ThemeException;

class Theme
{
    public function getSimpleList($ids = '')
    {
        (new IDCollection())->goCheck();
        $ids = explode(',', $ids);
        $result = ThemeModel::with('topicImg,headImg')->select($ids);
        if($result->isEmpty()){
            throw new ThemeException();
        }
        return $result;
    }

    public function getComplexOne($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $result = ThemeModel::getThemeWithProduct($id);
        if (!$result){
            throw new ThemeException();
        }
        return $result;
    }
}