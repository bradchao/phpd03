<?php
    // 1. 畫布
    // 2. 作畫 (選顏色,...)
    // 3. 輸出 (Browser / File)
    // 4. 清除記憶體

    $width = 400;
    $rate = $_GET['rate']; // 50%
    
    $gd = ImageCreate($width, 20);

    $red = ImageColorAllocate($gd, 255, 0, 0);
    $yellow = ImageColorAllocate($gd, 255, 255, 0);
    ImageFilledRectangle($gd, 0,0,$width,20, $yellow);
    ImageFilledRectangle($gd, 0,0, $width*$rate/100 ,20, $red);

    header('content-type: image/jpeg');
    ImageJpeg($gd);

    ImageDestroy($gd);
?>