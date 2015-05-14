<?php 
class Text 
{
    private function fun1()
    {
        echo "public fun1\n";
    }
    static function fun2()
    {
        echo "static fun2\n";
    }
    static public function __callStatic($method,$param)
    {
	    $instance = new static;
	    return call_user_func_array(array($instance, $method), $param);
    }
}

Text::fun1();
Text::fun2();
 ?>
