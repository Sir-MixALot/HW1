<?php
# The 1st task:
$x = -22;
if ($x>0) echo '<p style="color: #06E015; font-size: 50px">' . $x . '</p>';
else if ($x==0) echo '<p style="color: #F0D607; font-size: 50px">' . $x . '</p>';
else echo '<p style="color: red; font-size: 50px">' . $x . '</p>';

# The 2nd task: 
$a2 = 2;
$b2 = 4;
$c2 = 11;
if ($a2>$b2){
    if($a2>$c2) $max2 = $a2;
    else $max2 = $c2;
}else{
    if($b2>$c2) $max2 = $b2;
    else $max2 = $c2;
}
if ($a2<$b2){
    if($a2<$c2) $min2 = $a2;
    else $min2 = $c2;
}else{
    if($b2<$c2) $min2 = $b2;
    else $min2 = $c2;
}
echo '<p style="color: blue; font-size: 50px">' . $min2+$max2 . '</p>';

# The 3rd task
$a3 = -66;
$b3 = 0;
$c3 = 3;
$d3 = -331;
$min3 = $a3;
if ($min3>$b3) $min3 = $b3;
else if ($min3>$c3) $min3 = $c3;
else if ($min3>$d3) $min3 = $d3;
echo '<p style="color: skyblue; font-size: 50px">' . $min3 . '</p>';

# The 4th task
$a4 = 20; //bag length
$b4 = 30; //bag width
$x4 = 40; //bag height
$c4 = 10; //item length
$d4 = 10; //item width
$y4 = 20; //item height
if (($c4<=$a4 && $d4<=$b4 && $y4<=$x4) && ($c4<=$x4 && $y4<=$a4 && $d4<=$b4) && ($d4<=$x4 && $c4<=$a4 && $y4<=$b4) && ($d4<=$x4 && $y4<=$a4 && $c4<=$b4) && ($y4<=$x4 && $d4<=$a4 && $c4<=$b4) && ($c4<=$x4 && $d4<=$a4 && $y4<=$b4)) echo '<p style="color: #06E015; font-size: 30px"> The Item is packed! </p>';
else echo '<p style="color: red; font-size: 30px"> The Item cannot be packed! </p>';