<?php

$students=array("sneha","beema","ameera","ciyana","Basima");

echo"<h2>Array before sorting:</h2>";
print_r($students);

echo"<br><br>";

asort($students);
echo"<h2> array after ascending order(asort):";
print_r($students);

echo"<br><br>";

arsort($students);
echo"<h2> array after ascending order(arsort):";
print_r($students);
?>

