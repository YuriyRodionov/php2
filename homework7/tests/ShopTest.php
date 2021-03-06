<?php


use PHPUnit\Framework\TestCase;

class ShopTest extends TestCase
{
    /**
     * @dataProvider providerAdd
     */
    public function testAdd($e, $x, $y) {

        $this->assertEquals($e, $x + $y);
    }

    public function providerAdd() {
        return [
            [3, 1, 2],
            [1, 0, "1"]
        ];
    }

}