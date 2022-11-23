<?php
    define('LETTERS', 'ABCDEFGHJKLMNPQRSTUVXYWZIO');

    function checkTWId($id){
        $isRight = false;

        // 1. 基本檢查: 4
        if (preg_match('/^[A-Z][1289][0-9]{8}$/', $id)){
            $c1 = substr($id, 0, 1);
            $n12 = strpos(LETTERS, $c1) + 10;
            $n1 = (int)($n12 / 10);
            $n2 = $n12 % 10;
            echo "debug:{$n12}:{$n1}:{$n2}<br />";

            $isRight = true;
        }

        return $isRight;
    }
?>