<h1>Задачи - циклы</h1>
<h2>Задача 1:</h2>
<?php
$startNumber = 1;
$multipliper = 3;
for ($quantity = 4; $quantity > 0; $quantity--) {
    $startNumber = $startNumber * $multipliper;
    echo "$startNumber <br>";
}
?>

<h2>Задача 2:</h2>
<?php

$sum = 0;
for ($lastNumber = 10; $lastNumber > 0; $lastNumber--) {
    $sum = $sum + $lastNumber;
    echo "$sum <br>";
}
?>

<h2>Задача 3:</h2>
<?php
$lastNumber = 10;
$multiplicationResult = 1;
for ($i=2; $i<=$lastNumber; $i+=2) {
    $multiplicationResult *= $i;
    echo "$multiplicationResult <br>";
}
?>


<h2>Задача 4:</h2>
<?php

$rast = 10;

echo "10 <br>";
for ($n = 5; $n>0; $n-=1) {
    $rast = $rast+$rast* 0.1;
   
    echo "$rast <br>";
}
?>


<h2>Задача 5:</h2>
<?php

for ($n = 0; $n<=16; $n++) {
    $r = 32-2*$n;
   
    echo "rabbit $n ,goose $r <br>";
}
?>