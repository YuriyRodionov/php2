<?php


namespace app\models\repositories;


use app\models\entities\Order;
use app\models\Repository;

class AdminRepository extends Repository
{

    protected function getEntityClass() {
        return Order::class;
    }

    protected function getTableName()
    {
        return 'orders';
    }
}