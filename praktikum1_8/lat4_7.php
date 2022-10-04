<?php
final class a 

{
    public function disp(){
        echo "inside the final function";
    }
}

class b extends a{
    function disp(){
        echo "inside the final function";
    }
}

$obj=new b();
$obj->disp();
?>