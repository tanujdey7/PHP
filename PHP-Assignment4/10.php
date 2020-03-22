    <!-- 
        Tanuj Dey (c) github.com/tanujdey7
    -->
<?php
    header("Content-type: image/jpeg");
    $imgpath = 'okay.jpg';
    $image = imagecreatefromjpeg($imgpath);
    $color = imagecolorallocate($image,255,0,0);
    $string = "Confidential";
    $fontsize = 15;
    $x = 10;
    $y = 10;
    imagestring($image,$fontsize,$y,$y,$string,$color);
    imagejpeg($image);
?>