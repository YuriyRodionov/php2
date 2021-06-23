<?php


namespace app\models;
use app\engine\Db;

class Basket extends DBModel
{
    protected $id;
    protected $goods_id;
    protected $session_id;

    protected $props = [
        'goods_id' => false,
        'session_id' => false
    ];


    public static function getBasket() {
        $sql = "SELECT cart.id as cart_id, catalog.image as image, catalog.id as catalog_id, catalog.name as name, catalog.price FROM cart, catalog WHERE cart.goods_id=catalog.id AND cart.session_id='d36hnrmkda59rf2vfuqgdl8p53'";
       
        return Db::getInstance()->queryAll($sql);
    }

    protected static function getTableName()
    {
        return 'cart';
    }
}