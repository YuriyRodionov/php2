<?php

namespace app\models;


class User extends DBModel
{
    protected $id;
    protected $login;
    protected $pass;

    protected $props = [
        'login' => false,
        'pass' => false
    ]


    public function __construct($login = '', $pass = '')
    {
        $this->login = $login;
        $this->pass = $pass;
    }


    public static function getTableName() {
        return 'users';
    }


}