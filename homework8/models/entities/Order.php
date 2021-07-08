<?php


namespace app\models\entities;



use app\models\Model;

class Order extends Model
{
    protected $id;
    protected $name;
    protected $phone;
    protected $session_id;
    protected $status;

    protected $props = [
        'name' => false,
        'phone' => false,
        'session_id' => false,
        'status' => false
    ];

    public function __construct($name = null, $phone = null, $session_id = null, $status = 'accepted')
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->session_id = $session_id;
        $this->status = $status;
    }





}