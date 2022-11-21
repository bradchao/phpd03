<?php
    $result = $x = $y ='';
    if ( isset($_GET['x']) && isset($_GET['y'])){
        $x = $_GET['x'];
        $y = $_GET['y'];
    
        $result = $x + $y;        
    }
?>
<form>
    <input name="x" value='<?php echo $x; ?>'>
    +
    <input name="y" value='<?php echo $y; ?>'>
    <input type="submit" value="="/>
    <span><?php echo $result; ?></span>
</form>