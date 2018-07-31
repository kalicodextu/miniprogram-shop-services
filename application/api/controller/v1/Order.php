<?php
/**
 * Created by kalicodextu.
 * User: kali
 * Date: 2018/7/30
 * Time: 上午1:23
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\service\Token as TokenService;
use app\api\validate\OrderPlace;
use app\api\service\Order as OrderService;

class Order extends BaseController
{
    protected $beforeActionList = [
        'checkExclusiveScope' => ['only' => 'placeOrder']
    ];

    public function placeOrder()
    {
        (new OrderPlace())->goCheck();
        $products = input('post.products/a');
        $uid = TokenService::getcurrentUid();
        $order = new OrderService();
        $status = $order->place($uid, $products);
        return $status;
    }
}