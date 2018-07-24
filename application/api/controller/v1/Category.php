<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/24
 * Time: 上午12:49
 */

namespace app\api\controller\v1;
use app\api\model\Category as CategoryModel;
use app\lib\exception\CategoryException;

class Category
{
    public function getAllCategories()
    {
        $categories = CategoryModel::all([], 'img');
        if(!$categories){
            throw new CategoryException();
        }
        return $categories;
    }
}