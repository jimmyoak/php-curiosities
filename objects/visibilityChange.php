<?php

class A {
    protected function asdf()
    {
echo 'aitor';
    }
}

class B extends A {
    public function asdf() {
echo 'asdf';
    }
}

$b = new B();
$b->asdf();