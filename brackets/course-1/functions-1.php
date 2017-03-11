<?php

function sayHello()
{
    echo 'Hello', "<br>";
}
function five()
{
    return 5;
}
function funct1($param1) {
    echo $param1, "<br>";
}
sayHello();
$five = five();
echo $five, "<br>";

$var1 = five();
funct1($var1);

echo str_repeat('Hello, ', 10), "<br>";