<table border='1' width='100%'>
<?php
    define('ROWS', 4);
    define('COLS', 4);
    define('START', 1);

    for($k = 0; $k < ROWS; $k++){
        echo '<tr>';
        for ($j = START; $j <= (START+COLS-1); $j++){
            $newj = $j + $k * COLS;

            if ($k % 2 == 0){
                if ($j % 2 == 0){
                    echo '<td bgcolor="yellow">';
                }else{
                    echo '<td bgcolor="pink">';
                }    
            }else{
                if ($j % 2 != 0){
                    echo '<td bgcolor="yellow">';
                }else{
                    echo '<td bgcolor="pink">';
                }
    
            }
            
            for($i = 1; $i <= 9; $i++){
                $r = $newj * $i;
                echo "{$newj} x {$i} = {$r}<br />";
            }
            echo '</td>';    
        }
        echo '</tr>';
    }
?>
</table>