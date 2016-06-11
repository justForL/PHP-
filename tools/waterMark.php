<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/5/24
 * Time: 下午8:16
 */
//$image = imagecreatefrompng('123.png');
//header('Content-type:image/jpeg');
//imagecreate(400,400);
//imagestring($image,5,20,20,'jikexueyuan',imagecolorallocate($image,0,0,255));
//imagejpeg($image);


$image = imagecreatefrompng('123.png');
header('Content-type: image/png');
imagestring($image,10,5,5,'James',imagecolorallocate($image,0,255,0));
imagepng($image);