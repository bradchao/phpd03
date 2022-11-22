<?php
    $year = 2022;

    if ($year % 4 == 0){
        if ($year % 100 == 0){
            if ($year % 400 == 0){
                // 29
            }else{
                // 28
            }
        }else{
            // 29
        }
    }else{
        // 28
    }
?>
<hr />
<?php
    if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)){
        // 29
    }else{
        // 28
    }
?>