<?php
    define('LETTERS', 'ABCDEFGHIJKLMNOPQRSTUVWXYZ');

    function checkTWId($id){
        $isRight = false;

        // 1. 基本檢查: 4
        if (preg_match('/^[A-Z][1289][0-9]{8}$/', $id)){
            $isRight = true;
        }

        return $isRight;
    }
?>