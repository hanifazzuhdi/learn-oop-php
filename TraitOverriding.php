<?php

// urutan prioritas : ClassParent => Trait => ClassEctends

trait A
{
    public function hello()
    {
        echo "hello gais ini dari trait" . PHP_EOL;
    }
}

class TraitOverriding
{
    use A;

    public function hello()
    {
        echo "hello gais ini dari class " . __CLASS__ . PHP_EOL;
    }
}

class Turunan extends TraitOverriding
{
    use A {
        // Kita bisa mengoverride modifier / visibility pada trait
        # A as private;
    }
}

// method hello dalam trait tertimpa oleh milik class TraitOverriding 
$obj = new TraitOverriding();
$obj->hello();

// method hello akan tertimpa oleh trait
$obj2 = new Turunan();
$obj2->hello();
