<?php

class Magic {
    public $a = 'A';
    protected $b = ['a' => 'A', 'b' => 'B', 'c' => 'C'];
    protected $c = [1,2,3];

    public function __get($v)
    {
        echo "$v,";
        return $this->b[$v];
    }

    public function __set($var, $val)
    {
        echo "$var: $val,";
        $this->$var = $val;
    }
}

$m = new Magic();
echo $m->a.','.$m->b.','.$m->c.',';
$m->c = 'CC';
echo $m->a.','.$m->b.','.$m->c;