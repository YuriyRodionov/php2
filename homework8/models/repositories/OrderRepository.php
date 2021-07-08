<?php


namespace app\models\repositories;


use app\models\entities\Order;
use app\models\Repository;
use app\engine\App;

class OrderRepository extends Repository
{
    public function getOrder($session_id) {
        $sql = "SELECT cart.id as cart_id, catalog.id as catalog_id, catalog.name as name, catalog.price FROM cart, catalog WHERE cart.session_id = '{$session_id}' AND cart.goods_id = catalog.id";


        return App::call()->db->queryAll($sql);
    }

    public function getOrderSum($session_id) {
        $sql = "SELECT SUM(catalog.price) as sum FROM cart, catalog WHERE cart.goods_id = catalog.id AND session_id = '{$session_id}'";
        return App::call()->db->queryOne($sql);
    }

    protected function getEntityClass() {
        return Order::class;
    }

    protected function getTableName()
    {
        return 'orders';
    }
}