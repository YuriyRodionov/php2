<?php

use app\engine\Db;
use app\engine\Request;
use app\engine\Session;
use app\models\repositories\BasketRepository;
use app\models\repositories\ProductRepository;
use app\models\repositories\UserRepository;
use app\models\repositories\OrderRepository;


return [
    'root' => dirname(__DIR__),
    'controllers_namespaces' => 'app\\controllers\\',
    'product_per_page' => 2,
    'views_dir' => dirname(__DIR__) . "/views/",
    'img_dir' => dirname(__DIR__) . "/public/img/",
    'components' => [
        'db' => [
            'class' => Db::class,
            'driver' => 'mysql',
            'host' => 'localhost:3380',
            //:3380
            'login' => 'root',
            'password' => 'root',
            'database' => 'homework',
            'charset' => 'utf8'
        ],
        'request' => [
            'class' => Request::class
        ],
        'basketRepository' => [
            'class' => BasketRepository::class
        ],
        'productRepository' => [
            'class' => ProductRepository::class
        ],
        'usersRepository' => [
            'class' => UserRepository::class
        ],
        'session' => [
            'class' => Session::class
        ],
        'orderRepository' => [
            'class' => OrderRepository::class
        ]
    ]

];