<?php

use app\models\{Product, User};
use app\engine\Db;
use app\engine\Autoload;

include "../config/config.php";
include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);


//$product = new Product("Книга", "Фантастика", 23);
//product->insert();

$user = new User("User", 234);
$user->insert();

$sb = ['a', 'b'];
var_dump(implode($sb));

$product = new Product();

var_dump($product->getOneObject(2));

$product = new Product('Сухой корм', 'Содержит все необходимое для вашего питомца', '300');
$product->insert();

var_dump($product);




//var_dump($product->getOne(2));

//var_dump($product);



























die();
/*
//INSERT
$product = new Product('Чай', 25);

$product->insert();

//READ
$product = new Product();
$product->getOne(5);

$product->getAll();

//UPDATE
$product = new Product();
$product->getOne(5);
$product->price = 25;
$product->update();

//DELETE
$product = new Product();
$product->getOne(5);
$product->delete();
*/