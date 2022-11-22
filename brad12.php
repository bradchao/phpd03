<script>
    let a = 10;
    switch(a){
        case 1:
            document.write('A');
            break;
        case 10:
            document.write('B');
            //break;
        case 100:
            document.write('C');
            break;
        default:
            document.write('X');
            break;
    }

    document.write('<br />OK');

</script>
<hr />
<?php
    $a = 102;
    switch($a){
        case 1:
            echo 'A';
            break;
        case 10:
            echo 'B';
            //break;
        default:
            echo 'X';
            break;

        case 100:
            echo 'C';
            break;
    }

    echo '<br />finish';
?>
<hr />
<?php
    $a = 10;
    if ($a == 1){

    }else if ($a == 10){

    }else if ($a == 100){

    }else{

    }
?>