<?php


use app\models\entities\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    protected $testClass;

    protected function setUp():void {
        $this->testClass = Product::class;
    }


    public function testNamespace() {
        $name = explode('\\', $this->testClass);
        $this->assertEquals($name[0], 'app');
        $this->assertEquals($name[1], 'models');
        $this->assertEquals($name[2], 'entities');
    }

//выше добавил вариант, как в разборе, но на моем уровне сделал бы скорее так, как ниже)

    public function testProductNameClass() {
        $nameClass = Product::class;
        $appPos = explode('\\', $nameClass);
       // var_dump($appPos);
        $this->assertEquals($appPos[0], 'app');
    }

    public function testProduct() {
        $name = "Вкусняшка1";
        $description = 'Очень вкусно!';
        $price = 20;
        $product = new Product($name, $description, $price);
        $this->assertEquals($name, $product->name);
        $this->assertEquals($description, $product->description);
        $this->assertEquals($price, $product->price);
    }
    
    public function testProduct1() {
        $product = new Product();
        $this->assertEquals(null, $product->name);
    }
    
}