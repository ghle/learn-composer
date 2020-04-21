<?php

require '../vendor/autoload.php';

use wjl\HelloWorld;

$obj = new  HelloWorld();

$obj->sayHello();

echo PHP_EOL."==============".PHP_EOL;

HelloWorld::sayHelloStatic();
