<?php

namespace app\models;

class Image extends Model {
    public $id;
    public $name;
    public $views;

    public function getTableName() {
        return 'images';
    }
}