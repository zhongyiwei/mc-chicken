<?php

if ($COAStatus == '') {
    $source = $Symbol1;
    $source1 = $Symbol2;
    $source2 = $Symbol3;
    $source3 = $Symbol4;

    $source4 = $Shield1;


    $height = 850;
    $width = 650;
    $target_img = imagecreatetruecolor($width, $height);

    imagesavealpha($target_img, true);
//$target_img = imagecreate($width, $height);
//$target = 'Your Coat of Arm.png';
    $trans_colour = imagecolorallocatealpha($target_img, 0, 0, 0, 127);
    imagefill($target_img, 0, 0, $trans_colour);


    $source_img = imagecreatefrompng($source);
    $source_img1 = imagecreatefrompng($source1);
    $source_img2 = imagecreatefrompng($source2);
    $source_img3 = imagecreatefrompng($source3);

    $source_img4 = imagecreatefrompng($source4);

//$target_img = imagecreatefrompng($target);

    $size = getimagesize($source);
    $size1 = getimagesize($source1);
    $size2 = getimagesize($source2);
    $size3 = getimagesize($source3);

    $size4 = getimagesize($source4);


    $white = imagecolorallocate($target_img, 255, 255, 255);
    $black = imagecolorallocate($target_img, 0, 0, 0);



    $valueWidth = 75;
    $valueHeight = 75;

    $x = 240;
    $y = 350;

    imageantialias($target_img, true);

    imagecopyresampled($target_img, $source_img4, 0, 0, 0, 0, $width, $height, $size4[0], $size4[1]);



    imagecopyresampled($target_img, $source_img, $x, $y, 0, 0, $valueWidth, $valueHeight, $size[0], $size[1]);
    imagecopyresampled($target_img, $source_img1, $valueWidth + $x + 15, $y, 0, 0, $valueWidth, $valueHeight, $size1[0], $size1[1]);
    imagecopyresampled($target_img, $source_img2, $x, $valueHeight + $y, 0, 0, $valueWidth, $valueHeight, $size2[0], $size2[1]);
    imagecopyresampled($target_img, $source_img3, $valueWidth + $x + 15, $valueHeight + $y, 0, 0, $valueWidth, $valueHeight, $size3[0], $size3[1]);



    imageColorTransparent($target_img, $white);

//imageColorTransparent($target_img, $black);
//imagecopy ($target_img,$source_img,0,0,0,0,$size[0],$size[1]);
//imagecopy ($target_img,$source_img1,$size[0],0,0,0,$size1[0],$size1[1]);


    Header("Content-type: image/png");
    imagepng($target_img);
} else {
    echo $COAStatus;
}
?>
