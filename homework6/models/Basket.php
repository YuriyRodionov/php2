<?php


namespace app\models;


use app\engine\Db;

class Basket extends DBModel
{
    protected $id;
    protected $session_id;
    protected $goods_id;

    protected $props = [
        'session_id' => false,
        'goods_id' => false
    ];

    public function __construct($session_id = null, $goods_id = null)
    {
        $this->session_id = $session_id;
        $this->goods_id = $goods_id;
    }


    public static function getBasket($session_id) {
        $sql = "SELECT cart.id as cart_id, catalog.id as catalog_id, catalog.name as name, catalog.price FROM cart, catalog WHERE cart.session_id = '{$session_id}' AND cart.goods_id = catalog.id";
        
        return Db::getInstance()->queryAll($sql);
    }

    protected static function getTableName()
    {
        return 'cart';
    }
}