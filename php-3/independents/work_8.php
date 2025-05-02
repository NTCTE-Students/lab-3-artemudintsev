<?php
$array = [5, 2, 8, 1, 3];

sort($array);
echo "Сортировка по возрастанию: ";
print_r($array);

rsort($array);
echo "<br>Сортировка по убыванию: ";
print_r($array);