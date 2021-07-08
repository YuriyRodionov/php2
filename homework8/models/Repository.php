<?php


namespace app\models;


use app\engine\Db;
use app\engine\App;

abstract class Repository
{
    abstract protected function getTableName();
    abstract protected function getEntityClass();

    public function getLimit($limit) {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} LIMIT 0, ?";
        return App::call()->db->queryLimit($sql, $limit);

    }

    //WHERE 'session_id' == 'asd32d2fg54h'
    public function getCountWhere($name, $value) {
        $tableName = $this->getTableName();
        $sql = "SELECT count(id) as count FROM {$tableName} WHERE `{$name}`=:value";
        return App::call()->db->queryOne($sql, ['value' => $value])['count'];
    }

    /// WHERE 'login' = 'admin'
    public function getOneWhere($name, $value) {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE `{$name}`=:value";
        return App::call()->db->queryOneObject($sql, ['value' => $value], $this->getEntityClass());
    }

    public function getOne($id)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";

        //return DB::getInstance()->queryOne($sql, ['id' => $id]);

        return App::call()->db->queryOneObject($sql, ['id' => $id], $this->getEntityClass());
    }

    public function getAll()
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";

        return App::call()->db->queryAll($sql);
    }

    protected function insert(Model $entity)
    {

        $params = [];
        $columns = [];

        //INSERT INTO `products`(`name`, `description`, `price`) VALUES (:name, :description, :price)
        //$params = ['name' => 'Чай'...];

        foreach ($entity->props as $key => $value) {
            $params[":{$key}"] = $entity->$key;
            $columns[] = $key;

        }
        $columns = implode(', ', $columns);
        $value = implode(', ', array_keys($params));
        $tableName = $this->getTableName();

        $sql = "INSERT INTO `{$tableName}`({$columns}) VALUES ({$value})";

        App::call()->db->execute($sql, $params);
        $entity->id = App::call()->db->lastInsertId();

    }

    protected function update(Model $entity)
    {
        $params = [];
        $colums = [];

        foreach ($entity->props as $key => $value) {
            if (!$value) continue;
            $params["{$key}"] = $entity->$key;
            $colums[] .= "`{$key}` = :{$key}";
            $entity->props[$key] = false;
        }
        $colums = implode(", ", $colums);
        $tableName = $this->getTableName();
        $params['id'] = $this->id;
        $sql = "UPDATE `{$tableName}` SET {$colums} WHERE `id` = :id";
        App::call()->db->execute($sql, $params);
    }

    public function delete(Model $entity)
    {
        $tableName = $this->getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return App::call()->db->execute($sql, ['id' => $entity->id]);
    }

    public function save(Model $entity) {
        if (is_null($entity->id)) {
            $this->insert($entity);
        } else {
            $this->update($entity);
        }
    }
}