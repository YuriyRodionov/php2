<?php

namespace app\models;

class Product extends DBModel
{
    protected $id;
    protected $name;
    protected $description;
    protected $price;
    protected $image;

    protected $props = [
        'name' => false,
        'description' => false,
        'price' => false,
        'image'=>false
    ];


    public function __construct($name = null, $description = null, $price = null, $image = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
    }


    protected static function getTableName()
    {
        return 'catalog';
    }

}

