<?php
    // 1. 畫布
    // 2. 作畫 (選顏色,...)
    // 3. 輸出 (Browser / File)
    // 4. 清除記憶體

    $gd = imagecreatefromjpeg('imgs/coffee.jpg');
    $yellow = ImageColorAllocate($gd, 255, 255, 0);
    imagettftext($gd, 48, -15, 100, 300, $yellow, 
        'imgs/mingliu.ttc', 'Hello, 資展國際');


    //header('content-type: image/jpeg');
    ImageJpeg($gd, "imgs/span.jpg");

    ImageDestroy($gd);
?>