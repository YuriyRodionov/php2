<?php


use Phinx\Seed\AbstractSeed;

class ShopSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $sql = 'TRUNCATE cart';
        $this->adapter->query($sql);
        $sql = 'TRUNCATE catalog';
        $this->adapter->query($sql);
        $sql = 'TRUNCATE users';
        $this->adapter->query($sql);
        $sql = 'TRUNCATE orders';
        $this->adapter->query($sql);

        $products = [
            [
                'name' => 'Консервы',
                'description' => 'Ооочень вкусные штуки для ваших питомцев!',
                'price' => '100',
                'image' => 'cons.jpg'
            ],
            [
                'name' => 'Лакомства',
                'description' => 'Иногда можно порадовать',
                'price' => '32',
                'image' => 'yam.jpg'
            ],
            [
                'name' => 'Наполнитель',
                'description' => 'Наполнитель для кошачьих туалетов',
                'price' => '150',
                'image' => 'nap.jpg'
            ],
            [
                'name' => 'Когтеточка',
                'description' => 'Чтобы не портить мебель',
                'price' => '30',
                'image' => 'cogt.jpg'
            ],
            [
                'name' => 'Игрушка',
                'description' => 'Повеселит всех в доме!',
                'price' => '130',
                'image' => 'play.jpg'
            ]
        ];
        $this->table('catalog')->insert($products)->save();

        $users = [
            [
                'login' => 'admin',
                'pass' => password_hash('123', PASSWORD_DEFAULT)
            ],
            [
                'login' => 'user',
                'pass' => password_hash('321', PASSWORD_DEFAULT)
            ]
        ];

        $this->table('users')->insert($users)->save();
    }
}
