<table border='1' width='100%'>
    <tr>
        <?php
            for ($j = 2; $j <= 5; $j++){
                echo '<td>';
                for($i = 1; $i <= 9; $i++){
                    $r = $j * $i;
                    echo "{$j} x {$i} = {$r}<br />";
                }
                echo '</td>';    
            }
        ?>
    </tr>
    <tr>
        <td>
            2 x 1 = 2<br />
            2 x 1 = 2<br />
            2 x 1 = 2<br />
            2 x 1 = 2<br />
        </td>
        <td>
            2 x 1 = 2<br />
            2 x 1 = 2<br />
            2 x 1 = 2<br />
            2 x 1 = 2<br />
        </td>
        <td>
            2 x 1 = 2<br />
            2 x 1 = 2<br />
            2 x 1 = 2<br />
            2 x 1 = 2<br />
        </td>
        <td>
            2 x 1 = 2<br />
            2 x 1 = 2<br />
            2 x 1 = 2<br />
            2 x 1 = 2<br />
        </td>
    </tr>
</table>