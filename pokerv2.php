<?php
    // 1. 洗牌
    $poker = array();
    for ($i=0; $i<52; $i++){
        do{
            $temp = rand(0,51);
            // 檢查機制
            $isRepeat = false;
            for ($j = 0; $j < $i; $j++){
                if ($poker[$j] == $temp){
                    // 重複了
                    $isRepeat = true;
                    break;
                }
            }
        }while ($isRepeat);

        $poker[$i] = $temp;
    }

    foreach($poker as $card){
        echo "{$card}<br />";
    }

?>