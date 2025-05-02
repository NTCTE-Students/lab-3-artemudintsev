<?php
$array = [10, 20, 30, 40, 50];
$searchElement = 30;
$index = array_search($searchElement, $array);

if ($index !== false) {
    echo "Элемент $searchElement найден на позиции $index";
} else {
    echo "Элемент $searchElement не найден в массиве";
}