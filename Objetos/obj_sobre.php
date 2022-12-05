<?php

class C {
    public $cad="Hola";
    public function __get(string $name): mixed {
        if ($name=="n")
            return 5;
        else
            return "No es n";
    }
}

$c=new C;

echo "<p>Cad: ".$c->cad;
echo "<p>Otro (n): ". $c->n;
echo "<p>Otro (!=n): ".$c->ppep;