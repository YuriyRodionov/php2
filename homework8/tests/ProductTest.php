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
    }

    public function testProduct() {
        $name = "Чай";
        $product = new Product($name);
        $this->assertEquals($name, $product->name);
    }


}