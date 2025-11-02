<?php
$x=10;
$a=20;

function show(){
    $b=7;
    global $x,$a;
    echo "$x$a$b";
}
show();
?>