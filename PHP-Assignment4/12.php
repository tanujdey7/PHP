<html>
    <!-- 
        Tanuj Dey (c) github.com/tanujdey7
    -->
    <body>
<?php
    function create_thumbnail($path) {
        $file = file_get_contents($path);
        $og_pic = imagecreatefromstring($file);
        $width = imagesx($og_pic);
        $height = imagesy($og_pic);
        $thumbwidth = $width/7;
        $thumbheight = $height/7;
        $thumbnail = imagecreatetruecolor($thumbwidth,$thumbheight);
        //dest,src,dest_x,dest_y,src_x,src_y,dest_w,dest_h,src_w,src_h
        imagecopyresampled($thumbnail,$og_pic,0,0,0,0,$thumbwidth,$thumbheight,$width,$height);
        imagejpeg($thumbnail,'thumb.jpg');
        imagedestroy($thumbnail);

    }
    create_thumbnail('bg.jpg');
?> 
    <img src="thumb.jpg">
    </body>
</html>