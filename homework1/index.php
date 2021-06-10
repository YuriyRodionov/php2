<?php

class Life {       //живой организм
    public $name;
    public $time; //время жизни
    public $nutritional; //питательность(калорийность), все что-то едят
    public static $cl = __CLASS__; // Как сделать динамически, чтобы дочерние классы свое имя подставляли?
    
    public function __construct($name = '', $time = 100, $nutritional = 100) {
        $this->name = $name;
        $this->time = $time;
        $this->nutritional = $nutritional;
    }

    public function reproduction($param) {
        return new static::$cl($param); // хотел сделать что-то вроде return new self::class($param), но не работает, все равно подставляет название родительского класса! Не подскажете, как правильнее подставить имя класса, чтобы еще и не вводить доп. переменную?
    }
}

class Plant extends Life {
    public function oxygen() {
        $oxygen += 100; //Не соображаю второпях, как это привязать к общей модели)
    }

}

class Animal extends Life {
    public $kycb; // животное кого-то куснуло

    public function __construct($name, $kycb) {
        parent::__construct($name);
        $this->kycb = $kycb;
    }

    public function eat($target) {
        $target->nutritional -= $this->kycb; //допустим, на время жизни кусь не влияет)
        $this->nutritional += $this->kycb;
        echo "амнямням";
    }
}

$man = new Animal('Adam', 100);
$woman = $man->reproduction('Eva'); //успешно размножились делением)
var_dump($man);
var_dump($woman);

echo '<br>';

$tiger = new Animal('Tigra', 100);
$baobab = new Plant('Derevo');

$tiger->eat($baobab);

var_dump($tiger);

echo '<br>';

var_dump($baobab);

