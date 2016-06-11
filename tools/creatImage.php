<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/5/24
 * Time: 下午8:03
 */
$image = imagecreate(400,400);
imagecolorallocate($image,255,0,0);
header('Content-type:image/png');
imagepng($image);