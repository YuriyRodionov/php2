<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateShopTables extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $this->table('catalog')
        ->addColumn('name', 'text')
        ->addColumn('price', 'float')
        ->addColumn('description', 'text')
        ->addColumn('image', 'text')
        ->create();

    $this->table('cart')
        ->addColumn('goods_id', 'integer')
        ->addColumn('session_id', 'text')
        ->create();

    $this->table('users')
        ->addColumn('login', 'text')
        ->addColumn('pass', 'text')
        ->create();

    $this->table('orders')
        ->addColumn('name', 'text')
        ->addColumn('phone', 'text')
        ->addColumn('session_id', 'text')
        ->addColumn('status', 'text')
        ->create();
    }
}
