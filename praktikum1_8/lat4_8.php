<?php
class one{
    private static $var=2;
    function __construct(){}
    static function disp(){
        print self::$var;
    }
    function __distruct(){} 
}
one::disp();
?>