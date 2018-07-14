<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/13
 * Time: 11:38 PM
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePositiveInt;
use app\api\model\Banner as BannerModel;
use think\Exception;


class Banner
{
    public function getBanner($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $banner = BannerModel::getBannerByID($id);
        return $banner;

    }
}