<?php

// Apabila melakukan use 2 trait yang memiliki method atau property yang sama didalam class maka akan terjadi conflict, cara mengatasinya bisa dengan insteadof

trait A
{
    public function a()
    {
        echo "a";
    }

    public function b()
    {
        echo "b";
    }
}

trait B
{
    public function a()
    {
        echo "A";
    }

    public function b()
    {
        echo "B";
    }
}

class TraitConflict
{
    // cara bacanya : Gunakan method a yang ada pada class B daripada class A
    use A, B {
        B::a insteadof A;
        A::b insteadof B;
    }
}

$obj = new TraitConflict();
$obj->a();
$obj->b();
