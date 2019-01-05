<?php 
header("Content-type: image/png"); 

$im = @imagecreate(100, 100) 
   or die("Cannot Initialize new GD image stream"); 
$background_color = imagecolorallocate($im,  
                                255, 255, 255 //white 
                                ); 

$black = imagecolorallocate($im, 0, 0, 0); 
imagechar($im, 
        10, 10, // first point coordinates 
        10,10, // last point coordinates 
        $black); 
imagechar($im, 
        20, 20, // first point coordinates 
        20,20, // last point coordinates 
        $black); 
imagechar($im, 
        30, 30, // first point coordinates 
        30,30, // last point coordinates 
        $black);
imagechar($im, 
        40, 40, // first point coordinates 
        40,40, // last point coordinates 
        $black); 
imagechar($im, 
        50, 50, // first point coordinates 
        50,50, // last point coordinates 
        $black); 
imagechar($im, 
        60, 60, // first point coordinates 
        60,60, // last point coordinates 
        $black); 
imagechar($im, 
        70, 70, // first point coordinates 
        70,70, // last point coordinates 
        $black); 
imagechar($im, 
        80, 80, // first point coordinates 
        80,80, // last point coordinates 
        $black); 



imagepng($im); 
imagedestroy($im); 
?>

