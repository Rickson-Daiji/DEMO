<?php
function addfive($num){
    $num +=5;
    echo "$num";
}
$x=10;
addfive($x);
echo $x;

function addfive1(&$num){
    $num +=5;
}
$x=10;
addfive1($x);
echo $x;
?>
