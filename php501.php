<?php
echo "<h1>";

function add($a,$b)
{
    $a = 10;
    $b = 5;
    $add  = $a + $b;
    echo "$a + $b = $add <br />";
}
add(20,5);

function sub($a,$b)
{
    // $a = 10;
    // $b = 5;
    $sub = $a - $b;
    return "$a - $b = $sub <br />";
}
echo (sub(30,20));


function mul($a,$b)
{
    // $a = 10;
    // $b = 5;
    $mul = $a * $b;
    return "$a * $b = $mul <br />";
}
echo (mul(20,30));

function div()
{
    $a = 11.20;
    $b = 5;
    $div = $a / $b;
    echo "$a / $b = $div <br />";
}
div();

function mod()
{
    $a = 11;
    $b = 5;
    $div = $a % $b;
    echo "$a % $b = $div <br />";
}
mod();

echo "</h1>";
