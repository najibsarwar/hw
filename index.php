<?php


// * cheak smallernumber
function smallernumber($w,$x,$y,$z){

if ($w<$x && $w<$y && $w<$z){
echo "$w will be the smaller number ";
}

elseif ($y<$w && $y<$x && $y<$z) {
  "$y will be the smaller number";
}
 elseif ($y<$w && $y<$x && $y<$z) {
echo "$y is will be the smaller number";
 }
 else {
    echo "$z will be the smaller number";
 }
smallernumber(10,20,30,5);
}

?>