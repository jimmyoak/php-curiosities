<?php

interface i1 {
    public function a();
    public function b();
}
interface i2 {
    public function a();
    public function c();
}

class AAAA implements i1, i2 {
    public function a() {
        echo __METHOD__;
    }
    public function b() {
        echo __METHOD__;
    }
    public function c() {
        echo __METHOD__;
    }
}

$a = new AAAA();
$a->a();

//It works on 5.5, Fuck you 5.3