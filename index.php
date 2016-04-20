<?php

/* autoload classes from classes folder */
spl_autoload_register(function ($class) {
    require_once 'classes/'.$class. '.php';
});

/* instantiate class Calcuator */
$c=new Calculator;
/* invoke addition */
$c->setOperation(new Adder);
$c->calculate(10,50);//60

echo "<br>";
/* subtract the result */
$c->setOperation(new Subtractor);
$c->calculate(20);//40

/* multiply the result */
$c->setOperation(new Multiplier);
$c->calculate(5);//200

/* divide the result */
$c->setOperation(new Divide);
$c->calculate(2.5);//80

/* get the results */
echo $c->getResult();

