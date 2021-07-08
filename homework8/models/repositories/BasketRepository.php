<?php


namespace app\models\repositories;


use app\models\entities\Basket;
use app\models\Repository;
use app\engine\App;

class BasketRepository extends Repository
{
    public function getBasket($session_id) {
        $sql = "SELECT cart.id as cart_id, catalog.id as catalog_id, catalog.name as name, catalog.price FROM cart, catalog WHERE cart.session_id = '{$session_id}' AND cart.goods_id = catalog.id";


        return App::call()->db->queryAll($sql);
    }

    protected function getEntityClass() {
        return Basket::class;
    }

    protected function getTableName()
    {
        return 'cart';
    }
}