<?php

namespace app\models;

use app\interfaces\IModel;
use app\engine\Db;

abstract class Model implements IModel
{


    abstract protected function getTableName();


    public function getOne($id) {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = :id";

        return DB::getInstance()->queryOne($sql, ['id' => $id]);
        
    }

    public function getOneObject($id) {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = :id";

        return DB::getInstance()->queryOneObject($sql, ['id' => $id], get_called_class());
    }

    public function getAll() {
        $sql = "SELECT * FROM {$this->getTableName()}";

        return DB::getInstance()->queryAll($sql);
    }

    public function insert() {

        
        foreach ($this as $key => $value) {
            if ($key == 'id') continue;
            //TODO собрать валидный INSERT по данным из $key и $value
            $keys[] = $key;
            $values[] = $value;
        }
        $resKey = implode(', ', $keys);
        $resValue = "'" . implode("', '", $values) . "'";
        
       $sql = "INSERT INTO {$this->getTableName()} ({$resKey}) VALUES ({$resValue})";
     
        DB::getInstance()->execute($sql, $params);
        $this->id = DB::getInstance()->lastInsertId();

        return $this;
    }

    public function update() {

    }

    public function delete() {

    }

}