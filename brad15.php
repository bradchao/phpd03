<table border='1' width='100%'>
<?php
    define('ROWS', 1);
    define('COLS', 9);
    define('START', 1);

    for($k = 0; $k < ROWS; $k++){
        echo '<tr>';
        for ($j = START; $j <= (START+COLS-1); $j++){
            $newj = $j + $k * COLS;
            echo '<td>';
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