<?php

class MyException extends Exception
{
}

class AnotherException extends MyException
{
}

class Foo
{
    public function something()
    {
        throw new AnotherException();
    }

    public function somethingElse()
    {
        throw new MyException();
    }
}

$a = new Foo();

try {
    try {
        $a->something();
    } catch (AnotherException $e) {
        $a->somethingElse();
    } catch (MyException $e) {
        print "Caught Exception";
    }
} catch (Exception $e) {
    print "Didn't catch the Exception!";
}

//Caso curioso:
/*
try {
    throw new \Exception();
} catch (\OdinException $e) {

} catch (\Exception $e) {

}
*/