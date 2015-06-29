<?php

abstract class myBaseClass {
    abstract protected function doSomething();
    function threeDots() {
        return '...';
    }
}

class myClassA extends myBaseClass {
    protected function doSomething() {
        echo $this->threeDots();
    }
}

$a = new myClassA();
$a->doSomething();