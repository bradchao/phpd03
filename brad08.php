<?php
    $result = $x = $y = $op ='';
    if ( isset($_GET['x']) && isset($_GET['y'])){
        $op = $_GET['op'];
        $x = $_GET['x'];
        $y = $_GET['y'];
    
        if ($op == 1) $result = $x + $y;        
        if ($op == 2) $result = $x - $y;        
        if ($op == 3) $result = $x * $y;        
        if ($op == 4) {
            $r1 = (int)($x / $y);
            $r2 = $x % $y;
            $result = "{$r1} ...... {$r2}";
        }        
    }
?>
<form>
    <input name="x" value='<?php echo $x; ?>'>
    <select name="op">
        <option value='1' <?php echo ($op==1?'selected':''); ?>>加</option>
        <option value='2' <?php echo ($op==2?'selected':''); ?>>減</option>
        <option value='3' <?php echo ($op==3?'selected':''); ?>>x</option>
        <option value='4' <?php echo ($op==4?'selected':''); ?>>/</option>
    </select>
    <input name="y" value='<?php echo $y; ?>'>
    <input type="submit" value="="/>
    <span><?php echo $result; ?></span>
</form>