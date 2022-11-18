<?php
namespace MisClases {
class C {
    public $v;
    public function __construct($ini)
    {
        $this->v=$ini;
    }
    public function ver() {
        echo $this->v;
    }
}
}
$obj=new C(5);
$obj->v=66;
$obj->ver();
$obj->otro_atributo='Hola';

$o=new stdClass();
$o->n=5;
$o->p="hola";
var_dump($o);

