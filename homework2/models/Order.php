<?php

namespace app\models;

class Order extends Model
{
    public $id;
    public $name;
    public $phone;
    public $session_id;
    public $status;

    public function getTableName() {
        return 'orders';
    }


}