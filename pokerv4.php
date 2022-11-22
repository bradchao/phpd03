<?php
    $poker = range(0,51);
    shuffle($poker);

    // foreach($poker as $card){
    //     echo "{$card}<br />";
    // }    
?>
<hr />
<?php
    $players = [[],[],[],[]];
    foreach($poker as $i => $card){
        $players[$i%4][(int)($i/4)] = $card;
    }

    // foreach($players[1] as $card){
    //     echo "{$card}<br />";
    // }

?>
<!-- &spades; &hearts;  &diams; &clubs;  -->
<table border="1" width="100%">
    <?php
        $pattern = ['&spades;','<font color=red>&hearts;</font>',
        '<font color=red>&diams;</font>','&clubs;'];
        $value = ['A',2,3,4,5,6,7,8,9,10,'J','Q','K'];
        foreach($players as $player){
            //sort($player);
            echo '<tr>';
            foreach($player as $card){
                $p = $pattern[(int)$card/13];
                $v = $value[$card%13];
                echo "<td>{$p}{$v}</td>";
            }
            echo '</tr>';    
        }

        function mysort(&$ary){
            
        }

    ?>
</table>