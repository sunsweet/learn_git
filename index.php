<?php
class A {
    private $a;

    public function __construct(){
        $this->a = "class A";
        echo $this->a;
    }

}
class B extends A {
    private $a;
    public function __construct(){
        $this->a = "class B";
        echo $this->a;
    }
}

$ex = new B();
?>