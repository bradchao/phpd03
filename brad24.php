<?php
    function sayYa(){
        echo 'Ya<br />';
    }

    function sayHello($name = 'World'){
        echo "Hello, {$name}<br />";
    }

    function sayHelloV1($name, $n = 1){
        for ($i=0;$i<$n;$i++){
            echo "Hello, {$name}<br />";
        }
    }

    function sum(){
        $args = func_get_args();
        // count($args) => 參數個數
        // gettype($args[?]) => 參數型別

        $ret = 0;
        foreach($args as $v){
            $ret += $v;
        }

        return $ret;
    }

    sayYa(); sayYa();
    sayHello('Brad'); sayHello('Eric');
    sayHello();
    sayHelloV1('Brad', 2);

    $value = sum(1,2,3,4);
    echo $value;

?>